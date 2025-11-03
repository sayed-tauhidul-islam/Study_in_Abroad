<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class FindAndRemoveExactDuplicatesSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info("🔍 Searching for EXACT duplicate course records...\n");
        
        // Find courses that have identical data (excluding id and timestamps)
        $allCourses = Course::all();
        $duplicatesFound = [];
        $coursesToDelete = [];
        
        $grouped = $allCourses->groupBy(function($course) {
            return md5(
                $course->university_id . '|' .
                $course->name . '|' .
                $course->level . '|' .
                $course->duration . '|' .
                $course->tuition_fee . '|' .
                $course->application_fee . '|' .
                $course->language
            );
        });
        
        $totalDuplicates = 0;
        
        foreach ($grouped as $hash => $courses) {
            if ($courses->count() > 1) {
                $first = $courses->first();
                $uni = $first->university;
                $duplicateCount = $courses->count() - 1;
                $totalDuplicates += $duplicateCount;
                
                $this->command->warn("   ⚠ {$uni->name}: '{$first->name}' ({$first->level}) - {$courses->count()} exact copies");
                
                // Keep the first one, delete the rest
                $courses->slice(1)->each(function($course) use (&$coursesToDelete) {
                    $coursesToDelete[] = $course->id;
                });
            }
        }
        
        if ($totalDuplicates > 0) {
            $this->command->warn("\n📊 Total EXACT duplicate records found: {$totalDuplicates}");
            $this->command->info("\n🗑️  Removing duplicates...");
            
            Course::whereIn('id', $coursesToDelete)->delete();
            
            $this->command->info("✅ Removed {$totalDuplicates} duplicate course records!");
            
            // Update university course counts
            $this->command->info("🔄 Updating university course counts...");
            foreach (\App\Models\University::all() as $uni) {
                $uni->update(['num_courses' => $uni->courses()->count()]);
            }
            
            $this->command->info("✅ Course counts updated!");
            $this->command->info("\n📊 New total courses: " . Course::count());
        } else {
            $this->command->info("✅ No exact duplicate records found!");
            $this->command->info("📊 Total courses: " . Course::count());
        }
    }
}

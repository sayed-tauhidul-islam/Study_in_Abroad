<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\University;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class RemoveDuplicateCoursesSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info("🔍 Checking for duplicate courses...\n");
        
        $totalDuplicatesRemoved = 0;
        $universitiesProcessed = 0;
        
        // Get all universities
        $universities = University::with('courses')->get();
        
        foreach ($universities as $university) {
            $courses = $university->courses;
            
            // Group courses by name and level to find duplicates
            $courseGroups = $courses->groupBy(function($course) {
                return strtolower($course->name) . '|' . strtolower($course->level);
            });
            
            $duplicatesInThisUni = 0;
            
            foreach ($courseGroups as $key => $group) {
                if ($group->count() > 1) {
                    // Keep the first course, delete the rest
                    $keepCourse = $group->first();
                    $duplicatesToDelete = $group->slice(1);
                    
                    foreach ($duplicatesToDelete as $duplicate) {
                        $duplicate->delete();
                        $duplicatesInThisUni++;
                        $totalDuplicatesRemoved++;
                    }
                }
            }
            
            if ($duplicatesInThisUni > 0) {
                $universitiesProcessed++;
                $this->command->info("✓ {$university->name}: Removed {$duplicatesInThisUni} duplicate courses");
            }
        }
        
        $this->command->info("\n📊 Summary:");
        $this->command->info("   Universities with duplicates: {$universitiesProcessed}");
        $this->command->info("   Total duplicate courses removed: {$totalDuplicatesRemoved}");
        $this->command->info("   Remaining courses: " . Course::count());
        
        // Update num_courses for all universities
        $this->command->info("\n🔄 Updating course counts for universities...");
        foreach (University::all() as $uni) {
            $uni->update(['num_courses' => $uni->courses()->count()]);
        }
        
        $this->command->info("\n✅ All duplicate courses have been removed!");
        $this->command->info("🎉 Each university now has unique courses!");
    }
}

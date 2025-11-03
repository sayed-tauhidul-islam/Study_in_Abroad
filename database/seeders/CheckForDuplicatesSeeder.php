<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\University;
use App\Models\Course;

class CheckForDuplicatesSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info("🔍 Final Check for Duplicate Courses...\n");
        
        $totalDuplicates = 0;
        $universitiesWithDuplicates = 0;
        
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
                    $duplicatesInThisUni += ($group->count() - 1);
                    $totalDuplicates += ($group->count() - 1);
                    
                    list($courseName, $courseLevel) = explode('|', $key);
                    $this->command->warn("   ⚠ {$university->name}: '{$courseName}' ({$courseLevel}) - {$group->count()} instances");
                }
            }
            
            if ($duplicatesInThisUni > 0) {
                $universitiesWithDuplicates++;
            }
        }
        
        if ($totalDuplicates == 0) {
            $this->command->info("✅ NO DUPLICATES FOUND!");
            $this->command->info("🎉 All courses are unique within each university!");
        } else {
            $this->command->warn("\n⚠ Summary:");
            $this->command->warn("   Universities with duplicates: {$universitiesWithDuplicates}");
            $this->command->warn("   Total duplicate courses found: {$totalDuplicates}");
        }
        
        // Show some sample universities with their unique courses
        $this->command->info("\n📚 Sample Universities with Course Counts:");
        $sampleUniversities = University::inRandomOrder()->limit(5)->withCount('courses')->get();
        foreach ($sampleUniversities as $uni) {
            $this->command->info("   • {$uni->name}: {$uni->courses_count} courses");
        }
    }
}

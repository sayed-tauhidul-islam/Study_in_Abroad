<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\University;

class ShowSampleUniqueCourses extends Seeder
{
    public function run(): void
    {
        $this->command->info("📚 Sample of Unique Course Names:\n");
        
        // Get random courses
        $courses = Course::with('university')->inRandomOrder()->limit(30)->get();
        
        foreach ($courses as $course) {
            $this->command->info("   • {$course->name}");
            $this->command->line("     Level: {$course->level} | University: {$course->university->name}");
            $this->command->line("     Duration: {$course->duration} | Fee: $" . number_format($course->tuition_fee, 0));
            $this->command->line("");
        }
        
        // Verify uniqueness
        $totalCourses = Course::count();
        $uniqueNames = Course::distinct('name')->count();
        
        $this->command->info("📊 Statistics:");
        $this->command->info("   Total courses: {$totalCourses}");
        $this->command->info("   Unique names: {$uniqueNames}");
        $this->command->info("   100% unique: " . ($totalCourses === $uniqueNames ? '✓ YES' : '✗ NO'));
        
        // Check for any duplicates
        if ($totalCourses !== $uniqueNames) {
            $this->command->warn("\n⚠️  Found some duplicate names:");
            $duplicates = Course::select('name')
                ->groupBy('name')
                ->havingRaw('COUNT(*) > 1')
                ->get();
            
            foreach ($duplicates as $dup) {
                $count = Course::where('name', $dup->name)->count();
                $this->command->warn("   • {$dup->name}: {$count} instances");
            }
        }
    }
}

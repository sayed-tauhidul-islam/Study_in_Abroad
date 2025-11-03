<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CheckGlobalDuplicateCoursesSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info("🔍 Checking for duplicate courses globally (across all data)...\n");
        
        // Find exact duplicates (same name, level, university_id, tuition_fee, etc.)
        $exactDuplicates = DB::select("
            SELECT 
                university_id,
                name,
                level,
                COUNT(*) as count
            FROM courses
            GROUP BY university_id, name, level
            HAVING COUNT(*) > 1
        ");
        
        if (count($exactDuplicates) > 0) {
            $this->command->warn("⚠️  Found " . count($exactDuplicates) . " sets of duplicate courses:");
            $totalDuplicates = 0;
            
            foreach ($exactDuplicates as $dup) {
                $uni = \App\Models\University::find($dup->university_id);
                $duplicateCount = $dup->count - 1; // Minus 1 because we keep one
                $totalDuplicates += $duplicateCount;
                
                $this->command->warn("   • {$uni->name}: '{$dup->name}' ({$dup->level}) - {$dup->count} instances ({$duplicateCount} duplicates)");
            }
            
            $this->command->info("\n📊 Total duplicate records to remove: {$totalDuplicates}");
        } else {
            $this->command->info("✅ NO DUPLICATES FOUND!");
        }
        
        // Also check for potential duplicates (same name and level but different details)
        $this->command->info("\n🔍 Checking for similar courses (same name+level, different details)...");
        
        $similarCourses = DB::select("
            SELECT 
                name,
                level,
                COUNT(*) as total_count,
                COUNT(DISTINCT tuition_fee) as different_fees,
                COUNT(DISTINCT duration) as different_durations
            FROM courses
            GROUP BY name, level
            HAVING COUNT(*) > 1
            ORDER BY total_count DESC
            LIMIT 20
        ");
        
        if (count($similarCourses) > 0) {
            $this->command->info("\nTop similar courses:");
            foreach ($similarCourses as $course) {
                $this->command->info("   • {$course->name} ({$course->level}): {$course->total_count} instances, {$course->different_fees} different fees, {$course->different_durations} different durations");
            }
        }
        
        // Show total statistics
        $totalCourses = Course::count();
        $uniqueCombinations = DB::select("SELECT COUNT(DISTINCT CONCAT(university_id, '-', name, '-', level)) as count FROM courses")[0]->count;
        
        $this->command->info("\n📊 Overall Statistics:");
        $this->command->info("   Total courses in database: {$totalCourses}");
        $this->command->info("   Unique (university + name + level): {$uniqueCombinations}");
        $this->command->info("   Potential duplicates: " . ($totalCourses - $uniqueCombinations));
    }
}

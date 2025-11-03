<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\University;

class VerifyUniversitiesAndCoursesSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info("🔍 Verifying Universities and Courses Data...\n");
        
        // Check a few sample countries
        $sampleCountries = Country::whereIn('country_code', ['US', 'GB', 'AU', 'CA', 'TH'])
                                   ->with('universities.courses')
                                   ->get();
        
        foreach ($sampleCountries as $country) {
            $universityCount = $country->universities->count();
            $this->command->info("📍 {$country->name} ({$country->country_code}):");
            $this->command->info("   ├─ Total Universities: {$universityCount}");
            
            if ($universityCount > 0) {
                $firstUni = $country->universities->first();
                $coursesCount = $firstUni->courses->count();
                $this->command->info("   ├─ Sample University: {$firstUni->name}");
                $this->command->info("   └─ Courses in this university: {$coursesCount}");
                
                if ($coursesCount > 0) {
                    $sampleCourse = $firstUni->courses->first();
                    $this->command->info("      Sample Course: {$sampleCourse->name} ({$sampleCourse->level})");
                }
            }
            $this->command->info("");
        }
        
        // Overall statistics
        $totalCountries = Country::count();
        $totalUniversities = University::count();
        $totalCourses = \App\Models\Course::count();
        
        $this->command->info("📊 Overall Statistics:");
        $this->command->info("   Total Countries: {$totalCountries}");
        $this->command->info("   Total Universities: {$totalUniversities}");
        $this->command->info("   Total Courses: {$totalCourses}");
        $this->command->info("   Average Universities per Country: " . round($totalUniversities / $totalCountries, 2));
        $this->command->info("   Average Courses per University: " . round($totalCourses / $totalUniversities, 2));
        
        $this->command->info("\n✅ Verification Complete!");
    }
}

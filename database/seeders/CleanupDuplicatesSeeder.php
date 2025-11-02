<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;
use App\Models\Course;

class CleanupDuplicatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Cleaning up duplicate countries...');
        $this->cleanupDuplicateCountries();
        
        $this->command->info('Cleaning up duplicate courses...');
        $this->cleanupDuplicateCourses();
        
        $this->command->info('Cleanup completed!');
    }
    
    private function cleanupDuplicateCountries()
    {
        // Get all countries grouped by name
        $countries = Country::all()->groupBy('name');
        
        $duplicatesRemoved = 0;
        
        foreach ($countries as $name => $countryGroup) {
            if ($countryGroup->count() > 1) {
                $this->command->info("Found {$countryGroup->count()} entries for: {$name}");
                
                // Keep the first one with most data, delete others
                $keeper = $countryGroup->sortByDesc(function($country) {
                    return strlen($country->description ?? '') + 
                           strlen($country->details ?? '') + 
                           ($country->image_url ? 100 : 0) +
                           ($country->capital ? 50 : 0);
                })->first();
                
                // Delete duplicates
                foreach ($countryGroup as $country) {
                    if ($country->id !== $keeper->id) {
                        // Transfer universities to the keeper
                        DB::table('universities')
                            ->where('country_id', $country->id)
                            ->update(['country_id' => $keeper->id]);
                        
                        $country->delete();
                        $duplicatesRemoved++;
                        $this->command->info("  Removed duplicate ID: {$country->id}");
                    }
                }
            }
        }
        
        $this->command->info("Removed {$duplicatesRemoved} duplicate countries.");
    }
    
    private function cleanupDuplicateCourses()
    {
        // Get all courses grouped by name and university
        $allCourses = Course::all();
        $grouped = $allCourses->groupBy(function($course) {
            return $course->university_id . '-' . strtolower(trim($course->name));
        });
        
        $duplicatesRemoved = 0;
        
        foreach ($grouped as $key => $courseGroup) {
            if ($courseGroup->count() > 1) {
                // Keep the first one with most data
                $keeper = $courseGroup->sortByDesc(function($course) {
                    return strlen($course->description ?? '') + 
                           ($course->tuition_fee > 0 ? 100 : 0) +
                           strlen($course->duration ?? '');
                })->first();
                
                // Delete duplicates
                foreach ($courseGroup as $course) {
                    if ($course->id !== $keeper->id) {
                        $course->delete();
                        $duplicatesRemoved++;
                    }
                }
            }
        }
        
        $this->command->info("Removed {$duplicatesRemoved} duplicate courses.");
    }
}

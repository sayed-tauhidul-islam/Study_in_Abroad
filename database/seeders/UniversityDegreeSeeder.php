<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\University;
use App\Models\Degree;

class UniversityDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universities = University::all();
        $degrees = Degree::all();

        if ($degrees->isEmpty()) {
            $this->command->warn('No degrees found in the database. Please create degrees first.');
            return;
        }

        foreach ($universities as $university) {
            // Check if university already has degrees
            $currentDegreeCount = $university->degrees()->count();
            
            if ($currentDegreeCount >= 5) {
                $this->command->info("University '{$university->name}' already has {$currentDegreeCount} degrees. Skipping.");
                continue;
            }

            // Calculate how many degrees to assign (at least 5, random up to 10)
            $degreesToAssign = rand(5, min(10, $degrees->count()));
            
            // Get random degrees
            $randomDegrees = $degrees->random($degreesToAssign)->pluck('id');
            
            // Sync degrees (this will keep existing ones and add new ones)
            $university->degrees()->syncWithoutDetaching($randomDegrees);
            
            $finalCount = $university->degrees()->count();
            $this->command->info("Assigned degrees to '{$university->name}'. Total degrees: {$finalCount}");
        }

        $this->command->info('University degree assignment completed!');
    }
}

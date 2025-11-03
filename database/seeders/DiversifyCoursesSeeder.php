<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\University;
use App\Models\Course;
use Faker\Factory as Faker;

class DiversifyCoursesSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        
        $this->command->info("🔍 Diversifying course names to add more variety...\n");
        
        $specializations = [
            // Business specializations
            'Business Administration' => ['International', 'Digital', 'Strategic', 'Global', 'Sustainable', 'Corporate', 'Innovation'],
            'Marketing Management' => ['Digital', 'Brand', 'Strategic', 'International', 'Content', 'Social Media'],
            'Finance' => ['Corporate', 'International', 'Investment', 'Public', 'Digital', 'Quantitative'],
            'Accounting' => ['Forensic', 'Management', 'International', 'Financial', 'Public'],
            
            // Engineering specializations
            'Computer Science' => ['Artificial Intelligence', 'Cybersecurity', 'Software Engineering', 'Data Science', 'Cloud Computing', 'Game Development'],
            'Mechanical Engineering' => ['Automotive', 'Aerospace', 'Robotics', 'Energy Systems', 'Manufacturing'],
            'Civil Engineering' => ['Structural', 'Environmental', 'Transportation', 'Geotechnical', 'Construction Management'],
            'Electrical Engineering' => ['Power Systems', 'Electronics', 'Telecommunications', 'Control Systems', 'Renewable Energy'],
            
            // Medical specializations
            'Medicine' => ['General', 'Clinical', 'Research', 'Emergency', 'Community'],
            'Nursing' => ['Pediatric', 'Geriatric', 'Psychiatric', 'Critical Care', 'Community Health'],
            'Pharmacy' => ['Clinical', 'Industrial', 'Hospital', 'Community', 'Research'],
            
            // Sciences
            'Biology' => ['Molecular', 'Marine', 'Environmental', 'Cellular', 'Computational'],
            'Chemistry' => ['Organic', 'Inorganic', 'Physical', 'Analytical', 'Pharmaceutical'],
            'Physics' => ['Theoretical', 'Applied', 'Quantum', 'Astrophysics', 'Nuclear'],
            
            // Social Sciences
            'Psychology' => ['Clinical', 'Educational', 'Industrial-Organizational', 'Developmental', 'Forensic'],
            'Economics' => ['Development', 'International', 'Financial', 'Health', 'Environmental'],
            'Law' => ['International', 'Corporate', 'Criminal', 'Environmental', 'Human Rights'],
        ];
        
        $coursesUpdated = 0;
        $universities = University::with('courses')->get();
        
        foreach ($universities as $university) {
            foreach ($university->courses as $course) {
                // Check if course name can be specialized
                foreach ($specializations as $baseName => $specs) {
                    if ($course->name === $baseName) {
                        // 30% chance to add specialization
                        if (rand(1, 100) <= 30) {
                            $spec = $faker->randomElement($specs);
                            $newName = $baseName . ' - ' . $spec;
                            
                            // Check if this specialized name already exists in this university
                            $exists = $university->courses()->where('name', $newName)->where('level', $course->level)->exists();
                            
                            if (!$exists) {
                                $course->name = $newName;
                                $course->save();
                                $coursesUpdated++;
                            }
                        }
                        break;
                    }
                }
            }
        }
        
        $this->command->info("✅ Diversified {$coursesUpdated} course names with specializations!");
        $this->command->info("🎉 Courses now have more variety and uniqueness!");
    }
}

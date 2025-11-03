<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\University;
use App\Models\Course;
use Faker\Factory as Faker;

class EnsureMinimumUniversitiesAndCoursesSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        
        $this->command->info("🔍 Checking all countries for minimum requirements...\n");
        
        $countries = Country::withCount('universities')->get();
        $countriesUpdated = 0;
        $universitiesCreated = 0;
        $coursesCreated = 0;
        
        foreach ($countries as $country) {
            $currentUniversityCount = $country->universities_count;
            $needsMore = false;
            
            // Ensure at least 10 universities per country
            if ($currentUniversityCount < 10) {
                $needsMore = true;
                $universitiesToCreate = 10 - $currentUniversityCount;
                
                $this->command->info("📍 {$country->name} ({$country->country_code}): Has {$currentUniversityCount} universities, adding {$universitiesToCreate}...");
                
                for ($i = 1; $i <= $universitiesToCreate; $i++) {
                    $university = University::create([
                        'name' => $this->generateUniversityName($country->name, $faker),
                        'country_id' => $country->id,
                        'description' => $faker->paragraphs(3, true),
                        'ranking' => $faker->numberBetween(1, 1000),
                        'website' => 'https://' . strtolower(str_replace(' ', '', $faker->words(2, true))) . '.edu',
                        'logo_url' => 'https://ui-avatars.com/api/?name=' . urlencode($this->generateUniversityName($country->name, $faker, true)) . '&size=200',
                        'image_url' => $this->getUniversityImage($faker),
                        'environment_quality' => $faker->randomFloat(1, 7.0, 9.9),
                        'num_courses' => 20, // Will be updated after creating courses
                        'bd_students' => $faker->numberBetween(50, 5000),
                    ]);
                    
                    $universitiesCreated++;
                    
                    // Create 20 courses for each university
                    $coursesForThisUni = $this->createCoursesForUniversity($university, $faker);
                    $coursesCreated += $coursesForThisUni;
                }
                
                $countriesUpdated++;
            } else {
                // Check if existing universities have enough courses
                $universities = University::where('country_id', $country->id)->withCount('courses')->get();
                foreach ($universities as $university) {
                    if ($university->courses_count < 20) {
                        $coursesToCreate = 20 - $university->courses_count;
                        $coursesForThisUni = $this->createCoursesForUniversity($university, $faker, $coursesToCreate);
                        $coursesCreated += $coursesForThisUni;
                    }
                }
            }
        }
        
        $this->command->info("\n✅ Summary:");
        $this->command->info("   Countries updated: {$countriesUpdated}");
        $this->command->info("   Universities created: {$universitiesCreated}");
        $this->command->info("   Courses created: {$coursesCreated}");
        $this->command->info("\n🎉 All countries now have at least 10 universities with 20+ courses each!");
    }
    
    private function generateUniversityName($countryName, $faker, $short = false)
    {
        $prefixes = ['National', 'Royal', 'International', 'State', 'Metropolitan', 'Federal', 'Imperial', 'Central', 'Technical', 'Medical'];
        $suffixes = ['University', 'Institute of Technology', 'College', 'University of Science', 'Polytechnic University', 'University of Technology', 'Academy'];
        
        if ($short) {
            return $faker->randomElement($prefixes) . ' ' . $faker->randomElement(['University', 'Institute', 'College']);
        }
        
        $cityNames = [
            'Capital', 'Victoria', 'Windsor', 'Wellington', 'Stanford', 'Cambridge', 
            'Oxford', 'Harvard', 'Madison', 'Richmond', 'Georgetown', 'Franklin'
        ];
        
        $types = [
            $faker->randomElement($prefixes) . ' University of ' . $countryName,
            $faker->randomElement($cityNames) . ' ' . $faker->randomElement($suffixes),
            $countryName . ' ' . $faker->randomElement($suffixes),
            $faker->randomElement($prefixes) . ' ' . $faker->randomElement($cityNames) . ' University',
        ];
        
        return $faker->randomElement($types);
    }
    
    private function getUniversityImage($faker)
    {
        $imageIds = [
            'photo-1541339907198-e08756dedf3f', // campus building
            'photo-1562774053-701939374585', // university building
            'photo-1523050854058-8df90110c9f1', // university campus
            'photo-1498243691581-b145c3f54a5a', // library
            'photo-1564981797816-1043664bf78d', // modern campus
            'photo-1519389950473-47ba0277781c', // students
            'photo-1571260899304-425eee4c7efc', // university hall
            'photo-1592280771190-3e2e4d571952', // classroom
            'photo-1522202176988-66273c2fd55f', // students learning
            'photo-1503676260728-1c00da094a0b', // graduation
        ];
        
        $imageId = $faker->randomElement($imageIds);
        return "https://images.unsplash.com/{$imageId}?auto=format&fit=crop&w=1200&q=80";
    }
    
    private function createCoursesForUniversity($university, $faker, $count = 20)
    {
        $courseLevels = ['Undergraduate', 'Postgraduate', 'Doctorate', 'Diploma', 'Certificate'];
        $courseNames = [
            // Business & Management
            'Business Administration', 'International Business', 'Marketing Management', 'Finance', 'Accounting',
            'Human Resource Management', 'Entrepreneurship', 'Supply Chain Management',
            
            // Engineering & Technology
            'Computer Science', 'Software Engineering', 'Mechanical Engineering', 'Civil Engineering',
            'Electrical Engineering', 'Chemical Engineering', 'Aerospace Engineering', 'Data Science',
            'Artificial Intelligence', 'Cybersecurity', 'Information Technology',
            
            // Medical & Health Sciences
            'Medicine', 'Nursing', 'Pharmacy', 'Public Health', 'Biomedical Sciences',
            'Dentistry', 'Physiotherapy', 'Nutrition and Dietetics',
            
            // Social Sciences & Humanities
            'Psychology', 'Sociology', 'International Relations', 'Political Science',
            'Economics', 'Law', 'Journalism', 'Education', 'English Literature',
            'History', 'Philosophy', 'Anthropology',
            
            // Natural Sciences
            'Biology', 'Chemistry', 'Physics', 'Mathematics', 'Environmental Science',
            'Biotechnology', 'Microbiology', 'Geology',
            
            // Arts & Design
            'Fine Arts', 'Graphic Design', 'Architecture', 'Fashion Design',
            'Interior Design', 'Music', 'Film Studies', 'Photography',
            
            // Others
            'Agriculture', 'Veterinary Medicine', 'Hospitality Management', 'Tourism Management',
            'Sports Science', 'Criminology', 'Social Work', 'Urban Planning'
        ];
        
        $languages = ['English', 'English, Local', 'English, French', 'English, German', 'English, Spanish'];
        
        // Get existing courses for this university to avoid duplicates
        $existingCourses = $university->courses()
            ->get()
            ->map(function($course) {
                return strtolower($course->name) . '|' . strtolower($course->level);
            })
            ->toArray();
        
        $coursesCreated = 0;
        $attempts = 0;
        $maxAttempts = $count * 10; // Allow multiple attempts to find unique combinations
        
        while ($coursesCreated < $count && $attempts < $maxAttempts) {
            $attempts++;
            $courseName = $faker->randomElement($courseNames);
            $level = $faker->randomElement($courseLevels);
            
            // Check if this combination already exists
            $courseKey = strtolower($courseName) . '|' . strtolower($level);
            if (in_array($courseKey, $existingCourses)) {
                continue; // Skip this combination, try another
            }
            
            $duration = match($level) {
                'Undergraduate' => $faker->randomElement(['3 years', '4 years', '5 years']),
                'Postgraduate' => $faker->randomElement(['1 year', '2 years', '18 months']),
                'Doctorate' => $faker->randomElement(['3 years', '4 years', '5 years']),
                'Diploma' => $faker->randomElement(['1 year', '2 years']),
                'Certificate' => $faker->randomElement(['6 months', '1 year']),
            };
            
            $tuitionFee = match($level) {
                'Undergraduate' => $faker->randomFloat(2, 8000, 35000),
                'Postgraduate' => $faker->randomFloat(2, 12000, 45000),
                'Doctorate' => $faker->randomFloat(2, 15000, 50000),
                'Diploma' => $faker->randomFloat(2, 5000, 15000),
                'Certificate' => $faker->randomFloat(2, 3000, 10000),
            };
            
            Course::create([
                'university_id' => $university->id,
                'name' => $courseName,
                'description' => $faker->paragraphs(2, true),
                'duration' => $duration,
                'level' => $level,
                'tuition_fee' => $tuitionFee,
                'application_fee' => $faker->randomFloat(2, 50, 200),
                'language' => $faker->randomElement($languages),
                'requirements' => $this->generateRequirements($level, $faker),
            ]);
            
            // Add to existing courses array to prevent duplicates in this batch
            $existingCourses[] = $courseKey;
            $coursesCreated++;
        }
        
        // Update university's num_courses
        $university->update(['num_courses' => $university->courses()->count()]);
        
        return $coursesCreated;
    }
    
    private function generateRequirements($level, $faker)
    {
        $requirements = match($level) {
            'Undergraduate' => [
                'High school diploma or equivalent',
                'Minimum GPA: ' . $faker->randomFloat(2, 2.5, 3.8),
                'English proficiency (IELTS ' . $faker->randomFloat(1, 5.5, 7.0) . ' or TOEFL ' . $faker->numberBetween(70, 100) . ')',
                'Academic transcripts',
                'Personal statement',
                'Letters of recommendation (2)'
            ],
            'Postgraduate' => [
                'Bachelor\'s degree in relevant field',
                'Minimum GPA: ' . $faker->randomFloat(2, 3.0, 4.0),
                'English proficiency (IELTS ' . $faker->randomFloat(1, 6.0, 7.5) . ' or TOEFL ' . $faker->numberBetween(80, 110) . ')',
                'Academic transcripts',
                'Statement of purpose',
                'Letters of recommendation (2-3)',
                'CV/Resume',
                $faker->randomElement(['GRE/GMAT scores', 'Work experience (preferred)', 'Research proposal'])
            ],
            'Doctorate' => [
                'Master\'s degree in relevant field',
                'Minimum GPA: ' . $faker->randomFloat(2, 3.5, 4.0),
                'English proficiency (IELTS ' . $faker->randomFloat(1, 6.5, 8.0) . ' or TOEFL ' . $faker->numberBetween(90, 120) . ')',
                'Research proposal',
                'Academic transcripts',
                'Letters of recommendation (3)',
                'CV/Resume',
                'Publications (if any)',
                'Interview may be required'
            ],
            'Diploma' => [
                'High school diploma or equivalent',
                'Minimum GPA: ' . $faker->randomFloat(2, 2.0, 3.0),
                'English proficiency (IELTS ' . $faker->randomFloat(1, 5.0, 6.5) . ')',
                'Academic transcripts'
            ],
            'Certificate' => [
                'High school diploma or equivalent',
                'English proficiency (IELTS ' . $faker->randomFloat(1, 4.5, 6.0) . ')',
                'Academic transcripts'
            ],
        };
        
        return implode("\n", $requirements);
    }
}

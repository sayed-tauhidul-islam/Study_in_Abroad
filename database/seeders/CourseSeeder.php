<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coursesTemplate = [
            [
                'name' => 'Computer Science',
                'description' => 'Study of computers, computational systems, algorithms, and software development. Covers programming, data structures, artificial intelligence, and more.',
                'duration' => '4 years',
                'level' => 'Bachelor',
                'tuition_fee' => 25000.00,
                'application_fee' => 100.00,
                'language' => 'English',
                'requirements' => 'High school diploma, Mathematics proficiency, English language test (TOEFL/IELTS)',
            ],
            [
                'name' => 'Business Administration',
                'description' => 'Comprehensive study of business operations, management principles, marketing, finance, and entrepreneurship.',
                'duration' => '4 years',
                'level' => 'Bachelor',
                'tuition_fee' => 22000.00,
                'application_fee' => 100.00,
                'language' => 'English',
                'requirements' => 'High school diploma, Basic mathematics, English language proficiency',
            ],
            [
                'name' => 'Mechanical Engineering',
                'description' => 'Application of physics and materials science for analysis, design, manufacturing, and maintenance of mechanical systems.',
                'duration' => '4 years',
                'level' => 'Bachelor',
                'tuition_fee' => 28000.00,
                'application_fee' => 100.00,
                'language' => 'English',
                'requirements' => 'High school diploma, Strong mathematics and physics background, English proficiency',
            ],
            [
                'name' => 'Medicine',
                'description' => 'Comprehensive medical education covering anatomy, physiology, pathology, pharmacology, and clinical practice.',
                'duration' => '6 years',
                'level' => 'Doctor',
                'tuition_fee' => 45000.00,
                'application_fee' => 150.00,
                'language' => 'English',
                'requirements' => 'Pre-medical degree, Biology, Chemistry, Physics, High GPA, Entrance exam',
            ],
            [
                'name' => 'Data Science',
                'description' => 'Advanced study of data analysis, machine learning, statistical modeling, and big data technologies.',
                'duration' => '2 years',
                'level' => 'Master',
                'tuition_fee' => 30000.00,
                'application_fee' => 120.00,
                'language' => 'English',
                'requirements' => 'Bachelor degree in Computer Science/Math/Statistics, Programming skills, GRE scores',
            ],
            [
                'name' => 'International Law',
                'description' => 'Study of legal systems, international relations, treaties, and legal principles governing nations.',
                'duration' => '3 years',
                'level' => 'Master',
                'tuition_fee' => 35000.00,
                'application_fee' => 120.00,
                'language' => 'English',
                'requirements' => 'Law degree (LLB), Work experience preferred, English proficiency',
            ],
            [
                'name' => 'Psychology',
                'description' => 'Scientific study of mind and behavior, covering cognitive, developmental, social, and clinical psychology.',
                'duration' => '4 years',
                'level' => 'Bachelor',
                'tuition_fee' => 20000.00,
                'application_fee' => 100.00,
                'language' => 'English',
                'requirements' => 'High school diploma, Interest in human behavior, English language proficiency',
            ],
            [
                'name' => 'MBA',
                'description' => 'Master of Business Administration - Advanced management education for business leaders and entrepreneurs.',
                'duration' => '2 years',
                'level' => 'Master',
                'tuition_fee' => 40000.00,
                'application_fee' => 150.00,
                'language' => 'English',
                'requirements' => 'Bachelor degree, 2+ years work experience, GMAT/GRE scores, English proficiency',
            ],
        ];

        // Additional course templates to reach 20+ unique courses
        $additionalCourses = [
            ['name' => 'Electrical Engineering', 'description' => 'Study of electricity, electronics, and electromagnetism applications.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 27000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Strong math and physics'],
            ['name' => 'Civil Engineering', 'description' => 'Design and construction of infrastructure like buildings, bridges, and roads.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 26000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Math and physics proficiency'],
            ['name' => 'Nursing', 'description' => 'Healthcare profession focused on patient care and medical support.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 24000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Biology, Chemistry'],
            ['name' => 'Architecture', 'description' => 'Design and planning of buildings and physical structures.', 'duration' => '5 years', 'level' => 'Bachelor', 'tuition_fee' => 29000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Creative portfolio, Math skills'],
            ['name' => 'Accounting', 'description' => 'Financial record-keeping, auditing, and tax preparation.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 21000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Strong mathematics'],
            ['name' => 'Marketing', 'description' => 'Study of consumer behavior, branding, and promotional strategies.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 20000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Communication skills'],
            ['name' => 'Pharmacy', 'description' => 'Study of drug preparation, dispensing, and pharmaceutical care.', 'duration' => '5 years', 'level' => 'Doctor', 'tuition_fee' => 38000, 'application_fee' => 150, 'language' => 'English', 'requirements' => 'Pre-pharmacy degree, Chemistry, Biology'],
            ['name' => 'Biology', 'description' => 'Study of living organisms and life processes.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 23000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Biology, Chemistry'],
            ['name' => 'Chemistry', 'description' => 'Study of matter, its properties, and chemical reactions.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 24000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Strong chemistry and math'],
            ['name' => 'Physics', 'description' => 'Study of matter, energy, and the fundamental forces of nature.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 25000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Advanced mathematics and physics'],
            ['name' => 'Economics', 'description' => 'Study of production, distribution, and consumption of goods and services.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 22000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Mathematics, Statistics'],
            ['name' => 'Environmental Science', 'description' => 'Study of environmental problems and solutions.', 'duration' => '4 years', 'level' => 'Bachelor', 'tuition_fee' => 23000, 'application_fee' => 100, 'language' => 'English', 'requirements' => 'High school diploma, Biology, Chemistry'],
        ];
        
        // Merge all courses
        $allCourses = array_merge($coursesTemplate, $additionalCourses);

        // Get all universities
        $universities = DB::table('universities')->get();

        // Add courses to each university (15-20 courses per university)
        foreach ($universities as $university) {
            // Randomly assign 15-20 courses to each university
            $numCourses = rand(15, 20);
            
            // Get random courses, allowing duplicates if needed
            $assignedCourses = [];
            for ($i = 0; $i < $numCourses; $i++) {
                $courseIndex = rand(0, count($allCourses) - 1);
                $course = $allCourses[$courseIndex];
                $course['university_id'] = $university->id;
                $course['created_at'] = now();
                $course['updated_at'] = now();
                
                // Add variation to fees based on university
                $course['tuition_fee'] = $course['tuition_fee'] + rand(-2000, 5000);
                
                DB::table('courses')->insert($course);
            }
        }
    }
}

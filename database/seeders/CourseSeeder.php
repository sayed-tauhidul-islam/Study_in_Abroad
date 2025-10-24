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
        $courses = [
            [
                'name' => 'Computer Science',
                'description' => 'Study of computers and computational systems.',
            ],
            [
                'name' => 'Business Administration',
                'description' => 'Management of business operations and strategy.',
            ],
            [
                'name' => 'Engineering',
                'description' => 'Application of science and math to solve problems.',
            ],
            [
                'name' => 'Medicine',
                'description' => 'Study and practice of medical science.',
            ],
            [
                'name' => 'Law',
                'description' => 'Study of legal systems and principles.',
            ],
            [
                'name' => 'Psychology',
                'description' => 'Study of mind and behavior.',
            ],
            [
                'name' => 'Economics',
                'description' => 'Study of production, distribution, and consumption.',
            ],
            [
                'name' => 'Mathematics',
                'description' => 'Study of numbers, quantity, and space.',
            ],
            [
                'name' => 'Physics',
                'description' => 'Study of matter, energy, and their interactions.',
            ],
            [
                'name' => 'Chemistry',
                'description' => 'Study of substances and their transformations.',
            ],
            [
                'name' => 'Biology',
                'description' => 'Study of living organisms and their interactions.',
            ],
            [
                'name' => 'History',
                'description' => 'Study of past events and human societies.',
            ],
            [
                'name' => 'Literature',
                'description' => 'Study of written works and literary analysis.',
            ],
            [
                'name' => 'Art',
                'description' => 'Study of visual and creative expression.',
            ],
            [
                'name' => 'Music',
                'description' => 'Study of musical theory and performance.',
            ],
            [
                'name' => 'Philosophy',
                'description' => 'Study of fundamental questions about existence.',
            ],
            [
                'name' => 'Sociology',
                'description' => 'Study of human society and social behavior.',
            ],
            [
                'name' => 'Political Science',
                'description' => 'Study of government and political systems.',
            ],
            [
                'name' => 'Environmental Science',
                'description' => 'Study of environment and sustainability.',
            ],
            [
                'name' => 'Education',
                'description' => 'Study of teaching and learning processes.',
            ],
        ];

        foreach ($courses as $course) {
            DB::table('courses')->insert($course);
        }
    }
}

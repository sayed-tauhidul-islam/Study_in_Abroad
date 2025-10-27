<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $degrees = [
            [
                'name' => 'Bachelor of Arts (BA)',
                'description' => 'A three-year undergraduate degree focusing on humanities, social sciences, and liberal arts.',
                'level' => 'Undergraduate',
                'duration_years' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Bachelor of Science (BSc)',
                'description' => 'A three-year undergraduate degree focusing on science, technology, engineering, and mathematics.',
                'level' => 'Undergraduate',
                'duration_years' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Bachelor of Commerce (BCom)',
                'description' => 'A three-year undergraduate degree focusing on business, finance, and commerce.',
                'level' => 'Undergraduate',
                'duration_years' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Bachelor of Engineering (BE/BTech)',
                'description' => 'A four-year undergraduate degree focusing on engineering and technology.',
                'level' => 'Undergraduate',
                'duration_years' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Bachelor of Medicine, Bachelor of Surgery (MBBS)',
                'description' => 'A five-year undergraduate medical degree program.',
                'level' => 'Undergraduate',
                'duration_years' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Master of Arts (MA)',
                'description' => 'A one to two-year postgraduate degree focusing on humanities and social sciences.',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Master of Science (MSc)',
                'description' => 'A one to two-year postgraduate degree focusing on science and research.',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Master of Business Administration (MBA)',
                'description' => 'A two-year postgraduate degree focusing on business management and leadership.',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Master of Technology (MTech)',
                'description' => 'A two-year postgraduate degree focusing on advanced engineering and technology.',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Doctor of Philosophy (PhD)',
                'description' => 'A three to five-year doctoral degree focusing on original research and academic excellence.',
                'level' => 'Doctoral',
                'duration_years' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Associate Degree',
                'description' => 'A two-year undergraduate degree providing foundational knowledge in various fields.',
                'level' => 'Undergraduate',
                'duration_years' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Diploma',
                'description' => 'A one to three-year program focusing on practical skills and vocational training.',
                'level' => 'Undergraduate',
                'duration_years' => 1,
                'is_active' => true,
            ],
        ];

        foreach ($degrees as $degree) {
            Degree::create($degree);
        }
    }
}

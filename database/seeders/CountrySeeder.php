<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            [
                'name' => 'United States',
                'country_code' => 'US',
                'description' => 'A top destination for international students.',
                'student_count' => 1000000,
                'details' => 'Home to Ivy League and top-ranked universities.'
            ],
            [
                'name' => 'Canada',
                'country_code' => 'CA',
                'description' => 'Known for quality education and multiculturalism.',
                'student_count' => 500000,
                'details' => 'Popular for its welcoming immigration policies.'
            ],
            [
                'name' => 'United Kingdom',
                'country_code' => 'UK',
                'description' => 'Prestigious universities and rich history.',
                'student_count' => 600000,
                'details' => 'Home to Oxford, Cambridge, and Russell Group.'
            ],
            [
                'name' => 'Australia',
                'country_code' => 'AU',
                'description' => 'Popular for research and vibrant student life.',
                'student_count' => 400000,
                'details' => 'Known for its beautiful cities and beaches.'
            ],
            [
                'name' => 'Germany',
                'country_code' => 'DE',
                'description' => 'Tuition-free education for many programs.',
                'student_count' => 350000,
                'details' => 'Strong in engineering and technical fields.'
            ],
            [
                'name' => 'France',
                'country_code' => 'FR',
                'description' => 'Rich culture and affordable tuition.',
                'student_count' => 340000,
                'details' => 'Paris is a top student city.'
            ],
            [
                'name' => 'Italy',
                'country_code' => 'IT',
                'description' => 'Historic universities and art heritage.',
                'student_count' => 100000,
                'details' => 'Known for architecture and design.'
            ],
            [
                'name' => 'Spain',
                'country_code' => 'ES',
                'description' => 'Warm climate and vibrant student life.',
                'student_count' => 120000,
                'details' => 'Popular for Erasmus and exchange programs.'
            ],
            [
                'name' => 'Netherlands',
                'country_code' => 'NL',
                'description' => 'Innovative teaching and English-taught programs.',
                'student_count' => 90000,
                'details' => 'Known for high quality of life.'
            ],
            [
                'name' => 'Sweden',
                'country_code' => 'SE',
                'description' => 'Focus on innovation and sustainability.',
                'student_count' => 40000,
                'details' => 'Many programs in English.'
            ],
            [
                'name' => 'Norway',
                'country_code' => 'NO',
                'description' => 'No tuition fees for international students.',
                'student_count' => 25000,
                'details' => 'Stunning natural scenery.'
            ],
            [
                'name' => 'Denmark',
                'country_code' => 'DK',
                'description' => 'High standard of living and education.',
                'student_count' => 30000,
                'details' => 'Focus on group work and innovation.'
            ],
            [
                'name' => 'Finland',
                'country_code' => 'FI',
                'description' => 'World-class education system.',
                'student_count' => 20000,
                'details' => 'Known for technology and design.'
            ],
            [
                'name' => 'Switzerland',
                'country_code' => 'CH',
                'description' => 'Top for hospitality and business studies.',
                'student_count' => 50000,
                'details' => 'Beautiful landscapes and high quality of life.'
            ],
            [
                'name' => 'New Zealand',
                'country_code' => 'NZ',
                'description' => 'Safe, friendly, and innovative.',
                'student_count' => 30000,
                'details' => 'Adventure and outdoor activities.'
            ],
            [
                'name' => 'Japan',
                'country_code' => 'JP',
                'description' => 'Blend of tradition and technology.',
                'student_count' => 180000,
                'details' => 'Strong in science and engineering.'
            ],
            [
                'name' => 'South Korea',
                'country_code' => 'KR',
                'description' => 'High-tech and vibrant culture.',
                'student_count' => 120000,
                'details' => 'Popular for K-culture and technology.'
            ],
            [
                'name' => 'China',
                'country_code' => 'CN',
                'description' => 'Rapidly growing education sector.',
                'student_count' => 500000,
                'details' => 'Many scholarships for international students.'
            ],
            [
                'name' => 'India',
                'country_code' => 'IN',
                'description' => 'Diverse and affordable education.',
                'student_count' => 47000,
                'details' => 'Strong in IT and engineering.'
            ],
            [
                'name' => 'Singapore',
                'country_code' => 'SG',
                'description' => 'Global education hub in Asia.',
                'student_count' => 60000,
                'details' => 'Known for business and technology.'
            ],
            [
                'name' => 'Brazil',
                'country_code' => 'BR',
                'description' => 'Emerging destination in South America.',
                'student_count' => 20000,
                'details' => 'Rich culture and biodiversity.'
            ],
            [
                'name' => 'South Africa',
                'country_code' => 'ZA',
                'description' => 'Diverse and affordable.',
                'student_count' => 45000,
                'details' => 'Strong in research and innovation.'
            ],
            [
                'name' => 'Russia',
                'country_code' => 'RU',
                'description' => 'Strong in science and engineering.',
                'student_count' => 30000,
                'details' => 'Many government scholarships.'
            ],
            [
                'name' => 'Turkey',
                'country_code' => 'TR',
                'description' => 'Bridge between Europe and Asia.',
                'student_count' => 15000,
                'details' => 'Affordable tuition and living.'
            ],
            [
                'name' => 'Ireland',
                'country_code' => 'IE',
                'description' => 'Tech hub and friendly culture.',
                'student_count' => 35000,
                'details' => 'English-speaking and innovative.'
            ],
        ];
        foreach ($countries as $country) {
            DB::table('countries')->insert($country);
        }
    }
}

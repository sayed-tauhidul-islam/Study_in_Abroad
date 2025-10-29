<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'university' => 'Harvard University',
                'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=100&q=80',
                'review' => 'StudyAbroad helped me find the perfect program in the US. The guidance was exceptional!',
                'rating' => 5,
                'order' => 1,
                'is_active' => true
            ],
            [
                'name' => 'Ahmed Hassan',
                'university' => 'University of Toronto',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80',
                'review' => 'The application process was smooth and the support team was always there when I needed help.',
                'rating' => 5,
                'order' => 2,
                'is_active' => true
            ],
            [
                'name' => 'Maria Garcia',
                'university' => 'University of Melbourne',
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=100&q=80',
                'review' => 'Thanks to StudyAbroad, I achieved my dream of studying in Australia. Highly recommend!',
                'rating' => 5,
                'order' => 3,
                'is_active' => true
            ],
        ];

        foreach ($testimonials as $testimonial) {
            \App\Models\Testimonial::create($testimonial);
        }
    }
}

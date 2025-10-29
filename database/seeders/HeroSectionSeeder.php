<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\HeroSection::create([
            'title' => 'Explore Your Study Abroad Opportunities',
            'subtitle' => 'Find the best universities and programs around the world. Start your journey to study abroad with us today!',
            'highlight_text' => 'Study Abroad',
            'highlight_color' => '#10b981', // green-600
            'cta_text' => 'Apply Now',
            'cta_link' => route('applications.create'),
            'search_placeholder' => 'Search universities...',
            'background_color' => 'bg-gradient-to-br from-blue-50 via-sky-50 to-blue-100',
            'carousel_images' => [
                ['src' => 'https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=800&q=80', 'alt' => 'Modern University Building', 'caption' => 'Modern University'],
                ['src' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=800&q=80', 'alt' => 'International Students', 'caption' => 'International Students'],
                ['src' => 'https://images.unsplash.com/photo-1517520287167-4bbf64a00d66?auto=format&fit=crop&w=800&q=80', 'alt' => 'Student Group', 'caption' => 'Student Group'],
                ['src' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=800&q=80', 'alt' => 'Graduation Celebration', 'caption' => 'Graduation Celebration'],
                ['src' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=800&q=80', 'alt' => 'Campus Life', 'caption' => 'Campus Life'],
            ],
            'is_active' => true,
        ]);
    }
}

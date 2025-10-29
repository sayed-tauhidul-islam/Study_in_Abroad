<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'title' => 'Personalized Matching',
                'description' => 'AI-powered recommendations based on your profile, preferences, and goals.',
                'icon' => '🎯',
                'border_color' => '#10b981', // emerald-500
                'text_color' => '#1e293b',
                'order' => 1,
                'is_active' => true
            ],
            [
                'title' => 'Scholarship Assistance',
                'description' => 'Access to thousands of scholarships with expert application guidance.',
                'icon' => '💰',
                'border_color' => '#10b981',
                'text_color' => '#1e293b',
                'order' => 2,
                'is_active' => true
            ],
            [
                'title' => 'Complete Support',
                'description' => 'From application to arrival - we handle every step of your journey.',
                'icon' => '📋',
                'border_color' => '#10b981',
                'text_color' => '#1e293b',
                'order' => 3,
                'is_active' => true
            ],
            [
                'title' => 'Success Guarantee',
                'description' => '95% success rate with proven track record of student placements.',
                'icon' => '🌟',
                'border_color' => '#16a34a', // green-600
                'text_color' => '#1e3a8a',
                'order' => 4,
                'is_active' => true
            ],
            [
                'title' => 'Global Universities',
                'description' => 'Access a wide range of top universities from all over the world.',
                'icon' => '🌍',
                'border_color' => '#3b82f6', // blue-200
                'text_color' => '#1e3a8a',
                'order' => 5,
                'is_active' => true
            ],
            [
                'title' => 'Diverse Programs',
                'description' => 'Choose from hundreds of programs to match your interests and goals.',
                'icon' => '🎓',
                'border_color' => '#22c55e', // green-200
                'text_color' => '#1e3a8a',
                'order' => 6,
                'is_active' => true
            ],
            [
                'title' => 'Expert Guidance',
                'description' => 'Get support from our experienced counselors at every step.',
                'icon' => '🤝',
                'border_color' => '#3b82f6',
                'text_color' => '#1e3a8a',
                'order' => 7,
                'is_active' => true
            ],
        ];

        foreach ($features as $feature) {
            \App\Models\Feature::create($feature);
        }
    }
}

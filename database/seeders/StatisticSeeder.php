<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statistics = [
            [
                'label' => 'Partner Universities',
                'value' => '500+',
                'description' => 'World-class institutions',
                'icon' => '🎓',
                'border_color' => '#2563eb', // blue-600
                'order' => 1,
                'is_active' => true
            ],
            [
                'label' => 'Students Helped',
                'value' => '50K+',
                'description' => 'Successful placements',
                'icon' => '👥',
                'border_color' => '#16a34a', // green-600
                'order' => 2,
                'is_active' => true
            ],
            [
                'label' => 'Countries Covered',
                'value' => '100+',
                'description' => 'Global opportunities',
                'icon' => '🌍',
                'border_color' => '#2563eb',
                'order' => 3,
                'is_active' => true
            ],
            [
                'label' => 'Success Rate',
                'value' => '95%',
                'description' => 'Proven track record',
                'icon' => '✨',
                'border_color' => '#16a34a',
                'order' => 4,
                'is_active' => true
            ],
        ];

        foreach ($statistics as $statistic) {
            \App\Models\Statistic::create($statistic);
        }
    }
}

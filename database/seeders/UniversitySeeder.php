<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UniversitySeeder extends Seeder
{
    public function run(): void
    {
        $countries = DB::table('countries')->get(['id', 'name']);
        $defaultUnis = [
            'International University',
            'National University',
            'Polytechnic Institute',
            'Science and Technology University',
            'Business School',
        ];
        
        // University campus images from Unsplash
        $universityImages = [
            'https://images.unsplash.com/photo-1562774053-701939374585?w=800', // Campus buildings
            'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?w=800', // University campus
            'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=800', // Library
            'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800', // University hall
            'https://images.unsplash.com/photo-1519452575417-564c1401ecc0?w=800', // Campus quad
            'https://images.unsplash.com/photo-1546519638-68e109498ffc?w=800', // Modern campus
            'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800', // University building
            'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=800', // Campus aerial
            'https://images.unsplash.com/photo-1564981797816-1043664bf78d?w=800', // College building
            'https://images.unsplash.com/photo-1492538368677-f6e0afe31dcc?w=800', // University entrance
        ];
        
        $rankingBase = 1;
        foreach ($countries as $country) {
            // Add 4 unique universities per country, plus 1 generic
            for ($i = 0; $i < 4; $i++) {
                $name = $country->name . ' ' . $defaultUnis[$i];
                DB::table('universities')->insert([
                    'name' => $name,
                    'country_id' => $country->id,
                    'description' => $name . ' is a top university in ' . $country->name . '.',
                    'ranking' => $rankingBase + $i,
                    'website' => 'https://www.' . strtolower(str_replace(' ', '', $country->name)) . $i . '.edu',
                    'logo_url' => null,
                    'image_url' => $universityImages[$i % count($universityImages)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            // Add 1 more generic university per country
            $name = $country->name . ' ' . $defaultUnis[4];
            DB::table('universities')->insert([
                'name' => $name,
                'country_id' => $country->id,
                'description' => $name . ' is a top university in ' . $country->name . '.',
                'ranking' => $rankingBase + 4,
                'website' => 'https://www.' . strtolower(str_replace(' ', '', $country->name)) . 'b.edu',
                'logo_url' => null,
                'image_url' => $universityImages[4 % count($universityImages)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

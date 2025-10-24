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
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

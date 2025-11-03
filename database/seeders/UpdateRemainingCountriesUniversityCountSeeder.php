<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class UpdateRemainingCountriesUniversityCountSeeder extends Seeder
{
    public function run(): void
    {
        $countriesData = [
            'UA' => ['name' => 'Ukraine', 'universities_count' => 287],
            'TW' => ['name' => 'Taiwan', 'universities_count' => 158],
            'HK' => ['name' => 'Hong Kong', 'universities_count' => 22],
            'JO' => ['name' => 'Jordan', 'universities_count' => 32],
            'QA' => ['name' => 'Qatar', 'universities_count' => 10],
            'FJ' => ['name' => 'Fiji', 'universities_count' => 3],
            'JM' => ['name' => 'Jamaica', 'universities_count' => 8],
            'RS' => ['name' => 'Serbia', 'universities_count' => 18],
        ];

        foreach ($countriesData as $code => $data) {
            $country = Country::where('country_code', $code)->first();
            if ($country) {
                $country->universities_count = $data['universities_count'];
                $country->save();
                $this->command->info("✓ Updated {$data['name']} ({$code}) - Unis: {$data['universities_count']}");
            }
        }
        
        $this->command->info("🎉 All countries now have proper university counts!");
    }
}

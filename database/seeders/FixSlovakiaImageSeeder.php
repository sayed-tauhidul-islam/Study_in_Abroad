<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class FixSlovakiaImageSeeder extends Seeder
{
    public function run(): void
    {
        $country = Country::where('country_code', 'SK')->first();
        if ($country) {
            $country->image_url = 'https://images.unsplash.com/photo-1555995999-4e5e7fbb70cd?auto=format&fit=crop&w=1200&q=80';
            $country->save();
            $this->command->info("✓ Updated Slovakia with unique image!");
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class AddCountryImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countryImages = [
            // Countries with 2-letter codes
            'US' => [
                'image_url' => 'https://images.unsplash.com/photo-1485738422979-f5c462d49f74?auto=format&fit=crop&w=1200&q=80',
                'name' => 'United States',
            ],
            'CA' => [
                'image_url' => 'https://images.unsplash.com/photo-1517935706615-2717063c2225?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Canada',
            ],
            'UK' => [
                'image_url' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1200&q=80',
                'name' => 'United Kingdom',
            ],
            'AU' => [
                'image_url' => 'https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Australia',
            ],
            'DE' => [
                'image_url' => 'https://images.unsplash.com/photo-1467269204594-9661b134dd2b?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Germany',
            ],
            'FR' => [
                'image_url' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=1200&q=80',
                'name' => 'France',
            ],
            'IT' => [
                'image_url' => 'https://images.unsplash.com/photo-1515542622106-78bda8ba0e5b?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Italy',
            ],
            'ES' => [
                'image_url' => 'https://images.unsplash.com/photo-1543783207-ec64e4d95325?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Spain',
            ],
            'NL' => [
                'image_url' => 'https://images.unsplash.com/photo-1512470876302-972faa2aa9a4?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Netherlands',
            ],
            'SE' => [
                'image_url' => 'https://images.unsplash.com/photo-1509356843151-3e7d96241e11?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Sweden',
            ],
            'NO' => [
                'image_url' => 'https://images.unsplash.com/photo-1513519107127-1bed33748e4c?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Norway',
            ],
            'DK' => [
                'image_url' => 'https://images.unsplash.com/photo-1513622790541-eaa84d356909?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Denmark',
            ],
            'FI' => [
                'image_url' => 'https://images.unsplash.com/photo-1564882385-5bed6fa40769?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Finland',
            ],
            'CH' => [
                'image_url' => 'https://images.unsplash.com/photo-1527004013197-933c4bb611b3?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Switzerland',
            ],
            'NZ' => [
                'image_url' => 'https://images.unsplash.com/photo-1507699622108-4be3abd695ad?auto=format&fit=crop&w=1200&q=80',
                'name' => 'New Zealand',
            ],
            'JP' => [
                'image_url' => 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Japan',
            ],
            'KR' => [
                'image_url' => 'https://images.unsplash.com/photo-1517154421773-0529f29ea451?auto=format&fit=crop&w=1200&q=80',
                'name' => 'South Korea',
            ],
            'CN' => [
                'image_url' => 'https://images.unsplash.com/photo-1508804185872-d7badad00f7d?auto=format&fit=crop&w=1200&q=80',
                'name' => 'China',
            ],
            'IN' => [
                'image_url' => 'https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1200&q=80',
                'name' => 'India',
            ],
            'SG' => [
                'image_url' => 'https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Singapore',
            ],
            'BR' => [
                'image_url' => 'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Brazil',
            ],
            'ZA' => [
                'image_url' => 'https://images.unsplash.com/photo-1484318571209-661cf29a69c3?auto=format&fit=crop&w=1200&q=80',
                'name' => 'South Africa',
            ],
            'RU' => [
                'image_url' => 'https://images.unsplash.com/photo-1513326738677-b964603b136d?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Russia',
            ],
            'TR' => [
                'image_url' => 'https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Turkey',
            ],
            'IE' => [
                'image_url' => 'https://images.unsplash.com/photo-1590004953392-5aba2e72269a?auto=format&fit=crop&w=1200&q=80',
                'name' => 'Ireland',
            ],
        ];

        foreach ($countryImages as $code => $data) {
            $country = Country::where('country_code', $code)->first();
            if ($country) {
                $country->update([
                    'image_url' => $data['image_url'],
                ]);
                $this->command->info("✓ Updated {$data['name']} ({$code}) with image");
            }
        }

        $this->command->info("\nAll country images have been added!");
    }
}

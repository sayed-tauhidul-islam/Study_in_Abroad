<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class AddMissingCountryImagesSeeder extends Seeder
{
    public function run(): void
    {
        // Generic country images for those missing
        $countryImages = [
            'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800', // City skyline
            'https://images.unsplash.com/photo-1449495169669-7b118f960251?w=800', // Travel
            'https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=800', // Lake
            'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800', // Mountain
            'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800', // Road
            'https://images.unsplash.com/photo-1476900543704-4312b78632f8?w=800', // Architecture
            'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=800', // Bridge
            'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=800', // City street
            'https://images.unsplash.com/photo-1500835556837-99ac94a94552?w=800', // Skyline
            'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=800', // Landscape
        ];
        
        // Update countries without images
        $countries = Country::whereNull('image_url')->orWhere('image_url', '')->get();
        $imageIndex = 0;
        
        foreach ($countries as $country) {
            $country->update([
                'image_url' => $countryImages[$imageIndex % count($countryImages)]
            ]);
            $imageIndex++;
        }
        
        $this->command->info('Added images to ' . $countries->count() . ' countries.');
    }
}

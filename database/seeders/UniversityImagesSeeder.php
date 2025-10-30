<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\University;

class UniversityImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universities = University::all();

        // Sample university images and logos from Unsplash
        $imageData = [
            'Harvard University' => [
                'image_url' => 'https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/29/Harvard_shield_wreath.svg/150px-Harvard_shield_wreath.svg.png'
            ],
            'Stanford University' => [
                'image_url' => 'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://identity.stanford.edu/wp-content/uploads/sites/3/2020/07/block-s-right.png'
            ],
            'MIT' => [
                'image_url' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/MIT_logo.svg/150px-MIT_logo.svg.png'
            ],
            'University of Oxford' => [
                'image_url' => 'https://images.unsplash.com/photo-1568632234157-ce7aecd03d0d?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Oxford-University-Circlet.svg/150px-Oxford-University-Circlet.svg.png'
            ],
            'University of Cambridge' => [
                'image_url' => 'https://images.unsplash.com/photo-1566493199166-9a82ea5f9e47?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Coat_of_Arms_of_the_University_of_Cambridge.svg/150px-Coat_of_Arms_of_the_University_of_Cambridge.svg.png'
            ],
            'University of Toronto' => [
                'image_url' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/University_of_Toronto_coat_of_arms.svg/150px-University_of_Toronto_coat_of_arms.svg.png'
            ],
            'University of Melbourne' => [
                'image_url' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Coat_of_arms_of_the_University_of_Melbourne.svg/150px-Coat_of_arms_of_the_University_of_Melbourne.svg.png'
            ],
            'Yale University' => [
                'image_url' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Yale_University_Shield_1.svg/150px-Yale_University_Shield_1.svg.png'
            ],
            'Princeton University' => [
                'image_url' => 'https://images.unsplash.com/photo-1607237138185-eedd9c632b0b?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Princeton_seal.svg/150px-Princeton_seal.svg.png'
            ],
            'Columbia University' => [
                'image_url' => 'https://images.unsplash.com/photo-1592280771190-3e2e4d571952?auto=format&fit=crop&w=800&q=80',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Columbia_University_Shield.svg/150px-Columbia_University_Shield.svg.png'
            ],
        ];

        // Default images for universities not in the specific list
        $defaultImages = [
            'https://images.unsplash.com/photo-1564981797816-1043664bf78d?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1576495199011-eb94736d05d6?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1519452575417-564c1401ecc0?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?auto=format&fit=crop&w=800&q=80',
        ];

        $imageIndex = 0;
        foreach ($universities as $university) {
            if (isset($imageData[$university->name])) {
                $university->update([
                    'image_url' => $imageData[$university->name]['image_url'],
                    'logo_url' => $imageData[$university->name]['logo_url']
                ]);
            } else {
                // Use default images for other universities
                $university->update([
                    'image_url' => $defaultImages[$imageIndex % count($defaultImages)],
                    'logo_url' => "https://ui-avatars.com/api/?name=" . urlencode($university->name) . "&size=150&background=random"
                ]);
                $imageIndex++;
            }
        }

        $this->command->info('University images and logos seeded successfully!');
    }
}

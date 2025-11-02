<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the AdminUserSeeder to create an admin user
        $this->call([
            AdminUserSeeder::class,
            CountrySeeder::class,
            UniversitySeeder::class,
            CourseSeeder::class,
            DegreeSeeder::class,
            ReviewSeeder::class,
            // Dynamic content seeders
            HeroSectionSeeder::class,
            FeatureSeeder::class,
            StatisticSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            SocialLinkSeeder::class,
            SiteSettingSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
    
}

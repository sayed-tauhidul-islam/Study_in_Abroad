<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Colors
            ['key' => 'navbar_color', 'value' => '#ec4899', 'type' => 'color', 'group' => 'colors', 'label' => 'Navbar Background Color', 'description' => 'Main navigation bar background color'],
            ['key' => 'navbar_text_color', 'value' => '#ffffff', 'type' => 'color', 'group' => 'colors', 'label' => 'Navbar Text Color', 'description' => 'Text color for navigation links'],
            ['key' => 'navbar_hover_color', 'value' => '#fef08a', 'type' => 'color', 'group' => 'colors', 'label' => 'Navbar Hover Color', 'description' => 'Hover color for navigation links'],
            ['key' => 'primary_color', 'value' => '#3b82f6', 'type' => 'color', 'group' => 'colors', 'label' => 'Primary Color', 'description' => 'Main brand color'],
            ['key' => 'secondary_color', 'value' => '#10b981', 'type' => 'color', 'group' => 'colors', 'label' => 'Secondary Color', 'description' => 'Secondary brand color'],
            ['key' => 'accent_color', 'value' => '#ec4899', 'type' => 'color', 'group' => 'colors', 'label' => 'Accent Color', 'description' => 'Accent/highlight color'],
            
            // Contact Info
            ['key' => 'site_name', 'value' => 'StudyAbroad', 'type' => 'text', 'group' => 'general', 'label' => 'Site Name', 'description' => 'Name of the website'],
            ['key' => 'contact_email', 'value' => 'info@studyabroad.com', 'type' => 'text', 'group' => 'contact', 'label' => 'Contact Email', 'description' => 'Main contact email'],
            ['key' => 'contact_phone', 'value' => '+1234567890', 'type' => 'text', 'group' => 'contact', 'label' => 'Contact Phone', 'description' => 'Main contact phone number'],
            ['key' => 'address', 'value' => '123 Education Street, City, Country', 'type' => 'text', 'group' => 'contact', 'label' => 'Address', 'description' => 'Physical address'],
            
            // SEO
            ['key' => 'meta_title', 'value' => 'Study Abroad - Find Your Dream University', 'type' => 'text', 'group' => 'seo', 'label' => 'Meta Title', 'description' => 'Default page title for SEO'],
            ['key' => 'meta_description', 'value' => 'Discover top universities worldwide. Get expert guidance for studying abroad.', 'type' => 'text', 'group' => 'seo', 'label' => 'Meta Description', 'description' => 'Default meta description for SEO'],
            ['key' => 'meta_keywords', 'value' => 'study abroad, universities, scholarships, international education', 'type' => 'text', 'group' => 'seo', 'label' => 'Meta Keywords', 'description' => 'Default meta keywords'],
        ];

        foreach ($settings as $setting) {
            \App\Models\SiteSetting::create($setting);
        }
    }
}

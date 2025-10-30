<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSlideshowImage;
use App\Models\WhyChooseUsFeature;
use App\Models\SuccessStory;
use App\Models\StudyProgram;
use App\Models\Destination;
use App\Models\UniversityRanking;
use App\Models\StudentResource;
use App\Models\PageSection;

class DynamicContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hero Slideshow Images
        $slideshowImages = [
            ['image_url' => 'https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Harvard University', 'caption' => 'Top Universities Worldwide', 'display_order' => 1],
            ['image_url' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Oxford University', 'caption' => 'Historic Academic Excellence', 'display_order' => 2],
            ['image_url' => 'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Stanford Campus', 'caption' => 'World-Class Education', 'display_order' => 3],
            ['image_url' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'International Students', 'caption' => 'Diverse Student Community', 'display_order' => 4],
            ['image_url' => 'https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Modern Campus', 'caption' => 'State-of-the-Art Facilities', 'display_order' => 5],
            ['image_url' => 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Students Studying', 'caption' => 'Academic Support & Resources', 'display_order' => 6],
            ['image_url' => 'https://images.unsplash.com/photo-1513258496099-48168024aec0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Graduation Success', 'caption' => '95% Student Success Rate', 'display_order' => 7],
            ['image_url' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Campus Activities', 'caption' => 'Vibrant Campus Life', 'display_order' => 8],
            ['image_url' => 'https://images.unsplash.com/photo-1519452635265-7b1fbfd1e4e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'University Campus', 'caption' => 'Beautiful Campus Environments', 'display_order' => 9],
            ['image_url' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Library Study', 'caption' => 'World-Class Libraries', 'display_order' => 10],
            ['image_url' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Team Project', 'caption' => 'Collaborative Learning', 'display_order' => 11],
            ['image_url' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Lecture Hall', 'caption' => 'Interactive Classrooms', 'display_order' => 12],
            ['image_url' => 'https://images.unsplash.com/photo-1503676382389-4809596d5290?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Global Education', 'caption' => 'International Opportunities', 'display_order' => 13],
            ['image_url' => 'https://images.unsplash.com/photo-1576495199011-eb94736d05d6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Students Campus Walk', 'caption' => 'Campus Community', 'display_order' => 14],
            ['image_url' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Classroom Learning', 'caption' => 'Quality Education', 'display_order' => 15],
            ['image_url' => 'https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', 'alt_text' => 'Students Together', 'caption' => 'Friendship & Networking', 'display_order' => 16],
        ];

        foreach ($slideshowImages as $image) {
            HeroSlideshowImage::create($image);
        }

        // Why Choose Us Features
        $whyChooseFeatures = [
            ['title' => 'Personalized Matching', 'description' => 'AI-powered recommendations based on your profile, preferences, and career goals.', 'icon' => '🎯', 'gradient_from' => 'blue-400', 'gradient_to' => 'purple-600', 'display_order' => 1],
            ['title' => 'Scholarship Assistance', 'description' => 'Access to thousands of scholarships with expert application guidance and support.', 'icon' => '💰', 'gradient_from' => 'green-400', 'gradient_to' => 'emerald-600', 'display_order' => 2],
            ['title' => 'Complete Support', 'description' => 'From application to arrival - we handle every step of your journey with care.', 'icon' => '📋', 'gradient_from' => 'orange-400', 'gradient_to' => 'red-600', 'display_order' => 3],
            ['title' => 'Success Guarantee', 'description' => '95% success rate with proven track record of successful student placements.', 'icon' => '🌟', 'gradient_from' => 'yellow-400', 'gradient_to' => 'pink-600', 'display_order' => 4],
        ];

        foreach ($whyChooseFeatures as $feature) {
            WhyChooseUsFeature::create($feature);
        }

        // Success Stories
        $successStories = [
            [
                'student_name' => 'Emma Thompson',
                'student_image_url' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=100&q=80',
                'university_name' => 'Harvard Business School',
                'program_name' => 'MBA Program',
                'country' => 'USA',
                'campus_image_url' => 'https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=400&q=80',
                'achievement_badge' => 'Top MBA',
                'quote_text' => 'Thanks to StudyAbroad\'s guidance, I secured admission to Harvard. The visa process was seamless and their support team was incredible!',
                'secondary_quote' => 'The personalized counseling helped me choose the right program and prepare for interviews.',
                'rating' => 5.0,
                'badges' => ['Visa Approved', 'Full Support'],
                'gradient_from' => 'cyan-400',
                'gradient_to' => 'blue-600',
                'display_order' => 1
            ],
            [
                'student_name' => 'Carlos Rodriguez',
                'student_image_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80',
                'university_name' => 'MIT Engineering',
                'program_name' => 'Engineering Program',
                'country' => 'USA',
                'campus_image_url' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=400&q=80',
                'achievement_badge' => 'Full Scholarship',
                'quote_text' => 'From application to arrival, StudyAbroad handled everything. I got a full scholarship and now I\'m living my dream!',
                'secondary_quote' => 'Their scholarship matching service saved me thousands of dollars.',
                'rating' => 5.0,
                'badges' => ['Scholarship Winner', 'End-to-End Support'],
                'gradient_from' => 'purple-400',
                'gradient_to' => 'fuchsia-600',
                'display_order' => 2
            ],
            [
                'student_name' => 'Priya Sharma',
                'student_image_url' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=100&q=80',
                'university_name' => 'University of Oxford',
                'program_name' => 'Medicine Program',
                'country' => 'UK',
                'campus_image_url' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=400&q=80',
                'achievement_badge' => 'Medicine',
                'quote_text' => 'The team helped me navigate the complex UK visa process and find accommodation. I\'m now pursuing my medical degree!',
                'secondary_quote' => 'Their pre-departure orientation prepared me perfectly for life in the UK.',
                'rating' => 5.0,
                'badges' => ['UK Visa Success', 'Accommodation Support'],
                'gradient_from' => 'pink-400',
                'gradient_to' => 'rose-600',
                'display_order' => 3
            ],
        ];

        foreach ($successStories as $story) {
            SuccessStory::create($story);
        }

        // Study Programs
        $studyPrograms = [
            ['title' => 'Undergraduate Programs', 'icon' => '🎓', 'description' => 'Bachelor\'s degrees in various fields including Business, Engineering, Arts, and Sciences.', 'gradient_from' => 'blue-500', 'gradient_to' => 'blue-700', 'border_color' => 'blue-300', 'features' => ['Foundation Programs Available', 'Transfer Credits Accepted', 'Career Counseling Included'], 'display_order' => 1],
            ['title' => 'Graduate Programs', 'icon' => '📚', 'description' => 'Master\'s and PhD programs for advanced study. Research opportunities and industry partnerships.', 'gradient_from' => 'green-500', 'gradient_to' => 'emerald-700', 'border_color' => 'green-300', 'features' => ['Research Assistantships', 'Industry Partnerships', 'Fast-track Options'], 'display_order' => 2],
            ['title' => 'Professional Programs', 'icon' => '💼', 'description' => 'MBA, Law, Medicine, and other professional degrees with industry certifications.', 'gradient_from' => 'purple-500', 'gradient_to' => 'purple-700', 'border_color' => 'purple-300', 'features' => ['Industry Certifications', 'Internship Programs', 'Executive Networks'], 'display_order' => 3],
            ['title' => 'Online & Hybrid Programs', 'icon' => '🌐', 'description' => 'Flexible learning options combining online coursework with in-person components.', 'gradient_from' => 'orange-500', 'gradient_to' => 'red-600', 'border_color' => 'orange-300', 'features' => ['Flexible Scheduling', 'Global Faculty Access', 'Interactive Learning'], 'display_order' => 4],
            ['title' => 'Creative Arts Programs', 'icon' => '🎨', 'description' => 'Fine Arts, Design, Music, Film, and Performing Arts with portfolio development.', 'gradient_from' => 'pink-500', 'gradient_to' => 'rose-600', 'border_color' => 'pink-300', 'features' => ['Portfolio Development', 'Industry Connections', 'Exhibition Opportunities'], 'display_order' => 5],
            ['title' => 'STEM Programs', 'icon' => '🔬', 'description' => 'Science, Technology, Engineering, and Mathematics with cutting-edge research facilities.', 'gradient_from' => 'teal-500', 'gradient_to' => 'cyan-700', 'border_color' => 'teal-300', 'features' => ['Research Facilities', 'Innovation Labs', 'Industry Partnerships'], 'display_order' => 6],
        ];

        foreach ($studyPrograms as $program) {
            StudyProgram::create($program);
        }

        // Destinations
        $destinations = [
            ['country_name' => 'United States', 'flag_emoji' => '🇺🇸', 'description' => 'Home to world-renowned universities like Harvard, MIT, and Stanford. Over 4,000 institutions to choose from.', 'total_universities' => 500, 'gradient_from' => 'blue-400', 'gradient_to' => 'blue-600', 'badge_text' => 'Most Popular', 'badge_color' => 'blue-100', 'badge_text_color' => 'blue-600', 'display_order' => 1],
            ['country_name' => 'United Kingdom', 'flag_emoji' => '🇬🇧', 'description' => 'Historic universities with cutting-edge research. Programs from 9-12 months with post-study work visas.', 'total_universities' => 150, 'gradient_from' => 'red-400', 'gradient_to' => 'red-600', 'badge_text' => 'Historic Excellence', 'badge_color' => 'red-100', 'badge_text_color' => 'red-600', 'display_order' => 2],
            ['country_name' => 'Australia', 'flag_emoji' => '🇦🇺', 'description' => 'High-quality education with excellent post-study work opportunities. Known for research excellence.', 'total_universities' => 40, 'gradient_from' => 'green-400', 'gradient_to' => 'green-600', 'badge_text' => 'Work Opportunities', 'badge_color' => 'green-100', 'badge_text_color' => 'green-600', 'display_order' => 3],
            ['country_name' => 'Canada', 'flag_emoji' => '🇨🇦', 'description' => 'High-quality education with excellent post-study work opportunities. Known for research excellence.', 'total_universities' => 20, 'gradient_from' => 'red-400', 'gradient_to' => 'yellow-600', 'badge_text' => 'Work Opportunities', 'badge_color' => 'pink-100', 'badge_text_color' => 'black-600', 'display_order' => 4],
        ];

        foreach ($destinations as $destination) {
            Destination::create($destination);
        }

        // Student Resources
        $studentResources = [
            ['title' => 'Application Guides', 'icon' => '📖', 'description' => 'Step-by-step guides for university applications, visa processes, and document preparation.', 'button_text' => 'Explore Guides', 'button_link' => '/applications/create', 'border_color' => 'blue-500', 'button_color' => 'green-700', 'text_color' => 'blue-700', 'display_order' => 1],
            ['title' => 'Financial Planning', 'icon' => '💰', 'description' => 'Budget calculators, scholarship databases, and financial aid resources for international students.', 'button_text' => 'Plan Finances', 'button_link' => '/scholarships', 'border_color' => 'green-500', 'button_color' => 'green-700', 'text_color' => 'green-700', 'display_order' => 2],
            ['title' => 'Accommodation Finder', 'icon' => '🏠', 'description' => 'Find student housing, dormitories, and off-campus apartments in your destination city.', 'button_text' => 'Find Housing', 'button_link' => '/universities', 'border_color' => 'purple-500', 'button_color' => 'purple-500', 'text_color' => 'purple-700', 'display_order' => 3],
            ['title' => 'Cultural Guides', 'icon' => '🌍', 'description' => 'Cultural adaptation tips, language resources, and local insights for your destination country.', 'button_text' => 'Learn Culture', 'button_link' => '/countries', 'border_color' => 'orange-500', 'button_color' => 'orange-500', 'text_color' => 'orange-700', 'display_order' => 4],
            ['title' => 'Career Services', 'icon' => '💼', 'description' => 'Resume building, job search assistance, and internship opportunities for international students.', 'button_text' => 'Build Career', 'button_link' => '/posts', 'border_color' => 'pink-500', 'button_color' => 'pink-500', 'text_color' => 'pink-700', 'display_order' => 5],
            ['title' => 'Student Community', 'icon' => '👥', 'description' => 'Connect with fellow international students, join study groups, and share experiences.', 'button_text' => 'Join Community', 'button_link' => '/reviews', 'border_color' => 'teal-500', 'button_color' => 'teal-500', 'text_color' => 'teal-700', 'display_order' => 6],
            ['title' => 'Mobile App', 'icon' => '📱', 'description' => 'Access all our services on-the-go with our mobile app for iOS and Android devices.', 'button_text' => 'Download App', 'button_link' => '/about-us', 'border_color' => 'indigo-500', 'button_color' => 'indigo-500', 'text_color' => 'indigo-700', 'display_order' => 7],
            ['title' => 'Alumni Network', 'icon' => '🎓', 'description' => 'Connect with successful alumni for mentorship, career advice, and networking opportunities.', 'button_text' => 'Join Network', 'button_link' => '/reviews', 'border_color' => 'red-500', 'button_color' => 'red-500', 'text_color' => 'red-700', 'display_order' => 8],
        ];

        foreach ($studentResources as $resource) {
            StudentResource::create($resource);
        }

        // Page Sections
        $pageSections = [
            ['section_key' => 'hero_slideshow', 'section_title' => 'Hero Slideshow', 'section_subtitle' => 'Main banner with rotating images', 'is_active' => true, 'display_order' => 1],
            ['section_key' => 'why_choose_us', 'section_title' => 'Why Choose Us', 'section_subtitle' => 'Key benefits and features', 'is_active' => true, 'display_order' => 2],
            ['section_key' => 'features', 'section_title' => 'Features', 'section_subtitle' => 'Main features section', 'is_active' => true, 'display_order' => 3],
            ['section_key' => 'statistics', 'section_title' => 'Statistics', 'section_subtitle' => 'Our impact in numbers', 'is_active' => true, 'display_order' => 4],
            ['section_key' => 'faq', 'section_title' => 'FAQ', 'section_subtitle' => 'Frequently asked questions', 'is_active' => true, 'display_order' => 5],
            ['section_key' => 'testimonials', 'section_title' => 'Testimonials', 'section_subtitle' => 'What our students say', 'is_active' => true, 'display_order' => 6],
            ['section_key' => 'success_stories', 'section_title' => 'Success Stories', 'section_subtitle' => 'Student success stories', 'is_active' => true, 'display_order' => 7],
            ['section_key' => 'destinations', 'section_title' => 'Popular Destinations', 'section_subtitle' => 'Top study destinations', 'is_active' => true, 'display_order' => 8],
            ['section_key' => 'study_programs', 'section_title' => 'Study Programs', 'section_subtitle' => 'Available programs', 'is_active' => true, 'display_order' => 9],
            ['section_key' => 'university_rankings', 'section_title' => 'University Rankings', 'section_subtitle' => 'Top ranked universities', 'is_active' => true, 'display_order' => 10],
            ['section_key' => 'student_resources', 'section_title' => 'Student Resources', 'section_subtitle' => 'Resources and tools', 'is_active' => true, 'display_order' => 11],
            ['section_key' => 'upcoming_events', 'section_title' => 'Upcoming Events', 'section_subtitle' => 'Events and webinars', 'is_active' => true, 'display_order' => 12],
        ];

        foreach ($pageSections as $section) {
            PageSection::create($section);
        }

        $this->command->info('Dynamic content seeded successfully!');
    }
}

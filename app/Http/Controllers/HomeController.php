<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroSection;
use App\Models\Feature;
use App\Models\Statistic;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\SocialLink;
use App\Models\HeroSlideshowImage;
use App\Models\WhyChooseUsFeature;
use App\Models\SuccessStory;
use App\Models\StudyProgram;
use App\Models\Destination;
use App\Models\UniversityRanking;
use App\Models\StudentResource;
use App\Models\Event;
use App\Models\PageSection;

class HomeController extends Controller
{
    public function index()
    {
        // Existing data
        $hero = HeroSection::where('is_active', true)->first();
        $features = Feature::where('is_active', true)->orderBy('order')->get();
        $statistics = Statistic::where('is_active', true)->orderBy('order')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('order')->get();
        $faqs = Faq::where('is_active', true)->orderBy('order')->get();
        $socialLinks = SocialLink::where('is_active', true)->orderBy('order')->get();

        // New dynamic data
        $slideshowImages = HeroSlideshowImage::active()->ordered()->get();
        $whyChooseFeatures = WhyChooseUsFeature::active()->ordered()->get();
        $successStories = SuccessStory::active()->ordered()->get();
        $studyPrograms = StudyProgram::active()->ordered()->get();
        $destinations = Destination::active()->ordered()->get();
        $universityRankings = UniversityRanking::featured()->ordered()->with('university')->get();
        $studentResources = StudentResource::active()->ordered()->get();
        $upcomingEvents = Event::active()->upcoming()->ordered()->limit(6)->get();
        $pageSections = PageSection::active()->ordered()->get()->keyBy('section_key');

        return view('home', compact(
            'hero',
            'features',
            'statistics',
            'testimonials',
            'faqs',
            'socialLinks',
            'slideshowImages',
            'whyChooseFeatures',
            'successStories',
            'studyPrograms',
            'destinations',
            'universityRankings',
            'studentResources',
            'upcomingEvents',
            'pageSections'
        ));
    }
}

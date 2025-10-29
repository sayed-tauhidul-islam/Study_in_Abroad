<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = \App\Models\HeroSection::where('is_active', true)->first();
        $features = \App\Models\Feature::where('is_active', true)->orderBy('order')->get();
        $statistics = \App\Models\Statistic::where('is_active', true)->orderBy('order')->get();
        $testimonials = \App\Models\Testimonial::where('is_active', true)->orderBy('order')->get();
        $faqs = \App\Models\Faq::where('is_active', true)->orderBy('order')->get();
        $socialLinks = \App\Models\SocialLink::where('is_active', true)->orderBy('order')->get();

        return view('home', compact('hero', 'features', 'statistics', 'testimonials', 'faqs', 'socialLinks'));
    }
}

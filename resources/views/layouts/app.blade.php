<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Study Abroad')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Custom Styles for Dynamic Effects -->
    <style>
        /* Alpine.js cloak */
        [x-cloak] { display: none !important; }
        
        /* Light Blue Background */
        body {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 50%, #e1f5fe 100%);
            background-attachment: fixed;
            min-height: 100vh;
        }
        
        /* Consistent section backgrounds */
        main {
            background: transparent;
        }
        
        /* Override section backgrounds to match body */
        section {
            background: transparent !important;
        }
        
        /* White cards/containers stand out on gradient background */
        .content-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        /* Floating Animation */
        @keyframes 0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        /* Slide In From Left */
        @keyframes from {
            opacity: 0;
            transform: translateX(-100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
        }

        .slide-in-left {
            animation: slideInLeft 0.8s ease-out;
        }

        /* Fade In */
        @keyframes from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
        }

        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        /* Staggered Animation */
        .stagger-1 {
            animation-delay: 0.1s;
        }

        .stagger-2 {
            animation-delay: 0.2s;
        }

        .stagger-3 {
            animation-delay: 0.3s;
        }

        .stagger-4 {
            animation-delay: 0.4s;
        }

        .stagger-5 {
            animation-delay: 0.5s;
        }

        .stagger-6 {
            animation-delay: 0.6s;
        }

        /* Pulse Glow Effect */
        @keyframes 0%,
        100% {
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
        }

        50% {
            box-shadow: 0 0 40px rgba(255, 215, 0, 0.8);
        }
        }

        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }

        /* Smooth Hover Scale */
        .hover-scale {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-scale:hover {
            transform: scale(1.05) translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        /* Glassmorphism Effect */
        .glass-effect {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        /* Text Gradient */
        .text-gradient {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Button Shine Effect */
        @keyframes 0% {
            background-position: -200%;
        }

        100% {
            background-position: 200%;
        }
        }

        .btn-shine {
            background: linear-gradient(90deg, #ffd700 0%, #ffffff 50%, #ffd700 100%);
            background-size: 200% auto;
            animation: shine 3s linear infinite;
        }

        /* Bounce on Hover */
        .bounce-hover:hover {
            animation: bounce 0.5s ease;
        }

        @keyframes 0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
        }

        /* Rotate on Hover */
        .rotate-hover {
            transition: transform 0.5s ease;
        }

        .rotate-hover:hover {
            transform: rotate(360deg);
        }

    </style>
</head>

<body class="min-h-screen" x-data="{ scrolled: false }" @scroll.window="scrolled = window.pageYOffset > 10">
    <!-- Navigation Bar with Glassmorphism -->
    <nav class="sticky top-0 z-50 transition-all duration-300 bg-green-600"
        :class="scrolled ? 'bg-opacity-95' : 'bg-opacity-90'">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex items-center space-x-4 mb-2 md:mb-0 slide-in-left">
                    <a href="{{ url('/') }}"
                        class="text-2xl md:text-3xl font-bold text-white hover:scale-110 transition-transform duration-300 float-animation">
                        🌍 <span class="text-white">StudyAbroad</span>
                    </a>
                    <div
                        class="flex items-center text-white glass-effect px-3 py-1 rounded-full fade-in stagger-1 bg-pink-700 bg-opacity-50">
                        <svg class="w-5 h-5 mr-2 rotate-hover" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span class="font-medium text-sm md:text-base">01306753144</span>
                    </div>
                </div>
                <div class="flex flex-wrap space-x-4 md:space-x-6 items-center">
                    <a href="{{ url('/') }}"
                        class="transition font-medium text-sm md:text-base hover-scale fade-in stagger-2 {{ request()->is('/') ? 'text-yellow-300 font-bold' : 'text-white hover:text-yellow-300' }}">Home</a>

                    <!-- Countries Dropdown -->
                    <div x-data="{ open: false, searchCountry: '' }" @click.away="open = false" class="relative">
                        <button type="button" @click="open = !open"
                            class="transition font-medium text-sm md:text-base hover-scale fade-in stagger-3 {{ request()->is('countries*') ? 'text-yellow-300 font-bold' : 'text-white hover:text-yellow-300' }} flex items-center">
                            Countries
                            <svg class="w-4 h-4 ml-1" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute left-0 mt-2 w-72 bg-white rounded-lg shadow-2xl z-50 max-h-96 overflow-hidden"
                            >
                            <div class="p-3 border-b border-gray-200 bg-gradient-to-r from-green-50 to-blue-50">
                                <a href="{{ url('/countries') }}"
                                    class="flex items-center justify-between text-blue-600 hover:text-blue-800 font-semibold">
                                    <span>View All Countries</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            <!-- Search Bar -->
                            <div class="p-3 border-b border-gray-200 bg-gray-50">
                                <div class="relative">
                                    <input type="text" 
                                        x-model="searchCountry"
                                        placeholder="Search countries..."
                                        class="w-full px-3 py-2 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                        @click.stop>
                                    <svg class="absolute left-3 top-2.5 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="overflow-y-auto max-h-80">
                            @php
                                if (!isset($navbarCountries)) {
                                    $navbarCountries = \App\Models\Country::withCount('universities')
                                        ->orderBy('name')
                                        ->limit(10)
                                        ->get();
                                }
                            @endphp
                            @if(isset($navbarCountries) && $navbarCountries->count() > 0)
                                @foreach($navbarCountries as $country)
                                    <a href="{{ url('/countries/' . $country->id) }}"
                                        x-show="searchCountry === '' || '{{ strtolower($country->name) }}'.includes(searchCountry.toLowerCase())"
                                        class="flex items-center p-3 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                        <div class="w-12 h-12 rounded-lg overflow-hidden flex-shrink-0 mr-3 shadow-md">
                                            @if($country->image_url)
                                                <img src="{{ $country->image_url }}" alt="{{ $country->name }}"
                                                    class="w-full h-full object-cover">
                                            @else
                                                <div
                                                    class="w-full h-full bg-gradient-to-br from-green-500 to-blue-600 flex items-center justify-center text-white text-xl font-bold">
                                                    🌍
                                                </div>
                                            @endif
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-gray-900 text-sm truncate">
                                                {{ $country->name }}
                                            </h4>
                                            @if($country->universities_count ?? false)
                                                <p class="text-xs text-gray-500">
                                                    {{ $country->universities_count }} Universities
                                                </p>
                                            @endif
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="p-4 text-center text-gray-500 text-sm">No countries available</div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <!-- Universities Dropdown -->
                    <div x-data="{ open: false, searchUniversity: '' }" @click.away="open = false" class="relative">
                        <button type="button" @click="open = !open"
                            class="transition font-medium text-sm md:text-base hover-scale fade-in stagger-4 {{ request()->is('universities*') ? 'text-yellow-300 font-bold' : 'text-white hover:text-yellow-300' }} flex items-center">
                            Universities
                            <svg class="w-4 h-4 ml-1" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute left-0 mt-2 w-80 bg-white rounded-lg shadow-2xl z-50 max-h-96 overflow-hidden"
                            >

                            <!-- View All Link -->
                            <div class="p-3 border-b border-gray-200 bg-gradient-to-r from-green-50 to-blue-50">
                                <a href="{{ url('/universities') }}"
                                    class="flex items-center justify-between text-blue-600 hover:text-blue-800 font-semibold">
                                    <span>View All Universities</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            
                            <!-- Search Bar -->
                            <div class="p-3 border-b border-gray-200 bg-gray-50">
                                <div class="relative">
                                    <input type="text" 
                                        x-model="searchUniversity"
                                        placeholder="Search universities..."
                                        class="w-full px-3 py-2 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                        @click.stop>
                                    <svg class="absolute left-3 top-2.5 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="overflow-y-auto max-h-80">

                            <!-- Universities List -->
                            {{-- Debug: Check if variable exists --}}
                            @php
                                // Temporary debug - remove after fixing
                                if (!isset($navbarUniversities)) {
                                    $navbarUniversities = \App\Models\University::with('country')
                                        ->orderBy('ranking')
                                        ->limit(10)
                                        ->get();
                                }
                            @endphp
                            
                            @if(isset($navbarUniversities) && $navbarUniversities->count() > 0)
                                @foreach($navbarUniversities as $university)
                                    <a href="{{ url('/universities/' . $university->id) }}"
                                        x-show="searchUniversity === '' || '{{ strtolower($university->name) }}'.includes(searchUniversity.toLowerCase())"
                                        class="flex items-center p-3 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                        <!-- University Image -->
                                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 mr-3 shadow-md">
                                            <img src="{{ $university->image_url ?? 'https://via.placeholder.com/150' }}"
                                                alt="{{ $university->name }}" class="w-full h-full object-cover">
                                        </div>

                                        <div class="flex-1 min-w-0">
                                            <!-- University Name -->
                                            <h4 class="font-semibold text-gray-900 text-sm truncate">
                                                {{ $university->name }}
                                            </h4>
                                            <!-- Country -->
                                            <p class="text-xs text-gray-500 truncate">
                                                {{ $university->country->name ?? 'International' }}
                                            </p>
                                            @if($university->ranking)
                                                <p class="text-xs text-yellow-600 font-medium">
                                                    🏆 Rank #{{ $university->ranking }}
                                                </p>
                                            @endif
                                        </div>

                                        <!-- Logo -->
                                        <div
                                            class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0 ml-2 bg-white border-2 border-gray-200">
                                            <img src="{{ $university->logo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($university->name) . '&size=150' }}"
                                                alt="{{ $university->name }} Logo"
                                                class="w-full h-full object-contain p-1">
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="p-4 text-center text-gray-500 text-sm">
                                    No universities available
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <!-- Courses Dropdown -->
                    <div x-data="{ open: false, searchCourse: '' }" @click.away="open = false" class="relative">
                        <button type="button" @click="open = !open"
                            class="transition font-medium text-sm md:text-base hover-scale fade-in stagger-5 {{ request()->is('courses*') ? 'text-yellow-300 font-bold' : 'text-white hover:text-yellow-300' }} flex items-center">
                            Courses
                            <svg class="w-4 h-4 ml-1" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute left-0 mt-2 w-80 bg-white rounded-lg shadow-2xl z-50 max-h-96 overflow-hidden"
                            >
                            <div class="p-3 border-b border-gray-200 bg-gradient-to-r from-green-50 to-blue-50">
                                <a href="{{ url('/courses') }}"
                                    class="flex items-center justify-between text-blue-600 hover:text-blue-800 font-semibold">
                                    <span>View All Courses</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            
                            <!-- Search Bar -->
                            <div class="p-3 border-b border-gray-200 bg-gray-50">
                                <div class="relative">
                                    <input type="text" 
                                        x-model="searchCourse"
                                        placeholder="Search courses..."
                                        class="w-full px-3 py-2 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                        @click.stop>
                                    <svg class="absolute left-3 top-2.5 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="overflow-y-auto max-h-80">
                            @php
                                if (!isset($navbarCourses)) {
                                    $navbarCourses = \App\Models\Course::with('university')
                                        ->limit(10)
                                        ->get();
                                }
                            @endphp
                            @if(isset($navbarCourses) && $navbarCourses->count() > 0)
                                @foreach($navbarCourses as $course)
                                    <a href="{{ url('/courses/' . $course->id) }}"
                                        x-show="searchCourse === '' || '{{ strtolower($course->name ?? $course->title) }}'.includes(searchCourse.toLowerCase())"
                                        class="flex items-center p-3 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                        <div
                                            class="w-12 h-12 rounded-lg bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white text-xl font-bold flex-shrink-0 mr-3">
                                            📚
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-gray-900 text-sm truncate">
                                                {{ $course->name ?? $course->title }}
                                            </h4>
                                            <p class="text-xs text-gray-500 truncate">
                                                {{ $course->university->name ?? 'Various Universities' }}
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="p-4 text-center text-gray-500 text-sm">No courses available</div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <!-- Posts Dropdown -->
                    <div x-data="{ open: false, searchPost: '' }" @click.away="open = false" class="relative">
                        <button type="button" @click="open = !open"
                            class="transition font-medium text-sm md:text-base hover-scale fade-in stagger-6 {{ request()->is('posts*') ? 'text-yellow-300 font-bold' : 'text-white hover:text-yellow-300' }} flex items-center">
                            Posts
                            <svg class="w-4 h-4 ml-1" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute left-0 mt-2 w-80 bg-white rounded-lg shadow-2xl z-50 max-h-96 overflow-hidden"
                            >
                            <div class="p-3 border-b border-gray-200 bg-gradient-to-r from-green-50 to-blue-50">
                                <a href="{{ url('/posts') }}"
                                    class="flex items-center justify-between text-blue-600 hover:text-blue-800 font-semibold">
                                    <span>View All Posts</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            
                            <!-- Search Bar -->
                            <div class="p-3 border-b border-gray-200 bg-gray-50">
                                <div class="relative">
                                    <input type="text" 
                                        x-model="searchPost"
                                        placeholder="Search posts..."
                                        class="w-full px-3 py-2 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                        @click.stop>
                                    <svg class="absolute left-3 top-2.5 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="overflow-y-auto max-h-80">
                            @php if (!isset($navbarPosts)) { try { $navbarPosts = \App\Models\Post::orderBy('created_at', 'desc')->limit(10)->get(); } catch (\Exception $e) { $navbarPosts = collect([]); } } @endphp@if(isset($navbarPosts) && $navbarPosts->count() > 0)
                                @foreach($navbarPosts as $post)
                                    <a href="{{ url('/posts/' . $post->id) }}"
                                        x-show="searchPost === '' || '{{ strtolower($post->title) }}'.includes(searchPost.toLowerCase())"
                                        class="flex items-center p-3 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                        <div
                                            class="w-12 h-12 rounded-lg bg-gradient-to-br from-pink-500 to-red-600 flex items-center justify-center text-white text-xl font-bold flex-shrink-0 mr-3">
                                            📝
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-gray-900 text-sm truncate">
                                                {{ $post->title }}</h4>
                                            <p class="text-xs text-gray-500 truncate">
                                                {{ $post->created_at->format('M d, Y') }}
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="p-4 text-center text-gray-500 text-sm">No posts available</div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <!-- Degrees Dropdown -->
                    <div x-data="{ open: false, searchDegree: '' }" @click.away="open = false" class="relative">
                        <button type="button" @click="open = !open"
                            class="transition font-medium text-sm md:text-base hover-scale fade-in stagger-1 {{ request()->is('degrees*') ? 'text-yellow-300 font-bold' : 'text-white hover:text-yellow-300' }} flex items-center">
                            Degrees
                            <svg class="w-4 h-4 ml-1" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute left-0 mt-2 w-72 bg-white rounded-lg shadow-2xl z-50 max-h-96 overflow-hidden"
                            >
                            <div class="p-3 border-b border-gray-200 bg-gradient-to-r from-green-50 to-blue-50">
                                <a href="{{ url('/degrees') }}"
                                    class="flex items-center justify-between text-blue-600 hover:text-blue-800 font-semibold">
                                    <span>View All Degrees</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            
                            <!-- Search Bar -->
                            <div class="p-3 border-b border-gray-200 bg-gray-50">
                                <div class="relative">
                                    <input type="text" 
                                        x-model="searchDegree"
                                        placeholder="Search degrees..."
                                        class="w-full px-3 py-2 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                        @click.stop>
                                    <svg class="absolute left-3 top-2.5 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="overflow-y-auto max-h-80">
                            @php if (!isset($navbarDegrees)) { try { $navbarDegrees = \App\Models\Degree::limit(10)->get(); } catch (\Exception $e) { $navbarDegrees = collect([]); } } @endphp@if(isset($navbarDegrees) && $navbarDegrees->count() > 0)
                                @foreach($navbarDegrees as $degree)
                                    <a href="{{ url('/degrees/' . $degree->id) }}"
                                        x-show="searchDegree === '' || '{{ strtolower($degree->name) }}'.includes(searchDegree.toLowerCase())"
                                        class="flex items-center p-3 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                        <div
                                            class="w-12 h-12 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white text-xl font-bold flex-shrink-0 mr-3">
                                            🎓
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-gray-900 text-sm truncate">
                                                {{ $degree->name }}</h4>
                                            <p class="text-xs text-gray-500">
                                                {{ $degree->level ?? 'Degree' }}</p>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="p-4 text-center text-gray-500 text-sm">No degrees available</div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Dropdown -->
                    <div x-data="{ open: false, searchReview: '' }" @click.away="open = false" class="relative">
                        <button type="button" @click="open = !open"
                            class="transition font-medium text-sm md:text-base hover-scale fade-in stagger-2 {{ request()->is('reviews*') ? 'text-yellow-300 font-bold' : 'text-white hover:text-yellow-300' }} flex items-center">
                            Reviews
                            <svg class="w-4 h-4 ml-1" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute left-0 mt-2 w-80 bg-white rounded-lg shadow-2xl z-50 max-h-96 overflow-hidden"
                            >
                            <div class="p-3 border-b border-gray-200 bg-gradient-to-r from-green-50 to-blue-50">
                                <a href="{{ url('/reviews') }}"
                                    class="flex items-center justify-between text-blue-600 hover:text-blue-800 font-semibold">
                                    <span>View All Reviews</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            
                            <!-- Search Bar -->
                            <div class="p-3 border-b border-gray-200 bg-gray-50">
                                <div class="relative">
                                    <input type="text" 
                                        x-model="searchReview"
                                        placeholder="Search reviews..."
                                        class="w-full px-3 py-2 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                        @click.stop>
                                    <svg class="absolute left-3 top-2.5 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="overflow-y-auto max-h-80">
                            @php 
                                if (!isset($navbarReviews)) { 
                                    try {
                                        $navbarReviews = \App\Models\Review::orderBy('created_at', 'desc')->limit(10)->get(); 
                                    } catch (\Exception $e) {
                                        $navbarReviews = collect([]);
                                    }
                                } 
                            @endphp
                            @if(isset($navbarReviews) && $navbarReviews->count() > 0)
                                @foreach($navbarReviews as $review)
                                    <a href="{{ url('/reviews/' . $review->id) }}"
                                        x-show="searchReview === '' || '{{ strtolower($review->title ?? 'Review') }}'.includes(searchReview.toLowerCase())"
                                        class="flex items-center p-3 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                        <div
                                            class="w-12 h-12 rounded-lg bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center text-white text-xl font-bold flex-shrink-0 mr-3">
                                            ⭐
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-gray-900 text-sm truncate">
                                                {{ $review->title ?? 'Review' }}</h4>
                                            <p class="text-xs text-gray-500 truncate">
                                                {{ $review->university->name ?? 'University Review' }}
                                            </p>
                                            @if($review->rating)
                                                <p class="text-xs text-yellow-600">⭐ {{ $review->rating }}/5</p>
                                            @endif
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="p-4 text-center text-gray-500 text-sm">No reviews available</div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <!-- Scholarships Dropdown -->
                    <div x-data="{ open: false, searchScholarship: '' }" @click.away="open = false" class="relative">
                        <button type="button" @click="open = !open"
                            class="transition font-medium text-sm md:text-base hover-scale fade-in stagger-3 {{ request()->is('scholarships*') ? 'text-yellow-300 font-bold' : 'text-white hover:text-yellow-300' }} flex items-center">
                            Scholarships
                            <svg class="w-4 h-4 ml-1" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            class="absolute left-0 mt-2 w-80 bg-white rounded-lg shadow-2xl z-50 max-h-96 overflow-hidden"
                            >
                            <div class="p-3 border-b border-gray-200 bg-gradient-to-r from-green-50 to-blue-50">
                                <a href="{{ url('/scholarships') }}"
                                    class="flex items-center justify-between text-blue-600 hover:text-blue-800 font-semibold">
                                    <span>View All Scholarships</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            
                            <!-- Search Bar -->
                            <div class="p-3 border-b border-gray-200 bg-gray-50">
                                <div class="relative">
                                    <input type="text" 
                                        x-model="searchScholarship"
                                        placeholder="Search scholarships..."
                                        class="w-full px-3 py-2 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                        @click.stop>
                                    <svg class="absolute left-3 top-2.5 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="overflow-y-auto max-h-80">
                            @php 
                                if (!isset($navbarScholarships)) { 
                                    try {
                                        $navbarScholarships = \App\Models\Scholarship::orderBy('created_at', 'desc')->limit(10)->get(); 
                                    } catch (\Exception $e) {
                                        $navbarScholarships = collect([]);
                                    }
                                } 
                            @endphp
                            @if(isset($navbarScholarships) && $navbarScholarships->count() > 0)
                                @foreach($navbarScholarships as $scholarship)
                                    <a href="{{ url('/scholarships/' . $scholarship->id) }}"
                                        x-show="searchScholarship === '' || '{{ strtolower($scholarship->name) }}'.includes(searchScholarship.toLowerCase())"
                                        class="flex items-center p-3 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                        <div
                                            class="w-12 h-12 rounded-lg bg-gradient-to-br from-yellow-500 to-orange-600 flex items-center justify-center text-white text-xl font-bold flex-shrink-0 mr-3">
                                            💰
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-gray-900 text-sm truncate">
                                                {{ $scholarship->name }}
                                            </h4>
                                            <p class="text-xs text-gray-500 truncate">
                                                {{ $scholarship->university->name ?? 'Various Universities' }}
                                            </p>
                                            @if($scholarship->amount)
                                                <p class="text-xs text-green-600 font-medium">
                                                    ${{ number_format($scholarship->amount) }}
                                                </p>
                                            @endif
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="p-4 text-center text-gray-500 text-sm">No scholarships available</div>
                            @endif
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/about-us') }}"
                        class="transition font-medium text-sm md:text-base hover-scale fade-in stagger-4 {{ request()->is('about-us') ? 'text-yellow-300 font-bold' : 'text-white hover:text-yellow-300' }}">About
                        Us</a>
                    <a href="{{ route('best-choice.index') }}"
                        class="px-4 md:px-6 py-2 rounded-full transition font-semibold shadow-lg text-sm md:text-base bounce-hover pulse-glow fade-in stagger-5 bg-gradient-to-r from-purple-600 to-blue-600 text-white hover:from-purple-700 hover:to-blue-700">
                        🎯 Best Choice
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-16 mt-16 border-t-4 border-blue-500">
        <div class="container mx-auto px-4">
            <!-- Single Row with 4 Columns -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Column 1: Company Info & Social Media -->
                <div>
                    <h3 class="text-2xl font-bold mb-4 flex items-center">
                        <span class="text-blue-500 mr-2">🌍</span> 
                        <span class="bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text">StudyAbroad</span>
                    </h3>
                    <p class="text-gray-300 mb-6 leading-relaxed text-sm">
                        Your trusted gateway to international education opportunities. We help students discover
                        world-class universities, scholarships, and courses to shape their future globally.
                    </p>
                    
                    <!-- Social Media Icons -->
                    <div class="mb-6">
                        <h5 class="text-sm font-semibold mb-3 text-gray-200">Connect With Us</h5>
                        <div class="flex flex-wrap gap-3">
                            @if(isset($socialLinks) && count($socialLinks) > 0)
                                @foreach($socialLinks as $social)
                                    <a href="{{ $social->url }}" target="_blank"
                                        class="w-10 h-10 rounded-full {{ $social->bg_color }} {{ $social->hover_color }} flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-1 shadow-lg"
                                        title="{{ $social->platform }}">
                                        <i class="{{ $social->icon }} text-white"></i>
                                    </a>
                                @endforeach
                            @else
                                <!-- Default Social Media Icons -->
                                <a href="https://facebook.com" target="_blank" class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-1 shadow-lg" title="Facebook">
                                    <i class="fab fa-facebook-f text-white"></i>
                                </a>
                                <a href="https://twitter.com" target="_blank" class="w-10 h-10 rounded-full bg-blue-400 hover:bg-blue-500 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-1 shadow-lg" title="Twitter">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                                <a href="https://instagram.com" target="_blank" class="w-10 h-10 rounded-full bg-pink-600 hover:bg-pink-700 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-1 shadow-lg" title="Instagram">
                                    <i class="fab fa-instagram text-white"></i>
                                </a>
                                <a href="https://linkedin.com" target="_blank" class="w-10 h-10 rounded-full bg-blue-700 hover:bg-blue-800 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:-translate-y-1 shadow-lg" title="LinkedIn">
                                    <i class="fab fa-linkedin-in text-white"></i>
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Download Apps -->
                    <div>
                        <h5 class="text-sm font-semibold mb-3 text-gray-200">Download Our App</h5>
                        <div class="space-y-2">
                            <a href="https://www.apple.com/app-store/" target="_blank" class="flex items-center space-x-2 bg-gray-700 hover:bg-gray-600 px-3 py-2 rounded-lg transition-all duration-300 border border-gray-600 hover:border-blue-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/>
                                </svg>
                                <div class="text-left">
                                    <div class="text-xs text-gray-400">Download on</div>
                                    <div class="text-xs font-semibold text-white">App Store</div>
                                </div>
                            </a>
                            <a href="https://play.google.com/store" target="_blank" class="flex items-center space-x-2 bg-gray-700 hover:bg-gray-600 px-3 py-2 rounded-lg transition-all duration-300 border border-gray-600 hover:border-blue-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.5,12.92 20.16,13.19L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z"/>
                                </svg>
                                <div class="text-left">
                                    <div class="text-xs text-gray-400">Get it on</div>
                                    <div class="text-xs font-semibold text-white">Google Play</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Navigation Links -->
                <div>
                    <h4 class="text-xl font-bold mb-6 text-white border-b-2 border-blue-500 pb-2 inline-block">Navigation</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('countries.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Countries
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('universities.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Universities
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('courses.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Courses
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('scholarships.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Scholarships
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('posts.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Blog & News
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('reviews.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Student Reviews
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                About Us
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h4 class="text-xl font-bold mb-6 text-white border-b-2 border-blue-500 pb-2 inline-block">Our Services</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('applications.create') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                University Applications
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Visa Assistance
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('scholarships.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Scholarship Guidance
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('chat.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Career Counseling
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('courses.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Test Preparation
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Accommodation Help
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('countries.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Cultural Guidance
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('reviews.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span class="mr-2 text-blue-500 group-hover:translate-x-1 transition-transform">›</span>
                                Student Community
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 4: Contact Info & Newsletter -->
                <div>
                    <h4 class="text-xl font-bold mb-6 text-white border-b-2 border-blue-500 pb-2 inline-block">Contact Us</h4>
                    <div class="space-y-4 mb-6">
                        <a href="https://maps.google.com/?q=Dhaka,Bangladesh" target="_blank" class="flex items-start space-x-3 text-gray-300 hover:text-blue-400 transition-colors duration-300 group">
                            <svg class="w-5 h-5 text-blue-500 mt-1 flex-shrink-0 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-sm">123 Education Street<br>Dhaka, Bangladesh</span>
                        </a>
                        <a href="tel:+8801306753144" class="flex items-center space-x-3 text-gray-300 hover:text-blue-400 transition-colors duration-300 group">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-sm">+880 1306 753144</span>
                        </a>
                        <a href="mailto:info@studyabroad.com" class="flex items-center space-x-3 text-gray-300 hover:text-blue-400 transition-colors duration-300 group">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm">info@studyabroad.com</span>
                        </a>
                    </div>

                    <!-- Newsletter -->
                    <div class="bg-gray-700 p-4 rounded-lg border border-gray-600">
                        <h5 class="text-lg font-semibold mb-2 text-white">📧 Newsletter</h5>
                        <p class="text-gray-300 text-xs mb-3">Stay updated with latest opportunities!</p>
                        <form id="newsletter-form" class="space-y-2" onsubmit="event.preventDefault(); alert('Thank you for subscribing!');">
                            <input type="email" name="email" placeholder="Your email address" required
                                class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded-md text-white text-sm placeholder-gray-400 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-4 py-2 rounded-md transition-all duration-300 font-semibold text-sm shadow-lg hover:shadow-xl hover:scale-105 transform">
                                Subscribe Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-700 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-gray-400 text-sm">
                        © {{ date('Y') }} <span class="text-blue-400 font-semibold">StudyAbroad</span>. All rights reserved. Made with ❤️ for students worldwide.
                    </p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <a href="{{ route('about-us') }}" class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300 hover:underline">
                            Privacy Policy
                        </a>
                        <a href="{{ route('about-us') }}" class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300 hover:underline">
                            Terms of Service
                        </a>
                        <a href="{{ route('about-us') }}" class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300 hover:underline">
                            Cookie Policy
                        </a>
                        <a href="{{ route('about-us') }}" class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300 hover:underline">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute(
                    'href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

    </script>
</body>

</html>

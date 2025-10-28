<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Study Abroad')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-blue-600 to-purple-600 shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex items-center space-x-4 mb-2 md:mb-0">
                    <a href="{{ url('/') }}"
                        class="text-2xl md:text-3xl font-bold text-white hover:text-yellow-300 transition">🌍
                        StudyAbroad</a>
                    <div class="flex items-center text-white">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span class="font-medium text-sm md:text-base">01306753144</span>
                    </div>
                </div>
                <div class="flex flex-wrap space-x-4 md:space-x-6">
                    <a href="{{ url('/') }}"
                        class="transition font-medium text-sm md:text-base {{ request()->is('/') ? 'text-red-500' : 'text-white hover:text-yellow-300' }}">Home</a>
                    <a href="{{ url('/countries') }}"
                        class="transition font-medium text-sm md:text-base {{ request()->is('countries*') ? 'text-red-500' : 'text-white hover:text-yellow-300' }}">Countries</a>
                    <a href="{{ url('/universities') }}"
                        class="transition font-medium text-sm md:text-base {{ request()->is('universities*') ? 'text-red-500' : 'text-white hover:text-yellow-300' }}">Universities</a>
                    <a href="{{ url('/courses') }}"
                        class="transition font-medium text-sm md:text-base {{ request()->is('courses*') ? 'text-red-500' : 'text-white hover:text-yellow-300' }}">Courses</a>
                    <a href="{{ url('/posts') }}"
                        class="transition font-medium text-sm md:text-base {{ request()->is('posts*') ? 'text-red-500' : 'text-white hover:text-yellow-300' }}">Posts</a>
                    <a href="{{ url('/degrees') }}"
                        class="transition font-medium text-sm md:text-base {{ request()->is('degrees*') ? 'text-red-500' : 'text-white hover:text-yellow-300' }}">Degrees</a>
                    <a href="{{ url('/reviews') }}"
                        class="transition font-medium text-sm md:text-base {{ request()->is('reviews*') ? 'text-red-500' : 'text-white hover:text-yellow-300' }}">Reviews</a>
                    <a href="{{ url('/scholarships') }}"
                        class="transition font-medium text-sm md:text-base {{ request()->is('scholarships*') ? 'text-red-500' : 'text-white hover:text-yellow-300' }}">Scholarships</a>
                    <a href="{{ url('/about-us') }}"
                        class="transition font-medium text-sm md:text-base {{ request()->is('about-us') ? 'text-red-500' : 'text-white hover:text-yellow-300' }}">About
                        Us</a>
                    <a href="{{ route('applications.create') }}"
                        class="px-4 md:px-6 py-2 rounded-full transition font-semibold shadow-lg text-sm md:text-base {{ Route::currentRouteName() == 'applications.create' ? 'bg-red-500 text-white' : 'bg-yellow-400 text-blue-900 hover:bg-yellow-300' }}">Apply
                        Now</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-4">
        @if(Route::currentRouteName() == 'universities.index')
            <form action="{{ route('search.universities') }}" method="GET">
                <div class="flex items-center bg-white rounded-full shadow-md">
                    <input type="text" name="query" placeholder="Search for universities..."
                        class="w-full py-3 px-6 rounded-l-full focus:outline-none">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-r-full">
                        Search
                    </button>
                </div>
            </form>
        @elseif(Route::currentRouteName() == 'countries.index')
            <form action="{{ route('search.countries') }}" method="GET">
                <div class="flex items-center bg-white rounded-full shadow-md">
                    <input type="text" name="query" placeholder="Search for countries..."
                        class="w-full py-3 px-6 rounded-l-full focus:outline-none">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-r-full">
                        Search
                    </button>
                </div>
            </form>
        @elseif(Route::currentRouteName() == 'courses.index')
            <form action="{{ route('search.courses') }}" method="GET">
                <div class="flex items-center bg-white rounded-full shadow-md">
                    <input type="text" name="query" placeholder="Search for courses..."
                        class="w-full py-3 px-6 rounded-l-full focus:outline-none">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-r-full">
                        Search
                    </button>
                </div>
            </form>
        @elseif(Route::currentRouteName() == 'scholarships.index')
            <form action="{{ route('search.scholarships') }}" method="GET">
                <div class="flex items-center bg-white rounded-full shadow-md">
                    <input type="text" name="query" placeholder="Search for scholarships..."
                        class="w-full py-3 px-6 rounded-l-full focus:outline-none">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-r-full">
                        Search
                    </button>
                </div>
            </form>
        @elseif(Route::currentRouteName() == 'posts.index')
            <form action="{{ route('search.posts') }}" method="GET">
                <div class="flex items-center bg-white rounded-full shadow-md">
                    <input type="text" name="query" placeholder="Search for posts..."
                        class="w-full py-3 px-6 rounded-l-full focus:outline-none">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-r-full">
                        Search
                    </button>
                </div>
            </form>
        @elseif(Route::currentRouteName() == 'degrees.index')
            <form action="{{ route('search.degrees') }}" method="GET">
                <div class="flex items-center bg-white rounded-full shadow-md">
                    <input type="text" name="query" placeholder="Search for degrees..."
                        class="w-full py-3 px-6 rounded-l-full focus:outline-none">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-r-full">
                        Search
                    </button>
                </div>
            </form>
        @elseif(Route::currentRouteName() == 'reviews.index')
            <form action="{{ route('search.reviews') }}" method="GET">
                <div class="flex items-center bg-white rounded-full shadow-md">
                    <input type="text" name="query" placeholder="Search for reviews..."
                        class="w-full py-3 px-6 rounded-l-full focus:outline-none">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-r-full">
                        Search
                    </button>
                </div>
            </form>
        @else
            <form action="{{ route('search') }}" method="GET">
                <div class="flex items-center bg-white rounded-full shadow-md">
                    <input type="text" name="query" placeholder="Search for anything..."
                        class="w-full py-3 px-6 rounded-l-full focus:outline-none">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-r-full">
                        Search
                    </button>
                </div>
            </form>
        @endif
    </div>

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16 mt-16 border-t border-gray-700">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <h3 class="text-2xl font-bold mb-4 flex items-center">
                        <span class="text-blue-400 mr-2">🌍</span> StudyAbroad
                    </h3>
                    <p class="text-gray-300 mb-6 leading-relaxed max-w-md">
                        Your trusted gateway to international education opportunities. We help students discover
                        world-class universities, scholarships, and courses to shape their future globally.
                    </p>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300"
                            title="Facebook">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors duration-300"
                            title="Instagram">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C8.396 0 7.996.014 6.79.067 5.584.12 4.775.302 4.082.566c-.693.264-1.286.657-1.879 1.25C1.51 2.409 1.117 3.002.853 3.695.589 4.388.407 5.197.354 6.403.301 7.609.285 8.009.285 11.63c0 3.621.016 4.021.069 5.227.053 1.206.235 2.015.499 2.708.264.693.657 1.286 1.25 1.879.593.593 1.186 1.286 1.879 1.879.693.593 1.286.986 1.879 1.25.693.264 1.502.446 2.708.499 1.206.053 1.606.069 5.227.069 3.621 0 4.021-.016 5.227-.069 1.206-.053 2.015-.235 2.708-.499.693-.264 1.286-.657 1.879-1.25.593-.593 1.286-1.186 1.879-1.879.593-.593.986-1.286 1.25-1.879.264-.693.446-1.502.499-2.708.053-1.206.069-1.606.069-5.227 0-3.621-.016-4.021-.069-5.227-.053-1.206-.235-2.015-.499-2.708-.264-.693-.657-1.286-1.25-1.879-.593-.593-1.186-1.286-1.879-1.879-.693-.593-1.286-.986-1.879-1.25-.693-.264-1.502-.446-2.708-.499C15.024.014 14.624 0 12.017 0zm0 2.163c3.574 0 4.021.014 5.227.069 1.206.053 1.866.302 2.302.566.436.264.793.657 1.25 1.114.457.457.85.814 1.114 1.25.264.436.513 1.096.566 2.302.053 1.206.069 1.653.069 5.227 0 3.574-.016 4.021-.069 5.227-.053 1.206-.302 1.866-.566 2.302-.264.436-.657.793-1.114 1.25-.457.457-.814.85-1.25 1.114-.436.264-1.096.513-2.302.566-1.206.053-1.653.069-5.227.069-3.574 0-4.021-.016-5.227-.069-1.206-.053-1.866-.302-2.302-.566-.436-.264-.793-.657-1.25-1.114-.457-.457-.85-.814-1.114-1.25-.264-.436-.513-1.096-.566-2.302-.053-1.206-.069-1.653-.069-5.227 0-3.574.016-4.021.069-5.227.053-1.206.302-1.866.566-2.302.264-.436.657-.793 1.114-1.25.457-.457.814-.85 1.25-1.114.436-.264 1.096-.513 2.302-.566C7.996 2.177 8.442 2.163 12.017 2.163z" />
                                <circle cx="12.017" cy="12.017" r="3.288" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors duration-300"
                            title="LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300"
                            title="Twitter">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ url('/') }}"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Home</a></li>
                        <li><a href="{{ url('/countries') }}"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Countries</a>
                        </li>
                        <li><a href="{{ url('/universities') }}"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Universities</a>
                        </li>
                        <li><a href="{{ url('/courses') }}"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Courses</a>
                        </li>
                        <li><a href="{{ url('/scholarships') }}"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Scholarships</a>
                        </li>
                        <li><a href="{{ url('/countries') }}"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Cultural
                                Guidance</a>
                        </li>
                        <li><a href="{{ url('/reviews') }}"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Student
                                Community</a>
                        </li>
                        <li><a href="{{ url('/about-us') }}"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">About Us</a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">University
                                Applications</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Visa
                                Assistance</a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Scholarship
                                Guidance</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Career
                                Counseling</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Test
                                Preparation</a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Accommodation
                                Help</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">Contact Info</h4>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-gray-300 text-sm">123 Education Street<br>Dhaka, Bangladesh</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-gray-300 text-sm">+880 1306 753144</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-300 text-sm">info@studyabroad.com</span>
                        </div>
                    </div>
                </div>

                <!-- Newsletter -->
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">Newsletter</h4>
                    <p class="text-gray-300 text-sm mb-4">Stay updated with the latest opportunities and news.</p>
                    <div class="space-y-3">
                        <input type="email" placeholder="Your email address"
                            class="w-full px-3 py-2 bg-gray-800 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-blue-400 transition-colors">
                        <button
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors duration-300 font-medium">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-700 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">
                        © 2024 StudyAbroad. All rights reserved.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#"
                            class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300">Privacy
                            Policy</a>
                        <a href="#"
                            class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300">Terms of
                            Service</a>
                        <a href="#"
                            class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300">Cookie
                            Policy</a>
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

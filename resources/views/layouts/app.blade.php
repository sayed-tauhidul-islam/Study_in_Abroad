<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Study Abroad')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-blue-600 to-purple-600 shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="{{ url('/') }}"
                    class="text-3xl font-bold text-white hover:text-yellow-300 transition">🌍 StudyAbroad</a>
                <div class="flex items-center text-white">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <span class="font-medium">01306753144</span>
                </div>
            </div>
            <div class="space-x-6">
                <a href="{{ url('/') }}"
                    class="text-white hover:text-yellow-300 transition font-medium">Home</a>
                <a href="{{ url('/countries') }}"
                    class="text-white hover:text-yellow-300 transition font-medium">Countries</a>
                <a href="{{ url('/universities') }}"
                    class="text-white hover:text-yellow-300 transition font-medium">Universities</a>
                <a href="{{ url('/courses') }}"
                    class="text-white hover:text-yellow-300 transition font-medium">Courses</a>
                <a href="{{ url('/posts') }}"
                    class="text-white hover:text-yellow-300 transition font-medium">Posts</a>
                <a href="{{ url('/reviews') }}"
                    class="text-white hover:text-yellow-300 transition font-medium">Reviews</a>
                <a href="{{ url('/scholarships') }}"
                    class="text-white hover:text-yellow-300 transition font-medium">Scholarships</a>
                <a href="{{ url('/about-us') }}"
                    class="text-white hover:text-yellow-300 transition font-medium">About Us</a>
                <a href="{{ route('applications.create') }}"
                    class="bg-yellow-400 text-blue-900 px-6 py-2 rounded-full hover:bg-yellow-300 transition font-semibold shadow-lg">Apply
                    Now</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 text-gray-800 py-16 mt-16 relative overflow-hidden border-t border-gray-200">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="footer-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="#333333" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#footer-pattern)" />
            </svg>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid md:grid-cols-5 gap-8">
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4 flex items-center">
                        <span class="text-gray-800 mr-2">🌍</span> StudyAbroad
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Your gateway to international education opportunities.
                        Discover universities, scholarships, and courses worldwide to shape your future.</p>
                    <!-- Newsletter Signup -->
                    <div class="bg-gray-100 rounded-lg p-4 border border-gray-200">
                        <h5 class="font-semibold mb-2 text-gray-800">Stay Updated</h5>
                        <div class="flex">
                            <input type="email" placeholder="Enter your email"
                                class="flex-1 px-3 py-2 rounded-l-md text-gray-800 focus:outline-none border border-gray-300">
                            <button
                                class="bg-yellow-400 text-blue-900 px-4 py-2 rounded-r-md hover:bg-yellow-300 transition font-semibold">Subscribe</button>
                        </div>
                    </div>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4 mt-6">
                        <a href="#"
                            class="bg-gray-200 hover:bg-gray-300 p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg group"
                            title="Facebook">
                            <svg class="w-6 h-6 text-gray-800 group-hover:text-blue-600" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-gray-200 hover:bg-gray-300 p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg group"
                            title="Instagram">
                            <svg class="w-6 h-6 text-gray-800 group-hover:text-pink-400" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C8.396 0 7.996.014 6.79.067 5.584.12 4.775.302 4.082.566c-.693.264-1.286.657-1.879 1.25C1.51 2.409 1.117 3.002.853 3.695.589 4.388.407 5.197.354 6.403.301 7.609.285 8.009.285 11.63c0 3.621.016 4.021.069 5.227.053 1.206.235 2.015.499 2.708.264.693.657 1.286 1.25 1.879.593.593 1.186 1.286 1.879 1.879.693.593 1.286.986 1.879 1.25.693.264 1.502.446 2.708.499 1.206.053 1.606.069 5.227.069 3.621 0 4.021-.016 5.227-.069 1.206-.053 2.015-.235 2.708-.499.693-.264 1.286-.657 1.879-1.25.593-.593 1.286-1.186 1.879-1.879.593-.593.986-1.286 1.25-1.879.264-.693.446-1.502.499-2.708.053-1.206.069-1.606.069-5.227 0-3.621-.016-4.021-.069-5.227-.053-1.206-.235-2.015-.499-2.708-.264-.693-.657-1.286-1.25-1.879-.593-.593-1.186-1.286-1.879-1.879-.693-.593-1.286-.986-1.879-1.25-.693-.264-1.502-.446-2.708-.499C15.024.014 14.624 0 12.017 0zm0 2.163c3.574 0 4.021.014 5.227.069 1.206.053 1.866.302 2.302.566.436.264.793.657 1.25 1.114.457.457.85.814 1.114 1.25.264.436.513 1.096.566 2.302.053 1.206.069 1.653.069 5.227 0 3.574-.016 4.021-.069 5.227-.053 1.206-.302 1.866-.566 2.302-.264.436-.657.793-1.114 1.25-.457.457-.814.85-1.25 1.114-.436.264-1.096.513-2.302.566-1.206.053-1.653.069-5.227.069-3.574 0-4.021-.016-5.227-.069-1.206-.053-1.866-.302-2.302-.566-.436-.264-.793-.657-1.25-1.114-.457-.457-.85-.814-1.114-1.25-.264-.436-.513-1.096-.566-2.302-.053-1.206-.069-1.653-.069-5.227 0-3.574.016-4.021.069-5.227.053-1.206.302-1.866.566-2.302.264-.436.657-.793 1.114-1.25.457-.457.814-.85 1.25-1.114.436-.264 1.096-.513 2.302-.566C7.996 2.177 8.442 2.163 12.017 2.163z" />
                                <circle cx="12.017" cy="12.017" r="3.288" />
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-gray-200 hover:bg-gray-300 p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg group"
                            title="WhatsApp">
                            <svg class="w-6 h-6 text-gray-800 group-hover:text-green-400" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-gray-200 hover:bg-gray-300 p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg group"
                            title="YouTube">
                            <svg class="w-6 h-6 text-gray-800 group-hover:text-red-500" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-gray-200 hover:bg-gray-300 p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg group"
                            title="Twitter">
                            <svg class="w-6 h-6 text-gray-800 group-hover:text-blue-400" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-gray-200 hover:bg-gray-300 p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg group"
                            title="LinkedIn">
                            <svg class="w-6 h-6 text-gray-800 group-hover:text-blue-700" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-gray-800">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/') }}"
                                class="text-gray-600 hover:text-gray-800 transition hover:translate-x-1 inline-block">Home</a>
                        </li>
                        <li><a href="{{ url('/countries') }}"
                                class="text-gray-600 hover:text-gray-800 transition hover:translate-x-1 inline-block">Countries</a>
                        </li>
                        <li><a href="{{ url('/universities') }}"
                                class="text-gray-600 hover:text-gray-800 transition hover:translate-x-1 inline-block">Universities</a>
                        </li>
                        <li><a href="{{ url('/courses') }}"
                                class="text-gray-600 hover:text-gray-800 transition hover:translate-x-1 inline-block">Courses</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-gray-800">Resources</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/scholarships') }}"
                                class="text-gray-600 hover:text-gray-800 transition hover:translate-x-1 inline-block">Scholarships</a>
                        </li>
                        <li><a href="{{ url('/posts') }}"
                                class="text-gray-600 hover:text-gray-800 transition hover:translate-x-1 inline-block">Blog
                                Posts</a></li>
                        <li><a href="{{ url('/reviews') }}"
                                class="text-gray-600 hover:text-gray-800 transition hover:translate-x-1 inline-block">Reviews</a>
                        </li>
                        <li><a href="{{ route('applications.create') }}"
                                class="text-gray-600 hover:text-gray-800 transition hover:translate-x-1 inline-block">Apply
                                Now</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-gray-800">Contact</h4>
                    <div class="flex items-center mb-3">
                        <svg class="w-5 h-5 mr-3 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <p class="text-gray-600">sayedislamnubtk55@gmail.com</p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <p class="text-gray-600">01306753144</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-300 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-600">&copy; 2025 StudyAbroad. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-600 hover:text-gray-800 transition">Privacy Policy</a>
                        <a href="#" class="text-gray-600 hover:text-gray-800 transition">Terms of Service</a>
                        <a href="#" class="text-gray-600 hover:text-gray-800 transition">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Smooth scroll for nav links -->
    <script>
        document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
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

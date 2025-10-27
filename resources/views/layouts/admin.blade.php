<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-900 text-white min-h-screen">
    <!-- Admin Sidebar -->
    <div class="flex">
        <div class="w-64 bg-gray-800 min-h-screen shadow-lg">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-red-400">Admin Panel</h1>
                <p class="text-gray-400 text-sm mt-1">Management System</p>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-6 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-red-600 text-white border-r-4 border-red-400' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.countries.index') }}"
                    class="flex items-center px-6 py-3 {{ request()->routeIs('admin.countries.*') ? 'bg-red-600 text-white border-r-4 border-red-400' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064">
                        </path>
                    </svg>
                    Countries
                </a>
                <a href="{{ route('admin.courses.index') }}"
                    class="flex items-center px-6 py-3 {{ request()->routeIs('admin.courses.*') ? 'bg-red-600 text-white border-r-4 border-red-400' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                    Courses
                </a>
                <a href="{{ route('admin.universities.index') }}"
                    class="flex items-center px-6 py-3 {{ request()->routeIs('admin.universities.*') ? 'bg-red-600 text-white border-r-4 border-red-400' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                    Universities
                </a>
                <a href="{{ route('admin.posts.index') }}"
                    class="flex items-center px-6 py-3 {{ request()->routeIs('admin.posts.*') ? 'bg-red-600 text-white border-r-4 border-red-400' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                    Posts
                </a>
                <a href="{{ route('admin.reviews.index') }}"
                    class="flex items-center px-6 py-3 {{ request()->routeIs('admin.reviews.*') ? 'bg-red-600 text-white border-r-4 border-red-400' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                        </path>
                    </svg>
                    Reviews
                </a>
                <a href="{{ route('admin.scholarships.index') }}"
                    class="flex items-center px-6 py-3 {{ request()->routeIs('admin.scholarships.*') ? 'bg-red-600 text-white border-r-4 border-red-400' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                        </path>
                    </svg>
                    Scholarships
                </a>
                <a href="{{ route('admin.applications.index') }}"
                    class="flex items-center px-6 py-3 {{ request()->routeIs('admin.applications.*') ? 'bg-red-600 text-white border-r-4 border-red-400' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    Applications
                </a>
                <a href="{{ route('admin.degrees.index') }}"
                    class="flex items-center px-6 py-3 {{ request()->routeIs('admin.degrees.*') ? 'bg-red-600 text-white border-r-4 border-red-400' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z M12 14l-9-5 9-5 9 5-9 5z">
                        </path>
                    </svg>
                    Degrees
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Top Bar -->
            <header class="bg-gray-800 shadow-sm px-6 py-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-white">@yield('title', 'Dashboard')</h2>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-300">Welcome, Admin</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md font-medium transition-colors">
                            Logout
                        </button>
                    </form>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6 bg-gray-900 min-h-screen">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>

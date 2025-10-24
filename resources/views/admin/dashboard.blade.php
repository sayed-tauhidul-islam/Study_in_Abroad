@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="space-y-8">
    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-lg p-6 text-white">
        <h1 class="text-3xl font-bold mb-2">Welcome to Admin Dashboard</h1>
        <p class="text-red-100">Manage your study abroad platform efficiently</p>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Countries</p>
                    <p class="text-2xl font-bold text-white">{{ \App\Models\Country::count() }}</p>
                </div>
                <div class="text-red-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064">
                        </path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Universities</p>
                    <p class="text-2xl font-bold text-white">{{ \App\Models\University::count() }}</p>
                </div>
                <div class="text-blue-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Applications</p>
                    <p class="text-2xl font-bold text-white">{{ \App\Models\Application::count() }}</p>
                </div>
                <div class="text-green-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Reviews</p>
                    <p class="text-2xl font-bold text-white">{{ \App\Models\Review::count() }}</p>
                </div>
                <div class="text-yellow-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Management Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="{{ route('admin.countries.index') }}"
            class="block bg-gray-800 p-6 rounded-lg border border-gray-700 hover:bg-gray-700 transition-colors group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="font-bold text-xl text-white">Countries</h2>
                <svg class="w-6 h-6 text-red-400 group-hover:text-red-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064">
                    </path>
                </svg>
            </div>
            <p class="text-gray-400 mb-4">Add, edit, and delete countries</p>
            <div class="flex space-x-2">
                <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm">Add</span>
                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Edit</span>
                <span class="bg-red-800 text-white px-3 py-1 rounded-full text-sm">Delete</span>
            </div>
        </a>

        <a href="{{ route('admin.universities.index') }}"
            class="block bg-gray-800 p-6 rounded-lg border border-gray-700 hover:bg-gray-700 transition-colors group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="font-bold text-xl text-white">Universities</h2>
                <svg class="w-6 h-6 text-blue-400 group-hover:text-blue-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                    </path>
                </svg>
            </div>
            <p class="text-gray-400 mb-4">Manage university information</p>
            <div class="flex space-x-2">
                <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm">Add</span>
                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Edit</span>
                <span class="bg-red-800 text-white px-3 py-1 rounded-full text-sm">Delete</span>
            </div>
        </a>

        <a href="{{ route('admin.courses.index') }}"
            class="block bg-gray-800 p-6 rounded-lg border border-gray-700 hover:bg-gray-700 transition-colors group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="font-bold text-xl text-white">Courses</h2>
                <svg class="w-6 h-6 text-green-400 group-hover:text-green-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                    </path>
                </svg>
            </div>
            <p class="text-gray-400 mb-4">Manage course offerings</p>
            <div class="flex space-x-2">
                <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm">Add</span>
                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Edit</span>
                <span class="bg-red-800 text-white px-3 py-1 rounded-full text-sm">Delete</span>
            </div>
        </a>

        <a href="{{ route('admin.posts.index') }}"
            class="block bg-gray-800 p-6 rounded-lg border border-gray-700 hover:bg-gray-700 transition-colors group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="font-bold text-xl text-white">Posts</h2>
                <svg class="w-6 h-6 text-purple-400 group-hover:text-purple-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                </svg>
            </div>
            <p class="text-gray-400 mb-4">Manage blog posts and news</p>
            <div class="flex space-x-2">
                <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm">Add</span>
                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Edit</span>
                <span class="bg-red-800 text-white px-3 py-1 rounded-full text-sm">Delete</span>
            </div>
        </a>

        <a href="{{ route('admin.reviews.index') }}"
            class="block bg-gray-800 p-6 rounded-lg border border-gray-700 hover:bg-gray-700 transition-colors group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="font-bold text-xl text-white">Reviews</h2>
                <svg class="w-6 h-6 text-yellow-400 group-hover:text-yellow-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                    </path>
                </svg>
            </div>
            <p class="text-gray-400 mb-4">Manage student reviews</p>
            <div class="flex space-x-2">
                <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm">Add</span>
                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Edit</span>
                <span class="bg-red-800 text-white px-3 py-1 rounded-full text-sm">Delete</span>
            </div>
        </a>

        <a href="{{ route('admin.scholarships.index') }}"
            class="block bg-gray-800 p-6 rounded-lg border border-gray-700 hover:bg-gray-700 transition-colors group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="font-bold text-xl text-white">Scholarships</h2>
                <svg class="w-6 h-6 text-indigo-400 group-hover:text-indigo-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                    </path>
                </svg>
            </div>
            <p class="text-gray-400 mb-4">Manage scholarship programs</p>
            <div class="flex space-x-2">
                <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm">Add</span>
                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Edit</span>
                <span class="bg-red-800 text-white px-3 py-1 rounded-full text-sm">Delete</span>
            </div>
        </a>

        <a href="{{ route('admin.applications.index') }}"
            class="block bg-gray-800 p-6 rounded-lg border border-gray-700 hover:bg-gray-700 transition-colors group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="font-bold text-xl text-white">Applications</h2>
                <svg class="w-6 h-6 text-teal-400 group-hover:text-teal-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </div>
            <p class="text-gray-400 mb-4">View and manage applications</p>
            <div class="flex space-x-2">
                <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm">View</span>
                <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Edit</span>
                <span class="bg-red-800 text-white px-3 py-1 rounded-full text-sm">Delete</span>
            </div>
        </a>
    </div>

    <!-- Recent Activity -->
    <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
        <h2 class="text-xl font-bold text-white mb-4">Recent Activity</h2>
        <div class="space-y-4">
            <div class="flex items-center space-x-4">
                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                <p class="text-gray-300">New application submitted for Harvard University</p>
                <span class="text-gray-500 text-sm">2 hours ago</span>
            </div>
            <div class="flex items-center space-x-4">
                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                <p class="text-gray-300">University of Toronto information updated</p>
                <span class="text-gray-500 text-sm">5 hours ago</span>
            </div>
            <div class="flex items-center space-x-4">
                <div class="w-2 h-2 bg-yellow-400 rounded-full"></div>
                <p class="text-gray-300">New scholarship added for Engineering students</p>
                <span class="text-gray-500 text-sm">1 day ago</span>
            </div>
        </div>
    </div>
</div>
@endsection

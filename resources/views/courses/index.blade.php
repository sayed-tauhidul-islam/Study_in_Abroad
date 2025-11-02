@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<div class="container mx-auto p-4 bg-white">
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-900">Explore Academic Programs</h1>
    <p class="text-lg text-blue-700 text-center mb-8 max-w-3xl mx-auto">Discover diverse courses and programs tailored
        to your academic interests and career aspirations.</p>

    <!-- Search Box -->
    <div class="max-w-2xl mx-auto mb-12">
        <form method="GET" action="{{ route('courses.index') }}" class="relative">
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}"
                placeholder="Search courses by name, level, or description..." 
                class="w-full px-6 py-4 text-lg border-2 border-green-300 rounded-full focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-200 shadow-lg"
            >
            <button 
                type="submit" 
                class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-green-600 to-teal-600 text-white px-8 py-3 rounded-full font-semibold hover:from-green-700 hover:to-teal-700 transition-all duration-300 shadow-lg"
            >
                🔍 Search
            </button>
        </form>
        @if(request('search'))
            <div class="mt-4 text-center">
                <span class="text-gray-700">Showing results for: <strong class="text-green-600">{{ request('search') }}</strong></span>
                <a href="{{ route('courses.index') }}" class="ml-4 text-pink-600 hover:text-pink-700 font-semibold">Clear Search ✕</a>
            </div>
        @endif
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($courses as $course)
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-green-200 hover:border-pink-500 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="text-4xl mb-4 text-center">🎓</div>
                    <h2 class="text-xl font-semibold text-blue-900 mb-3 text-center">{{ $course->name }}</h2>
                    <p class="text-blue-700 text-sm mb-4">{{ $course->description }}</p>
                    <a href="{{ route('courses.show', $course) }}"
                        class="inline-block bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-800 transition-all duration-300 w-full text-center shadow-lg">
                        Learn More
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">{{ $courses->links() }}</div>
</div>
@endsection

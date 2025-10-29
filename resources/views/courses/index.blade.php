@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<div class="container mx-auto p-4 bg-white">
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-900">Explore Academic Programs</h1>
    <p class="text-lg text-blue-700 text-center mb-12 max-w-3xl mx-auto">Discover diverse courses and programs tailored
        to your academic interests and career aspirations.</p>

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

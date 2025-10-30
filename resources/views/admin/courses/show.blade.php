@extends('layouts.admin')

@section('content')
<div class="max-w-6xl mx-auto space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-white">{{ $course->name }}</h1>
            <p class="text-gray-400 mt-1">Course Details</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.courses.index') }}"
                class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                ← Back to Courses
            </a>
            <a href="{{ route('admin.courses.edit', $course->id) }}"
                class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                </svg>
                Edit Course
            </a>
        </div>
    </div>

    <!-- Main Course Information -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
        <!-- Course Header -->
        <div class="border-b border-gray-700 pb-6 mb-6">
            <h2 class="text-2xl font-bold text-white mb-4">{{ $course->name }}</h2>

            <!-- University Info -->
            <div class="flex items-center space-x-2 text-gray-300 mb-2">
                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                    </path>
                </svg>
                <a href="{{ route('admin.universities.show', $course->university->id) }}"
                    class="text-blue-400 hover:text-blue-300 font-medium">
                    {{ $course->university->name }}
                </a>
            </div>

            <!-- Country Info -->
            @if($course->university->country)
                <div class="flex items-center space-x-2 text-gray-300">
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <a href="{{ route('admin.countries.show', $course->university->country->id) }}"
                        class="text-green-400 hover:text-green-300 font-medium">
                        {{ $course->university->country->name }}
                    </a>
                </div>
            @endif
        </div>

        <!-- Course Details Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Course Level</h3>
                <p class="text-white text-lg">
                    @if($course->level)
                        <span class="bg-blue-600 px-3 py-1 rounded-full text-sm">{{ $course->level }}</span>
                    @else
                        <span class="text-gray-500">Not specified</span>
                    @endif
                </p>
            </div>

            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Duration</h3>
                <p class="text-white text-lg">{{ $course->duration ?? 'Not specified' }}
                </p>
            </div>

            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Language</h3>
                <p class="text-white text-lg">{{ $course->language ?? 'English' }}</p>
            </div>
        </div>

        <!-- Fees -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 p-4 bg-gray-900 rounded-lg">
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Tuition Fee</h3>
                <p class="text-white text-2xl font-bold">
                    @if($course->tuition_fee)
                        ${{ number_format($course->tuition_fee, 2) }}
                    @else
                        <span class="text-gray-500 text-lg">Contact university</span>
                    @endif
                </p>
            </div>

            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Application Fee</h3>
                <p class="text-white text-2xl font-bold">
                    @if($course->application_fee)
                        ${{ number_format($course->application_fee, 2) }}
                    @else
                        <span class="text-gray-500 text-lg">No fee</span>
                    @endif
                </p>
            </div>
        </div>

        <!-- Description -->
        @if($course->description)
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-white mb-3">Course Description</h3>
                <div class="text-gray-300 leading-relaxed whitespace-pre-line">{{ $course->description }}</div>
            </div>
        @endif

        <!-- Requirements -->
        @if($course->requirements)
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-white mb-3">Admission Requirements</h3>
                <div class="text-gray-300 leading-relaxed whitespace-pre-line bg-gray-900 p-4 rounded-lg">
                    {{ $course->requirements }}</div>
            </div>
        @endif

        <!-- Additional Information -->
        <div class="border-t border-gray-700 pt-6 mt-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <h3 class="text-sm font-medium text-gray-400 mb-2">Course ID</h3>
                    <p class="text-gray-300">#{{ $course->id }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-400 mb-2">Created At</h3>
                    <p class="text-gray-300">
                        {{ $course->created_at ? $course->created_at->format('F j, Y - g:i A') : 'N/A' }}
                    </p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-400 mb-2">Last Updated</h3>
                    <p class="text-gray-300">
                        {{ $course->updated_at ? $course->updated_at->format('F j, Y - g:i A') : 'N/A' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Danger Zone -->
    <div class="bg-red-900/20 border border-red-700 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-red-400 mb-2">Danger Zone</h3>
        <p class="text-gray-400 mb-4">Once you delete this course, there is no going back. Please be certain.</p>
        <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST"
            class="inline"
            onsubmit="return confirm('Are you sure you want to delete this course? This action cannot be undone!');">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg transition-colors">
                Delete Course
            </button>
        </form>
    </div>
</div>
@endsection

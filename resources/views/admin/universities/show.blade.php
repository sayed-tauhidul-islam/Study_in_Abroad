@extends('layouts.admin')
@section('content')
<div class="max-w-7xl mx-auto space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">{{ $university->name }}</h1>
            <p class="text-gray-400 mt-1">University Details & Courses</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.universities.edit', $university->id) }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                </svg>
                Edit University
            </a>
            <a href="{{ route('admin.universities.index') }}"
                class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                Back to List
            </a>
        </div>
    </div>

    <!-- University Information Card -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 p-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- University Name -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">University Name</h3>
                <p class="text-xl font-semibold text-white">{{ $university->name }}</p>
            </div>

            <!-- Location -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Location</h3>
                <p class="text-xl font-semibold text-white">
                    {{ $university->location ?? 'Not specified' }}</p>
            </div>

            <!-- Country -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Country</h3>
                <a href="{{ route('admin.countries.show', $university->country_id) }}"
                    class="text-xl font-semibold text-blue-400 hover:text-blue-300">
                    {{ $university->country->name ?? 'N/A' }}
                </a>
            </div>

            <!-- Student Count -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Student Count</h3>
                <p class="text-xl font-semibold text-white">
                    {{ number_format($university->student_count ?? 0) }}</p>
            </div>

            <!-- Total Courses -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Total Courses</h3>
                <p class="text-xl font-semibold text-green-400">{{ $university->courses->count() }}</p>
            </div>

            <!-- University ID -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">University ID</h3>
                <p class="text-xl font-semibold text-white">#{{ $university->id }}</p>
            </div>
        </div>

        <!-- Description -->
        @if($university->description)
            <div class="border-t border-gray-700 pt-6">
                <h3 class="text-sm font-medium text-gray-400 mb-3">Description</h3>
                <p class="text-gray-300 leading-relaxed">{{ $university->description }}</p>
            </div>
        @endif

        <!-- Additional Details -->
        @if($university->details)
            <div class="border-t border-gray-700 pt-6 mt-6">
                <h3 class="text-sm font-medium text-gray-400 mb-3">Additional Details</h3>
                <p class="text-gray-300 leading-relaxed">{{ $university->details }}</p>
            </div>
        @endif
    </div>

    <!-- Courses Section -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-white">
                Courses Offered ({{ $university->courses->count() }})
            </h2>
            <a href="{{ route('admin.courses.create') }}?university_id={{ $university->id }}"
                class="bg-green-700 hover:bg-green-800 text-white font-semibold py-2 px-4 rounded-lg transition-colors flex items-center text-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add Course
            </a>
        </div>

        @if($university->courses->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($university->courses as $course)
                    <div
                        class="bg-gray-900 rounded-lg border border-gray-700 hover:border-green-500 transition-all duration-300">
                        <!-- Course Header -->
                        <div class="p-5 border-b border-gray-700">
                            <h3 class="text-lg font-bold text-white mb-2">
                                {{ $course->name ?? $course->title }}</h3>
                            @if($course->description)
                                <p class="text-gray-400 text-sm line-clamp-2">
                                    {{ Str::limit($course->description, 100) }}</p>
                            @endif
                        </div>

                        <!-- Course Details -->
                        <div class="p-5 bg-gray-800">
                            <div class="space-y-3">
                                @if($course->duration)
                                    <div class="flex items-center text-gray-300">
                                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-sm">{{ $course->duration }}</span>
                                    </div>
                                @endif

                                @if($course->level)
                                    <div class="flex items-center text-gray-300">
                                        <svg class="w-4 h-4 mr-2 text-green-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                            </path>
                                        </svg>
                                        <span class="text-sm">{{ $course->level }}</span>
                                    </div>
                                @endif

                                @if($course->tuition_fee)
                                    <div class="flex items-center text-gray-300">
                                        <svg class="w-4 h-4 mr-2 text-yellow-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        <span class="text-sm">${{ number_format($course->tuition_fee) }}/year</span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 bg-gray-900 border-t border-gray-700 flex justify-between items-center">
                            <a href="{{ route('admin.courses.show', $course->id) }}"
                                class="text-blue-400 hover:text-blue-300 font-semibold text-sm flex items-center transition-colors">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                                View
                            </a>
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.courses.edit', $course->id) }}"
                                    class="text-green-400 hover:text-green-300 p-2 rounded-lg hover:bg-gray-800 transition-colors"
                                    title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </a>
                                <form
                                    action="{{ route('admin.courses.destroy', $course->id) }}"
                                    method="POST" class="inline"
                                    onsubmit="return confirm('Are you sure you want to delete this course?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-400 hover:text-red-300 p-2 rounded-lg hover:bg-gray-800 transition-colors"
                                        title="Delete">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                    </path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-400 mb-2">No courses found</h3>
                <p class="text-gray-500 mb-6">This university doesn't have any courses yet.</p>
                <a href="{{ route('admin.courses.create') }}?university_id={{ $university->id }}"
                    class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg transition-colors inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add First Course
                </a>
            </div>
        @endif
    </div>

    <!-- Delete Button -->
    <div class="bg-gray-800 rounded-lg border border-red-700 p-6">
        <div class="flex items-start justify-between">
            <div>
                <h3 class="text-lg font-semibold text-red-500 mb-2">Danger Zone</h3>
                <p class="text-gray-400">Once you delete this university, all related courses and data will be affected.
                    Please be certain.</p>
            </div>
            <form action="{{ route('admin.universities.destroy', $university->id) }}"
                method="POST"
                onsubmit="return confirm('Are you sure you want to delete this university? This action cannot be undone.')">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                        </path>
                    </svg>
                    Delete University
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

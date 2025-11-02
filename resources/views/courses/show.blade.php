@extends('layouts.app')

@section('title', $course->name)

@section('content')
<!-- Course Hero Section -->
<section class="relative bg-gradient-to-br from-green-600 via-teal-700 to-blue-800 text-white py-20">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full mb-4">
                <span class="text-lg font-semibold">{{ $course->level ?? 'Course' }}</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 drop-shadow-lg">{{ $course->name }}</h1>
            @if($course->university)
                <div class="flex items-center justify-center gap-2 text-xl mb-4">
                    <span>🏛️</span>
                    <a href="{{ route('universities.show', $course->university) }}" class="hover:underline">
                        {{ $course->university->name }}
                    </a>
                </div>
                @if($course->university->country)
                    <div class="flex items-center justify-center gap-2 text-lg">
                        <span>📍</span>
                        <a href="{{ route('countries.show', $course->university->country) }}" class="hover:underline">
                            {{ $course->university->country->name }}
                        </a>
                    </div>
                @endif
            @endif
        </div>
    </div>
</section>

<!-- Quick Stats -->
<section class="bg-white shadow-lg border-b-4 border-green-500">
    <div class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            @if($course->duration)
                <div class="p-4">
                    <div class="text-3xl font-bold text-green-600">{{ $course->duration }}</div>
                    <div class="text-sm text-gray-600 font-semibold">Duration</div>
                </div>
            @endif
            @if($course->level)
                <div class="p-4">
                    <div class="text-3xl font-bold text-blue-600">{{ $course->level }}</div>
                    <div class="text-sm text-gray-600 font-semibold">Degree Level</div>
                </div>
            @endif
            @if($course->tuition_fee)
                <div class="p-4">
                    <div class="text-3xl font-bold text-purple-600">${{ number_format($course->tuition_fee) }}</div>
                    <div class="text-sm text-gray-600 font-semibold">Tuition Fee/Year</div>
                </div>
            @endif
            <div class="p-4">
                <div class="text-3xl font-bold text-orange-600">{{ $universitiesOffering->count() }}</div>
                <div class="text-sm text-gray-600 font-semibold">Universities Offering</div>
            </div>
        </div>
    </div>
</section>

<div class="container mx-auto px-4 py-12">
    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Course Description -->
            @if($course->description)
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center gap-3">
                        <span class="text-4xl">📖</span> Course Overview
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed">{{ $course->description }}</p>
                </div>
            @endif

            <!-- Requirements -->
            @if($course->requirements)
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center gap-3">
                        <span class="text-4xl">📋</span> Entry Requirements
                    </h2>
                    <div class="prose max-w-none text-gray-700">
                        {!! nl2br(e($course->requirements)) !!}
                    </div>
                </div>
            @endif

            <!-- Universities Offering This Course -->
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl shadow-lg p-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <span class="text-4xl">🏛️</span> 
                    Universities Offering {{ $course->name }}
                    <span class="text-2xl text-gray-600">({{ $universitiesOffering->count() }})</span>
                </h2>

                @if($universitiesOffering->count() > 0)
                    <div class="space-y-4">
                        @foreach($universitiesOffering as $university)
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-blue-500">
                                <div class="flex items-start justify-between gap-4">
                                    <div class="flex items-start gap-4 flex-1">
                                        @if($university->image_url)
                                            <img src="{{ $university->image_url }}" alt="{{ $university->name }}" 
                                                 class="w-16 h-16 object-cover rounded-lg">
                                        @else
                                            <span class="text-4xl">🎓</span>
                                        @endif
                                        <div class="flex-1">
                                            <h3 class="text-xl font-bold text-gray-900 mb-2">
                                                <a href="{{ route('universities.show', $university) }}" 
                                                   class="hover:text-blue-600 transition-colors">
                                                    {{ $university->name }}
                                                </a>
                                            </h3>
                                            @if($university->country)
                                                <p class="text-gray-600 text-sm mb-2 flex items-center gap-2">
                                                    <span>📍</span>
                                                    <a href="{{ route('countries.show', $university->country) }}" 
                                                       class="hover:text-blue-600">
                                                        {{ $university->country->name }}
                                                    </a>
                                                </p>
                                            @endif
                                            <p class="text-gray-600 text-sm line-clamp-2">{{ $university->description }}</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('universities.show', $university) }}"
                                       class="flex-shrink-0 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-2 rounded-full font-semibold text-sm transition-all duration-300 shadow-lg hover:shadow-xl">
                                        View Details →
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="bg-white rounded-xl p-8 text-center">
                        <p class="text-gray-600">This course is currently offered at the main university.</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Quick Info Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-4">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Quick Information</h3>
                <div class="space-y-4">
                    @if($course->level)
                        <div class="flex items-start gap-3">
                            <span class="text-2xl">🎯</span>
                            <div>
                                <p class="font-bold text-gray-900">Level</p>
                                <p class="text-gray-600">{{ $course->level }}</p>
                            </div>
                        </div>
                    @endif
                    @if($course->duration)
                        <div class="flex items-start gap-3">
                            <span class="text-2xl">⏱️</span>
                            <div>
                                <p class="font-bold text-gray-900">Duration</p>
                                <p class="text-gray-600">{{ $course->duration }}</p>
                            </div>
                        </div>
                    @endif
                    @if($course->language)
                        <div class="flex items-start gap-3">
                            <span class="text-2xl">💬</span>
                            <div>
                                <p class="font-bold text-gray-900">Language</p>
                                <p class="text-gray-600">{{ $course->language }}</p>
                            </div>
                        </div>
                    @endif
                    @if($course->tuition_fee)
                        <div class="flex items-start gap-3">
                            <span class="text-2xl">💰</span>
                            <div>
                                <p class="font-bold text-gray-900">Tuition Fee</p>
                                <p class="text-gray-600">${{ number_format($course->tuition_fee) }}/year</p>
                            </div>
                        </div>
                    @endif
                    @if($course->application_fee)
                        <div class="flex items-start gap-3">
                            <span class="text-2xl">📝</span>
                            <div>
                                <p class="font-bold text-gray-900">Application Fee</p>
                                <p class="text-gray-600">${{ number_format($course->application_fee) }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">🏛️</span>
                        <div>
                            <p class="font-bold text-gray-900">Available At</p>
                            <p class="text-gray-600">{{ $universitiesOffering->count() }} 
                                {{ Str::plural('University', $universitiesOffering->count()) }}</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="mt-6 pt-6 border-t border-gray-200 space-y-3">
                    <a href="{{ route('applications.create') }}"
                        class="block bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-3 rounded-xl font-bold text-center hover:from-green-700 hover:to-teal-700 transition-all shadow-lg">
                        Apply Now
                    </a>
                    <a href="{{ route('chat.index') }}"
                        class="block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-xl font-bold text-center hover:from-blue-700 hover:to-purple-700 transition-all shadow-lg">
                        💬 Ask Questions
                    </a>
                </div>
            </div>

            <!-- Related Courses -->
            @php
                $relatedCourses = \App\Models\Course::where('level', $course->level)
                    ->where('id', '!=', $course->id)
                    ->inRandomOrder()
                    ->take(5)
                    ->get();
            @endphp
            @if($relatedCourses->count() > 0)
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Similar Courses</h3>
                    <div class="space-y-3">
                        @foreach($relatedCourses as $related)
                            <a href="{{ route('courses.show', $related) }}"
                               class="block p-3 rounded-lg bg-gray-50 hover:bg-blue-50 transition-colors">
                                <p class="font-semibold text-gray-900 text-sm hover:text-blue-600">
                                    {{ $related->name }}
                                </p>
                                @if($related->university)
                                    <p class="text-xs text-gray-600 mt-1">{{ $related->university->name }}</p>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

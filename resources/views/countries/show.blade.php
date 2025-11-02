@extends('layouts.app')

@section('title', 'Study in ' . $country->name)

@section('content')
<!-- Hero Section with Country Image -->
<div class="relative h-96 overflow-hidden">
    <img src="{{ $country->image_url ?? 'https://source.unsplash.com/1920x1080/?country,'.$country->name }}"
        alt="{{ $country->name }}" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
    <div class="absolute inset-0 flex items-center">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <div class="inline-block bg-white px-4 py-2 rounded-full mb-4">
                    <span class="text-2xl font-bold text-gray-800">{{ $country->country_code }}</span>
                </div>
                <h1 class="text-6xl font-extrabold text-white mb-4 drop-shadow-2xl">Study in {{ $country->name }}</h1>
                <p class="text-2xl text-white/95 font-medium drop-shadow-lg">{{ $country->description }}</p>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <!-- Quick Stats -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
        <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-6 text-white shadow-xl">
            <div class="text-4xl mb-2">🎓</div>
            <p class="text-3xl font-black mb-1">{{ number_format($country->student_count ?? 0) }}</p>
            <p class="text-blue-100 font-medium">International Students</p>
        </div>
        <div class="bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl p-6 text-white shadow-xl">
            <div class="text-4xl mb-2">🏛️</div>
            <p class="text-3xl font-black mb-1">
                {{ $country->universities_count ?? $country->universities->count() }}+</p>
            <p class="text-purple-100 font-medium">Universities</p>
        </div>
        @if($country->capital)
            <div class="bg-gradient-to-br from-pink-500 to-pink-700 rounded-2xl p-6 text-white shadow-xl">
                <div class="text-4xl mb-2">📍</div>
                <p class="text-2xl font-black mb-1">{{ $country->capital }}</p>
                <p class="text-pink-100 font-medium">Capital City</p>
            </div>
        @endif
        @if($country->language)
            <div class="bg-gradient-to-br from-orange-500 to-orange-700 rounded-2xl p-6 text-white shadow-xl">
                <div class="text-4xl mb-2">💬</div>
                <p class="text-2xl font-black mb-1">
                    {{ Str::before($country->language, ',') }}</p>
                <p class="text-orange-100 font-medium">Primary Language</p>
            </div>
        @endif
    </div>

    <!-- Detailed Information -->
    <div class="grid lg:grid-cols-3 gap-8 mb-12">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-8">
            <!-- About -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h2 class="text-3xl font-black text-gray-900 mb-6 flex items-center gap-3">
                    <span class="text-4xl">📖</span> About {{ $country->name }}
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-6">{{ $country->description }}</p>
                @if($country->details)
                    <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl p-6">
                        <p class="text-gray-800 leading-relaxed">{{ $country->details }}</p>
                    </div>
                @endif
            </div>

            <!-- Costs -->
            @if($country->tuition_range_min && $country->tuition_range_max)
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h2 class="text-3xl font-black text-gray-900 mb-6 flex items-center gap-3">
                        <span class="text-4xl">💰</span> Cost of Education
                    </h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border-2 border-blue-200">
                            <p class="text-blue-600 font-bold text-sm mb-2">ANNUAL TUITION FEES</p>
                            <p class="text-3xl font-black text-blue-900 mb-1">
                                ${{ number_format($country->tuition_range_min) }} -
                                ${{ number_format($country->tuition_range_max) }}</p>
                            <p class="text-blue-700 text-sm">Per academic year</p>
                        </div>
                        @if($country->living_cost_min && $country->living_cost_max)
                            <div
                                class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border-2 border-green-200">
                                <p class="text-green-600 font-bold text-sm mb-2">MONTHLY LIVING COSTS</p>
                                <p class="text-3xl font-black text-green-900 mb-1">
                                    ${{ number_format($country->living_cost_min) }} -
                                    ${{ number_format($country->living_cost_max) }}</p>
                                <p class="text-green-700 text-sm">Including accommodation & expenses</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            <!-- Visa Information -->
            @if($country->visa_info)
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h2 class="text-3xl font-black text-gray-900 mb-6 flex items-center gap-3">
                        <span class="text-4xl">🛂</span> Visa Information
                    </h2>
                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-6">
                        <p class="text-gray-800 leading-relaxed whitespace-pre-line">{{ $country->visa_info }}</p>
                    </div>
                </div>
            @endif

            <!-- Work Opportunities -->
            @if($country->work_opportunities)
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h2 class="text-3xl font-black text-gray-900 mb-6 flex items-center gap-3">
                        <span class="text-4xl">💼</span> Work Opportunities
                    </h2>
                    <div class="bg-gradient-to-r from-green-50 to-teal-50 rounded-xl p-6">
                        <p class="text-gray-800 leading-relaxed whitespace-pre-line">
                            {{ $country->work_opportunities }}</p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Quick Info -->
            <div class="bg-white rounded-2xl shadow-xl p-6 sticky top-4">
                <h3 class="text-xl font-black text-gray-900 mb-4">Quick Facts</h3>
                <div class="space-y-4">
                    @if($country->capital)
                        <div class="flex items-start gap-3">
                            <span class="text-2xl">🏙️</span>
                            <div>
                                <p class="font-bold text-gray-900">Capital</p>
                                <p class="text-gray-600">{{ $country->capital }}</p>
                            </div>
                        </div>
                    @endif
                    @if($country->language)
                        <div class="flex items-start gap-3">
                            <span class="text-2xl">💬</span>
                            <div>
                                <p class="font-bold text-gray-900">Language(s)</p>
                                <p class="text-gray-600">{{ $country->language }}</p>
                            </div>
                        </div>
                    @endif
                    @if($country->currency)
                        <div class="flex items-start gap-3">
                            <span class="text-2xl">💵</span>
                            <div>
                                <p class="font-bold text-gray-900">Currency</p>
                                <p class="text-gray-600">{{ $country->currency }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">🎓</span>
                        <div>
                            <p class="font-bold text-gray-900">Students</p>
                            <p class="text-gray-600">{{ number_format($country->student_count ?? 0) }}
                                international</p>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <a href="{{ route('chat.index') }}"
                        class="block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-xl font-bold text-center hover:from-blue-700 hover:to-purple-700 transition-all shadow-lg">
                        💬 Ask About {{ $country->name }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Universities Section -->
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-4xl font-black text-gray-900 mb-8 flex items-center gap-3">
            <span class="text-5xl">🏛️</span> Universities in {{ $country->name }}
        </h2>
        @if($country->universities && $country->universities->count() > 0)
            <div class="space-y-8">
                @foreach($country->universities as $university)
                    <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl border-2 border-gray-200 overflow-hidden hover:shadow-2xl transition-all duration-300">
                        <!-- University Header -->
                        <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-blue-50 to-purple-50">
                            <div class="flex items-start justify-between gap-4">
                                <div class="flex items-start gap-4 flex-1">
                                    @if($university->image_url)
                                        <img src="{{ $university->image_url }}" alt="{{ $university->name }}" 
                                             class="w-20 h-20 object-cover rounded-lg shadow-md">
                                    @else
                                        <span class="text-5xl">🎓</span>
                                    @endif
                                    <div class="flex-1">
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $university->name }}</h3>
                                        <p class="text-gray-600 text-sm line-clamp-2 mb-2">{{ $university->description }}</p>
                                        @if($university->ranking)
                                            <span class="inline-block bg-yellow-400 text-gray-900 px-3 py-1 rounded-full text-xs font-bold">
                                                🏆 Ranking: #{{ $university->ranking }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <!-- Info Button -->
                                    <button onclick="toggleUniversityInfo({{ $university->id }})" 
                                            class="flex-shrink-0 w-10 h-10 bg-blue-600 hover:bg-blue-700 text-white rounded-full flex items-center justify-center transition-all duration-300 shadow-lg hover:shadow-xl"
                                            title="View University Details">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                    <!-- View Details Link -->
                                    <a href="{{ route('universities.show', $university) }}"
                                       class="flex-shrink-0 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-2 rounded-full font-semibold text-sm transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2">
                                        View Full Details →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- University Details Panel (Hidden by default) -->
                        <div id="university-info-{{ $university->id }}" class="hidden bg-white p-6 border-b border-gray-200">
                            <h4 class="text-lg font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <span class="text-2xl">ℹ️</span> University Details
                            </h4>
                            <div class="grid md:grid-cols-2 gap-4 text-sm">
                                @if($university->website)
                                    <div class="flex items-center gap-2">
                                        <span class="text-blue-600">🌐</span>
                                        <div>
                                            <span class="font-semibold text-gray-700">Website:</span>
                                            <a href="{{ $university->website }}" target="_blank" class="text-blue-600 hover:underline ml-1">
                                                Visit Website
                                            </a>
                                        </div>
                                    </div>
                                @endif
                                @if($university->location)
                                    <div class="flex items-center gap-2">
                                        <span class="text-green-600">📍</span>
                                        <div>
                                            <span class="font-semibold text-gray-700">Location:</span>
                                            <span class="text-gray-600 ml-1">{{ $university->location }}</span>
                                        </div>
                                    </div>
                                @endif
                                <div class="flex items-center gap-2">
                                    <span class="text-purple-600">📚</span>
                                    <div>
                                        <span class="font-semibold text-gray-700">Total Courses:</span>
                                        <span class="text-gray-600 ml-1">{{ $university->courses->count() }} programs</span>
                                    </div>
                                </div>
                                @if($university->environment_quality)
                                    <div class="flex items-center gap-2">
                                        <span class="text-orange-600">⭐</span>
                                        <div>
                                            <span class="font-semibold text-gray-700">Campus Quality:</span>
                                            <span class="text-gray-600 ml-1">{{ $university->environment_quality }}/10</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Available Courses & Degrees -->
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <span class="text-2xl">📚</span> Available Courses & Degrees
                            </h4>
                            
                            @php
                                $courses = $university->courses;
                                $bachelors = $courses->where('level', 'Bachelor')->take(5);
                                $masters = $courses->where('level', 'Master')->take(5);
                                $phd = $courses->where('level', 'PhD')->take(5);
                                $totalCourses = $courses->count();
                            @endphp

                            @if($totalCourses > 0)
                                <div class="grid md:grid-cols-3 gap-4 mb-4">
                                    <!-- Bachelor's Programs -->
                                    @if($bachelors->count() > 0)
                                        <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                                            <h5 class="text-lg font-bold text-blue-700 mb-3 flex items-center gap-2">
                                                🎓 Bachelor's ({{ $courses->where('level', 'Bachelor')->count() }})
                                            </h5>
                                            <ul class="space-y-2">
                                                @foreach($bachelors as $course)
                                                    <li class="text-sm text-gray-700 flex items-start gap-2">
                                                        <span class="text-green-500 flex-shrink-0 mt-0.5">✓</span>
                                                        <div class="flex-1">
                                                            <a href="{{ route('courses.show', $course) }}" 
                                                               class="font-semibold hover:text-blue-600 hover:underline">
                                                                {{ $course->name }}
                                                            </a>
                                                            @if($course->duration)
                                                                <p class="text-xs text-gray-500">{{ $course->duration }}</p>
                                                            @endif
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            @if($courses->where('level', 'Bachelor')->count() > 5)
                                                <p class="text-xs text-blue-600 mt-2">+ {{ $courses->where('level', 'Bachelor')->count() - 5 }} more programs</p>
                                            @endif
                                        </div>
                                    @endif

                                    <!-- Master's Programs -->
                                    @if($masters->count() > 0)
                                        <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                                            <h5 class="text-lg font-bold text-purple-700 mb-3 flex items-center gap-2">
                                                🎯 Master's ({{ $courses->where('level', 'Master')->count() }})
                                            </h5>
                                            <ul class="space-y-2">
                                                @foreach($masters as $course)
                                                    <li class="text-sm text-gray-700 flex items-start gap-2">
                                                        <span class="text-green-500 flex-shrink-0 mt-0.5">✓</span>
                                                        <div class="flex-1">
                                                            <a href="{{ route('courses.show', $course) }}" 
                                                               class="font-semibold hover:text-purple-600 hover:underline">
                                                                {{ $course->name }}
                                                            </a>
                                                            @if($course->duration)
                                                                <p class="text-xs text-gray-500">{{ $course->duration }}</p>
                                                            @endif
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            @if($courses->where('level', 'Master')->count() > 5)
                                                <p class="text-xs text-purple-600 mt-2">+ {{ $courses->where('level', 'Master')->count() - 5 }} more programs</p>
                                            @endif
                                        </div>
                                    @endif

                                    <!-- PhD Programs -->
                                    @if($phd->count() > 0)
                                        <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                                            <h5 class="text-lg font-bold text-green-700 mb-3 flex items-center gap-2">
                                                🔬 PhD ({{ $courses->where('level', 'PhD')->count() }})
                                            </h5>
                                            <ul class="space-y-2">
                                                @foreach($phd as $course)
                                                    <li class="text-sm text-gray-700 flex items-start gap-2">
                                                        <span class="text-green-500 flex-shrink-0 mt-0.5">✓</span>
                                                        <div class="flex-1">
                                                            <a href="{{ route('courses.show', $course) }}" 
                                                               class="font-semibold hover:text-green-600 hover:underline">
                                                                {{ $course->name }}
                                                            </a>
                                                            @if($course->duration)
                                                                <p class="text-xs text-gray-500">{{ $course->duration }}</p>
                                                            @endif
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            @if($courses->where('level', 'PhD')->count() > 5)
                                                <p class="text-xs text-green-600 mt-2">+ {{ $courses->where('level', 'PhD')->count() - 5 }} more programs</p>
                                            @endif
                                        </div>
                                    @endif
                                </div>

                                <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-lg p-4 text-center">
                                    <p class="text-sm text-gray-700 mb-2">
                                        <span class="font-bold text-gray-900">Total Programs: {{ $totalCourses }}</span>
                                    </p>
                                    <a href="{{ route('universities.show', $university) }}" 
                                       class="text-blue-600 hover:text-blue-800 font-semibold text-sm hover:underline">
                                        View all {{ $totalCourses }} courses & full university details →
                                    </a>
                                </div>
                            @else
                                <div class="bg-gray-50 rounded-lg p-6 text-center">
                                    <p class="text-gray-600">Course information will be updated soon.</p>
                                    <a href="{{ route('universities.show', $university) }}" 
                                       class="text-blue-600 hover:underline text-sm mt-2 inline-block">
                                        View university details →
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-500 text-lg">Universities will be added soon for {{ $country->name }}.</p>
            </div>
        @endif
    </div>
</div>

<script>
function toggleUniversityInfo(universityId) {
    const infoPanel = document.getElementById('university-info-' + universityId);
    if (infoPanel) {
        infoPanel.classList.toggle('hidden');
    }
}
</script>
@endsection

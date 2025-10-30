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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($country->universities as $university)
                    <a href="{{ route('universities.show', $university) }}"
                        class="group bg-gradient-to-br from-gray-50 to-white rounded-xl p-6 border-2 border-gray-200 hover:border-blue-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-start gap-3 mb-3">
                            <span class="text-3xl">🎓</span>
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                                {{ $university->name }}</h3>
                        </div>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4">{{ $university->description }}</p>
                        <span class="text-blue-600 font-semibold text-sm group-hover:underline">Learn More →</span>
                    </a>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-500 text-lg">Universities will be added soon for {{ $country->name }}.</p>
            </div>
        @endif
    </div>
</div>
@endsection

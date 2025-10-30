@extends('layouts.app')

@section('title', 'Study Abroad Countries')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 py-20">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 drop-shadow-lg">🌍 Explore Study Destinations</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto font-medium">Discover amazing countries offering
                world-class education, vibrant cultures, and incredible career opportunities for international students
            </p>
            <div class="flex flex-wrap justify-center gap-4 text-lg">
                <div class="bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                    <span class="font-bold">{{ $countries->total() }}</span> Countries
                </div>
                <div class="bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                    <span class="font-bold">500+</span> Universities
                </div>
                <div class="bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                    <span class="font-bold">1000+</span> Programs
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <!-- Countries Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        @foreach($countries as $country)
            <div
                class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                <!-- Country Image -->
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ $country->image_url ?? 'https://source.unsplash.com/800x600/?country,'.$country->name }}"
                        alt="{{ $country->name }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

                    <!-- Country Code Badge -->
                    <div
                        class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-sm font-bold text-gray-800 shadow-lg">
                        {{ $country->country_code }}
                    </div>

                    <!-- Country Name -->
                    <div class="absolute bottom-4 left-4 right-4">
                        <h2 class="text-3xl font-black text-white drop-shadow-lg">{{ $country->name }}</h2>
                        @if($country->capital)
                            <p class="text-white/90 font-medium mt-1">📍 Capital: {{ $country->capital }}</p>
                        @endif
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <!-- Quick Info -->
                    <div class="grid grid-cols-2 gap-3 mb-4">
                        @if($country->language)
                            <div class="bg-blue-50 rounded-lg p-3">
                                <p class="text-xs text-blue-600 font-semibold">Language</p>
                                <p class="text-sm text-blue-900 font-bold">
                                    {{ Str::limit($country->language, 20) }}</p>
                            </div>
                        @endif
                        @if($country->currency)
                            <div class="bg-green-50 rounded-lg p-3">
                                <p class="text-xs text-green-600 font-semibold">Currency</p>
                                <p class="text-sm text-green-900 font-bold">
                                    {{ Str::limit($country->currency, 20) }}</p>
                            </div>
                        @endif
                    </div>

                    <!-- Description -->
                    <p class="text-gray-700 text-sm mb-4 line-clamp-3">{{ $country->description }}</p>

                    <!-- Stats -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <div
                            class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                            <span>🎓</span> {{ number_format($country->student_count ?? 0) }} Students
                        </div>
                        @if($country->universities_count > 0)
                            <div
                                class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                                <span>🏛️</span> {{ $country->universities_count }}+ Universities
                            </div>
                        @endif
                    </div>

                    <!-- Tuition Range -->
                    @if($country->tuition_range_min && $country->tuition_range_max)
                        <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-lg p-3 mb-4">
                            <p class="text-xs text-gray-600 font-semibold mb-1">💰 Tuition Range (Annual)</p>
                            <p
                                class="text-lg font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                                ${{ number_format($country->tuition_range_min) }} -
                                ${{ number_format($country->tuition_range_max) }}
                            </p>
                        </div>
                    @endif

                    <!-- CTA Button -->
                    <a href="{{ route('countries.show', $country) }}"
                        class="block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-xl font-bold hover:from-blue-700 hover:to-purple-700 transition-all duration-300 text-center shadow-lg hover:shadow-xl">
                        Explore {{ $country->name }} →
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-12 flex justify-center">
        {{ $countries->links() }}
    </div>

    <!-- Additional Information Section -->
    <section class="mt-16 bg-white rounded-2xl p-8 border-2 border-blue-200">
        <h2 class="text-2xl font-bold text-center text-blue-800 mb-6">Why Choose Study Abroad?</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="text-4xl mb-3">🎓</div>
                <h3 class="font-semibold text-blue-900 mb-2">Quality Education</h3>
                <p class="text-sm text-blue-700">Access world-class universities and programs</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-3">🌍</div>
                <h3 class="font-semibold text-blue-900 mb-2">Cultural Experience</h3>
                <p class="text-sm text-blue-700">Immerse yourself in diverse cultures and perspectives</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-3">💼</div>
                <h3 class="font-semibold text-blue-900 mb-2">Career Opportunities</h3>
                <p class="text-sm text-blue-700">Enhance your resume with international experience</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-3">🤝</div>
                <h3 class="font-semibold text-blue-900 mb-2">Global Network</h3>
                <p class="text-sm text-blue-700">Build connections with students from around the world</p>
            </div>
        </div>
    </section>
</div>
@endsection

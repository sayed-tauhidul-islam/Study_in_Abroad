@extends('layouts.app')

@section('title', 'Countries')

@section('content')
<div class="container mx-auto p-4 bg-white">
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-900">Explore Countries for Study Abroad</h1>
    <p class="text-lg text-blue-700 text-center mb-12 max-w-3xl mx-auto">Discover amazing study destinations around the
        world. Each country offers unique educational opportunities, cultural experiences, and pathways to your future
        career.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($countries as $country)
            <div
                class="bg-white rounded-xl shadow-xl overflow-hidden border-2 border-blue-200 hover:border-pink-500 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ $country->image_url ?? 'https://source.unsplash.com/400x200/?country,'.$country->name }}"
                        alt="{{ $country->name }}" class="w-full h-48 object-cover">
                    <div
                        class="absolute top-4 right-4 bg-yellow-400 text-pink-900 px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                        {{ $country->country_code }}
                    </div>
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-bold text-blue-900 mb-3">{{ $country->name }}</h2>
                    <p class="text-blue-700 text-sm mb-4 line-clamp-3">{{ $country->description }}</p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-blue-600">Students:
                            {{ number_format($country->student_count ?? 0) }}</span>
                        @if($country->details)
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Details Available</span>
                        @endif
                    </div>
                    <a href="{{ route('countries.show', $country) }}"
                        class="inline-block bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-800 transition-all duration-300 w-full text-center shadow-lg">Explore
                        Universities</a>
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

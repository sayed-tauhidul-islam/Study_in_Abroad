@extends('layouts.app')

@section('title', 'Countries')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-700">Explore Countries for Study Abroad</h1>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-3xl mx-auto">Discover amazing study destinations around the
        world. Each country offers unique educational opportunities, cultural experiences, and pathways to your future
        career.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($countries as $country)
            <div
                class="bg-white rounded-xl shadow-xl overflow-hidden border border-blue-200 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ $country->image_url ?? 'https://source.unsplash.com/400x200/?country,'.$country->name }}"
                        alt="{{ $country->name }}" class="w-full h-48 object-cover">
                    <div
                        class="absolute top-4 right-4 bg-yellow-400 text-blue-900 px-3 py-1 rounded-full text-sm font-semibold">
                        {{ $country->country_code }}
                    </div>
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-bold text-blue-800 mb-3">{{ $country->name }}</h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $country->description }}</p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-gray-500">Students:
                            {{ number_format($country->student_count ?? 0) }}</span>
                        @if($country->details)
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Details Available</span>
                        @endif
                    </div>
                    <a href="#"
                        class="inline-block bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-2 rounded-lg font-semibold hover:from-blue-600 hover:to-purple-700 transition-all duration-300 w-full text-center">Explore
                        Universities</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-12 flex justify-center">
        {{ $countries->links() }}
    </div>

    <!-- Additional Information Section -->
    <section class="mt-16 bg-gradient-to-r from-blue-50 to-indigo-100 rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-blue-800 mb-6">Why Choose Study Abroad?</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="text-4xl mb-3">🎓</div>
                <h3 class="font-semibold text-blue-700 mb-2">Quality Education</h3>
                <p class="text-sm text-gray-600">Access world-class universities and programs</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-3">🌍</div>
                <h3 class="font-semibold text-blue-700 mb-2">Cultural Experience</h3>
                <p class="text-sm text-gray-600">Immerse yourself in diverse cultures and perspectives</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-3">💼</div>
                <h3 class="font-semibold text-blue-700 mb-2">Career Opportunities</h3>
                <p class="text-sm text-gray-600">Enhance your resume with international experience</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-3">🤝</div>
                <h3 class="font-semibold text-blue-700 mb-2">Global Network</h3>
                <p class="text-sm text-gray-600">Build connections with students from around the world</p>
            </div>
        </div>
    </section>
</div>
@endsection

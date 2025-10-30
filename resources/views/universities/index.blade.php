@extends('layouts.app')

@section('title', 'Universities')

@section('content')
<div class="container mx-auto p-4 bg-white">
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-900">Top Universities Worldwide</h1>
    <p class="text-lg text-blue-700 text-center mb-12 max-w-3xl mx-auto">Browse through our curated list of world-class
        universities offering exceptional programs and opportunities for international students.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($universities as $university)
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-blue-200 hover:border-pink-500 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">

                <!-- University Image -->
                <div class="relative h-48 overflow-hidden bg-gradient-to-br from-blue-500 to-purple-600">
                    @if($university->image_url)
                        <img src="{{ $university->image_url }}" alt="{{ $university->name }}"
                            class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-white text-6xl">
                            🎓
                        </div>
                    @endif

                    <!-- Logo Overlay -->
                    @if($university->logo_url)
                        <div class="absolute top-3 right-3 w-16 h-16 bg-white rounded-full shadow-lg p-2">
                            <img src="{{ $university->logo_url }}" alt="{{ $university->name }} Logo"
                                class="w-full h-full object-contain">
                        </div>
                    @endif

                    <!-- Ranking Badge -->
                    @if($university->ranking)
                        <div
                            class="absolute top-3 left-3 bg-yellow-400 text-gray-900 px-3 py-1 rounded-full font-bold text-sm shadow-lg">
                            🏆 #{{ $university->ranking }}
                        </div>
                    @endif
                </div>

                <div class="p-6">
                    <h2 class="text-xl font-semibold text-blue-900 mb-3 truncate" title="{{ $university->name }}">
                        {{ $university->name }}
                    </h2>
                    <p class="text-blue-700 text-sm mb-3 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{ $university->country->name ?? 'N/A' }}
                    </p>

                    @if($university->num_courses)
                        <p class="text-gray-600 text-sm mb-3">
                            📚 {{ $university->num_courses }} Courses Available
                        </p>
                    @endif

                    <a href="{{ route('universities.show', $university) }}"
                        class="inline-block bg-gradient-to-r from-green-600 to-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:from-green-700 hover:to-blue-700 transition-all duration-300 w-full text-center shadow-lg">
                        View Details →
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">{{ $universities->links() }}</div>
</div>
@endsection

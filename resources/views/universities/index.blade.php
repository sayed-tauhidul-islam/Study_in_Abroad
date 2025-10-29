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
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-blue-900 mb-3">{{ $university->name }}</h2>
                    <p class="text-blue-700 text-sm mb-3">📍 Country:
                        {{ $university->country->name ?? 'N/A' }}</p>
                    <div class="flex justify-between items-center mb-4">
                        <span
                            class="inline-block bg-yellow-100 text-pink-900 text-sm px-3 py-1 rounded-lg font-semibold">
                            🏆 Rank: {{ $university->ranking }}
                        </span>
                    </div>
                    <a href="{{ route('universities.show', $university) }}"
                        class="inline-block bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-800 transition-all duration-300 w-full text-center shadow-lg">
                        View Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">{{ $universities->links() }}</div>
</div>
@endsection

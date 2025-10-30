@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
<!-- Header Section -->
<div class="bg-gradient-to-r from-purple-600 to-blue-600 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">🔍 Search Results</h1>
        <p class="text-xl">Search results for: <span class="font-bold text-yellow-300">"{{ $search }}"</span></p>
    </div>
</div>

<!-- Results Section -->
<div class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Search Again -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <form action="{{ route('best-choice.search') }}" method="GET" class="flex gap-4">
                    <input type="text" name="search" value="{{ $search }}" required
                        class="flex-1 px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                        placeholder="Search by name or email...">
                    <button type="submit"
                        class="px-8 py-3 bg-purple-600 text-white rounded-lg font-semibold hover:bg-purple-700 transition">
                        Search Again
                    </button>
                </form>
            </div>

            @if($preferences->count() > 0)
                <!-- Results List -->
                <div class="space-y-6">
                    @foreach($preferences as $preference)
                        <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition overflow-hidden">
                            <div class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-2xl font-bold mb-1">{{ $preference->name }}</h3>
                                        <p class="text-sm opacity-90">{{ $preference->email }}</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm opacity-75">Submitted</p>
                                        <p class="font-semibold">
                                            {{ $preference->created_at->format('M d, Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="grid md:grid-cols-2 gap-4 mb-6">
                                    <div>
                                        <p class="text-sm text-gray-600 mb-1">🎓 Education Level</p>
                                        <p class="font-semibold text-gray-800">
                                            {{ $preference->current_education_level }}</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-600 mb-1">📚 Field of Interest</p>
                                        <p class="font-semibold text-gray-800">{{ $preference->field_of_interest }}
                                        </p>
                                    </div>
                                    @if($preference->budget_max)
                                        <div>
                                            <p class="text-sm text-gray-600 mb-1">💰 Budget</p>
                                            <p class="font-semibold text-gray-800">
                                                ${{ number_format($preference->budget_min) }} -
                                                ${{ number_format($preference->budget_max) }}</p>
                                        </div>
                                    @endif
                                    @if($preference->study_mode)
                                        <div>
                                            <p class="text-sm text-gray-600 mb-1">📖 Study Mode</p>
                                            <p class="font-semibold text-gray-800">{{ $preference->study_mode }}</p>
                                        </div>
                                    @endif
                                </div>

                                @if($preference->recommendation)
                                    <div class="border-t pt-4">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-lg font-bold text-green-600 mb-1">✅ Recommendations
                                                    Available</p>
                                                <p class="text-sm text-gray-600">
                                                    {{ count($preference->recommendation->recommended_countries) }}
                                                    Countries •
                                                    {{ count($preference->recommendation->recommended_universities) }}
                                                    Universities •
                                                    {{ $preference->recommendation->match_score }}% Match
                                                </p>
                                            </div>
                                            <a href="{{ route('best-choice.result', $preference->id) }}"
                                                class="px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition shadow-lg">
                                                View Results →
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="border-t pt-4">
                                        <p class="text-yellow-600 font-semibold">⚠️ Recommendations are being
                                            generated...</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    {{ $preferences->links() }}
                </div>
            @else
                <!-- No Results -->
                <div class="bg-white rounded-xl shadow-lg p-12 text-center">
                    <svg class="w-24 h-24 mx-auto text-gray-400 mb-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">No Results Found</h3>
                    <p class="text-gray-600 mb-6">We couldn't find any recommendations matching "{{ $search }}"</p>
                    <p class="text-sm text-gray-500 mb-8">Make sure you're using the exact name or email you submitted
                        with.</p>

                    <div class="flex justify-center gap-4">
                        <a href="{{ route('best-choice.index') }}"
                            class="px-8 py-3 bg-purple-600 text-white rounded-lg font-semibold hover:bg-purple-700 transition">
                            Create New Recommendation
                        </a>
                        <button
                            onclick="document.querySelector('input[name=search]').value=''; document.querySelector('input[name=search]').focus()"
                            class="px-8 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition">
                            Clear Search
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

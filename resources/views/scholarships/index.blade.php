@extends('layouts.app')

@section('title', 'Scholarships')

@section('content')
<div class="container mx-auto p-4 bg-white">
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-900">Scholarship Opportunities</h1>
    <p class="text-lg text-blue-700 text-center mb-8 max-w-3xl mx-auto">Explore fully-funded and partial scholarships
        to make your study abroad dreams more affordable.</p>

    <!-- Search Box -->
    <div class="max-w-2xl mx-auto mb-12">
        <form method="GET" action="{{ route('scholarships.index') }}" class="relative">
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}"
                placeholder="Search scholarships by name, amount, or eligibility..." 
                class="w-full px-6 py-4 text-lg border-2 border-yellow-300 rounded-full focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 shadow-lg"
            >
            <button 
                type="submit" 
                class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-yellow-600 to-amber-600 text-white px-8 py-3 rounded-full font-semibold hover:from-yellow-700 hover:to-amber-700 transition-all duration-300 shadow-lg"
            >
                🔍 Search
            </button>
        </form>
        @if(request('search'))
            <div class="mt-4 text-center">
                <span class="text-gray-700">Showing results for: <strong class="text-yellow-600">{{ request('search') }}</strong></span>
                <a href="{{ route('scholarships.index') }}" class="ml-4 text-pink-600 hover:text-pink-700 font-semibold">Clear Search ✕</a>
            </div>
        @endif
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($scholarships as $scholarship)
            <div
                class="bg-white rounded-xl shadow-lg overflow-hidden border-2 border-yellow-200 hover:border-pink-500 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 p-4 text-center">
                    <div class="text-4xl mb-2">🎓</div>
                    <div class="text-pink-900 font-bold text-2xl">{{ $scholarship->amount }}</div>
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-blue-900 mb-3 text-center">{{ $scholarship->name }}</h2>
                    <p class="text-blue-700 text-sm mb-4">{{ Str::limit($scholarship->description, 120) }}</p>
                    <a href="{{ route('scholarships.show', $scholarship) }}"
                        class="inline-block bg-green-700 text-white px-4 py-2 rounded-lg font-bold hover:bg-green-800 transition-all duration-300 w-full text-center shadow-lg">
                        View Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">{{ $scholarships->links() }}</div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Degrees | Study Abroad')

@section('content')
<div class="container mx-auto px-4 py-8 bg-white">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Academic Degrees</h1>
        <p class="text-xl text-blue-700 max-w-3xl mx-auto">
            Explore various academic degrees available for international students. Choose the right degree level for
            your study abroad journey.
        </p>
    </div>

    <!-- Search Box -->
    <div class="max-w-2xl mx-auto mb-12">
        <form method="GET" action="{{ route('degrees.index') }}" class="relative">
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}"
                placeholder="Search degrees by name, level, or duration..." 
                class="w-full px-6 py-4 text-lg border-2 border-yellow-300 rounded-full focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 shadow-lg"
            >
            <button 
                type="submit" 
                class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-yellow-600 to-orange-600 text-white px-8 py-3 rounded-full font-semibold hover:from-yellow-700 hover:to-orange-700 transition-all duration-300 shadow-lg"
            >
                🔍 Search
            </button>
        </form>
        @if(request('search'))
            <div class="mt-4 text-center">
                <span class="text-gray-700">Showing results for: <strong class="text-yellow-600">{{ request('search') }}</strong></span>
                <a href="{{ route('degrees.index') }}" class="ml-4 text-pink-600 hover:text-pink-700 font-semibold">Clear Search ✕</a>
            </div>
        @endif
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($degrees as $degree)
            <div
                class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-green-200 hover:border-pink-500 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-blue-900">{{ $degree->name }}</h3>
                        <span class="px-3 py-1 bg-yellow-100 text-pink-900 text-sm font-semibold rounded-full">
                            {{ $degree->level }}
                        </span>
                    </div>

                    <p class="text-blue-700 mb-4">{{ $degree->description }}</p>

                    <div class="space-y-3">
                        <div class="text-sm text-blue-600">
                            <span class="font-medium">⏱️ Duration:</span> {{ $degree->duration_years }}
                            year{{ $degree->duration_years > 1 ? 's' : '' }}
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="{{ route('degrees.show', $degree->id) }}"
                                class="flex-1 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-4 py-2 rounded-lg transition-all duration-300 font-semibold shadow-lg text-center">
                                View Details
                            </a>
                            <a href="{{ url('/applications/create') }}"
                                class="flex-1 bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded-lg transition-all duration-300 font-semibold shadow-lg text-center">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <div class="text-blue-700">
                    <svg class="mx-auto h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-blue-900">No degrees found</h3>
                    <p class="mt-1 text-sm text-blue-700">
                        @if(isset($query) && $query)
                            No degrees match your search for "{{ $query }}".
                        @else
                            Check back later for more degree options.
                        @endif
                    </p>
                </div>
            </div>
        @endforelse
    </div>

    @if($degrees->hasPages())
        <div class="mt-12">
            {{ $degrees->links() }}
        </div>
    @endif
</div>
@endsection

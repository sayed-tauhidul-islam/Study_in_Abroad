@extends('layouts.app')

@section('title', 'Degrees | Study Abroad')

@section('content')
<div class="container mx-auto px-4 py-8 bg-white">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Academic Degrees</h1>
        <p class="text-xl text-blue-700 max-w-3xl mx-auto">
            Explore various academic degrees available for international students. Choose the right degree level for
            your study abroad journey.
        </p>
    </div>

    @if(isset($query) && $query)
        <div class="mb-6">
            <p class="text-blue-700">Showing results for: <strong>"{{ $query }}"</strong></p>
        </div>
    @endif

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

                    <div class="flex items-center justify-between">
                        <div class="text-sm text-blue-600">
                            <span class="font-medium">⏱️ Duration:</span> {{ $degree->duration_years }}
                            year{{ $degree->duration_years > 1 ? 's' : '' }}
                        </div>
                        <a href="{{ url('/applications/create') }}"
                            class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded-lg transition-all duration-300 font-semibold shadow-lg">
                            Apply Now
                        </a>
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

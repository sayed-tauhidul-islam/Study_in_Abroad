@extends('layouts.app')

@section('title', 'Degrees | Study Abroad')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Academic Degrees</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Explore various academic degrees available for international students. Choose the right degree level for
            your study abroad journey.
        </p>
    </div>

    @if(isset($query) && $query)
        <div class="mb-6">
            <p class="text-gray-600">Showing results for: <strong>"{{ $query }}"</strong></p>
        </div>
    @endif

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($degrees as $degree)
            <div
                class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-200">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800">{{ $degree->name }}</h3>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm font-medium rounded-full">
                            {{ $degree->level }}
                        </span>
                    </div>

                    <p class="text-gray-600 mb-4">{{ $degree->description }}</p>

                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            <span class="font-medium">Duration:</span> {{ $degree->duration_years }}
                            year{{ $degree->duration_years > 1 ? 's' : '' }}
                        </div>
                        <a href="{{ url('/applications/create') }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors duration-300 font-medium">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <div class="text-gray-500">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No degrees found</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        @if(isset($query) && $query)
                            No degrees match your search for "{{ $query }}".
                        @else
                            Get started by creating a new degree.
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

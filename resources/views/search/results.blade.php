@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Search Results for "{{ $query }}"</h1>

    <blade
        if|(%24universities-%3EisEmpty()%20%26%26%20%24countries-%3EisEmpty()%20%26%26%20%24courses-%3EisEmpty()%20%26%26%20%24scholarships-%3EisEmpty()%20%26%26%20%24users-%3EisEmpty())>
        <p class="text-gray-600">No results found.</p>
    @else
        @if($universities->count())
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Universities</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($universities as $university)
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-bold text-blue-600">{{ $university->name }}</h3>
                            {{-- Add more university details here as needed --}}
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if($countries->count())
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Countries</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($countries as $country)
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-bold text-blue-600">{{ $country->name }}</h3>
                            {{-- Add more country details here as needed --}}
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if($courses->count())
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Courses</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($courses as $course)
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-bold text-blue-600">Course ID: {{ $course->id }}</h3>
                            {{-- Courses table has no name column, so displaying ID --}}
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if($scholarships->count())
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Scholarships</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($scholarships as $scholarship)
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-bold text-blue-600">{{ $scholarship->name }}</h3>
                            {{-- Add more scholarship details here as needed --}}
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if($users->count())
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Users</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($users as $user)
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-bold text-blue-600">{{ $user->name }}</h3>
                            {{-- Add more user details here as needed --}}
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @endif
</div>
@endsection

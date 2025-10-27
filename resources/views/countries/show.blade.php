@extends('layouts.app')

@section('title', $country->name)

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
        <div class="p-6">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">{{ $country->name }}</h1>
            <p class="text-lg text-gray-600 mb-4">Country Code: {{ $country->country_code }}</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                <div>
                    <h2 class="text-2xl font-bold mb-2">Details</h2>
                    <p><span class="font-semibold">Student Count:</span> {{ $country->student_count ?? 'N/A' }}</p>
                    <div>
                        <h3 class="text-xl font-bold mt-4 mb-2">Additional Details</h3>
                        <p>{{ $country->details ?? 'No additional details available.' }}</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-2">Description</h2>
                    <p class="text-gray-600">{{ $country->description ?? 'No description available.' }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Universities in {{ $country->name }}</h2>
            @if($country->universities && $country->universities->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($country->universities as $university)
                        <a href="{{ route('universities.show', $university) }}" class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-200">
                            <h3 class="text-xl font-bold text-blue-600">{{ $university->name }}</h3>
                            <p class="text-gray-600">{{ Str::limit($university->description, 100) }}</p>
                        </a>
                    @endforeach
                </div>
            @else
                <p>No universities found for this country.</p>
            @endif
        </div>
    </div>
</div>
@endsection

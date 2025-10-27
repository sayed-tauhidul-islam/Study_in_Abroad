@extends('layouts.app')

@section('title', $university->name)

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">{{ $university->name }}</h1>
            @if($university->country)
                <p class="text-lg text-gray-600 mb-4">{{ $university->country->name }}</p>
            @endif

            @if($university->logo_url)
                <img src="{{ $university->logo_url }}" alt="{{ $university->name }} Logo" class="w-32 h-32 object-contain mb-4">
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                <div>
                    <h2 class="text-2xl font-bold mb-2">Details</h2>
                    <p><span class="font-semibold">Ranking:</span> {{ $university->ranking ?? 'N/A' }}</p>
                    <p><span class="font-semibold">Website:</span> <a href="{{ $university->website }}" target="_blank" class="text-blue-500 hover:underline">{{ $university->website }}</a></p>
                    <p><span class="font-semibold">Environment Quality:</span> {{ $university->environment_quality ?? 'N/A' }}</p>
                    <p><span class="font-semibold">Number of Courses:</span> {{ $university->num_courses ?? 'N/A' }}</p>
                    <p><span class="font-semibold">Bangladeshi Students:</span> {{ $university->bd_students ?? 'N/A' }}</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-2">Description</h2>
                    <p class="text-gray-600">{{ $university->description ?? 'No description available.' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

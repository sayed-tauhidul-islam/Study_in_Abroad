@extends('layouts.app')

@section('title', 'Scholarships')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6 text-blue-700">All Scholarships</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($scholarships as $scholarship)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-blue-100">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-blue-800 mb-2">{{ $scholarship->name }}</h2>
                    <p class="text-gray-600 text-sm mb-2">Amount: {{ $scholarship->amount }}</p>
                    <p class="text-gray-600 text-sm mb-2">{{ Str::limit($scholarship->description, 100) }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">{{ $scholarships->links() }}</div>
</div>
@endsection

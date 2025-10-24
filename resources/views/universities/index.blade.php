@extends('layouts.app')

@section('title', 'Universities')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6 text-blue-700">All Universities</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($universities as $university)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-blue-100">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-blue-800 mb-2">{{ $university->name }}</h2>
                    <p class="text-gray-600 text-sm mb-2">Country:
                        {{ $university->country->name ?? '' }}</p>
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Ranking:
                        {{ $university->ranking }}</span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">{{ $universities->links() }}</div>
</div>
@endsection

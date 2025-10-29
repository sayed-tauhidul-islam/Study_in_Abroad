@extends('layouts.app')

@section('title', 'Scholarships')

@section('content')
<div class="container mx-auto p-4 bg-white">
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-900">Scholarship Opportunities</h1>
    <p class="text-lg text-blue-700 text-center mb-12 max-w-3xl mx-auto">Explore fully-funded and partial scholarships
        to make your study abroad dreams more affordable.</p>

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

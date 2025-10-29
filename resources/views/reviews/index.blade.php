@extends('layouts.app')

@section('title', 'Reviews')

@section('content')
<div class="container mx-auto p-4 bg-white">
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-900">Student Reviews & Testimonials</h1>
    <p class="text-lg text-blue-700 text-center mb-12 max-w-3xl mx-auto">Read real experiences from students who
        achieved their dreams of studying abroad with our guidance.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($reviews as $review)
            <div
                class="bg-white rounded-xl shadow-lg overflow-hidden border-2 border-green-200 hover:border-pink-500 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-pink-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            {{ substr($review->user->name ?? 'U', 0, 1) }}
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-blue-900">
                                {{ $review->user->name ?? 'Student' }}</h2>
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < $review->rating)
                                        ★
                                    @else
                                        ☆
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                    <p class="text-blue-700 text-sm italic">"{{ Str::limit($review->content, 150) }}"</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">{{ $reviews->links() }}</div>
</div>
@endsection

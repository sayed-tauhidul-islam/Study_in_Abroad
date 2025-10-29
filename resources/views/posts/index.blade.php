@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<div class="container mx-auto p-4 bg-white">
    <h1 class="text-4xl font-bold mb-8 text-center text-blue-900">Latest News & Articles</h1>
    <p class="text-lg text-blue-700 text-center mb-12 max-w-3xl mx-auto">Stay updated with the latest news, tips, and
        insights about studying abroad from our expert team.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($posts as $post)
            <div
                class="bg-white rounded-xl shadow-lg overflow-hidden border-2 border-blue-200 hover:border-pink-500 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="text-3xl mb-4">📰</div>
                    <h2 class="text-xl font-semibold text-blue-900 mb-3">{{ $post->title }}</h2>
                    <p class="text-blue-700 text-sm mb-4 line-clamp-3">{{ Str::limit($post->content, 150) }}
                    </p>
                    <div class="flex justify-between items-center">
                        <span
                            class="text-xs text-blue-600">{{ $post->created_at->format('M d, Y') }}</span>
                        <a href="#"
                            class="inline-block bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-800 transition-all duration-300 text-sm shadow-lg">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">{{ $posts->links() }}</div>
</div>
@endsection

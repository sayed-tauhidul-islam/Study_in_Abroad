@extends('layouts.admin')

@section('title', 'View Degree')

@section('content')
<div class="space-y-6">
    <!-- Degree Header -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
        <div class="flex justify-between items-start mb-4">
            <div>
                <h1 class="text-3xl font-bold text-white">{{ $degree->name }}</h1>
                <p class="text-gray-400 mt-1">Degree Details</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.degrees.edit', $degree) }}"
                    class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded-lg transition-colors">
                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                    Edit Degree
                </a>
                <a href="{{ route('admin.degrees.index') }}"
                    class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors">
                    Back to List
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Basic Information</h3>
                <div class="space-y-3">
                    <div>
                        <span class="font-medium text-gray-400">Level:</span>
                        <span class="ml-2 px-2 py-1 text-xs font-semibold rounded-full
                            @if($degree->level == 'Undergraduate') bg-green-600 text-white
                            @elseif($degree->level == 'Postgraduate') bg-blue-600 text-white
                            @elseif($degree->level == 'Doctoral') bg-purple-600 text-white
                            @else bg-gray-600 text-white @endif">
                            {{ $degree->level }}
                        </span>
                    </div>
                    <div>
                        <span class="font-medium text-gray-400">Duration:</span>
                        <span class="text-white ml-2">{{ $degree->duration_years }} year{{ $degree->duration_years > 1 ? 's' : '' }}</span>
                    </div>
                    <div>
                        <span class="font-medium text-gray-400">Status:</span>
                        <span class="ml-2 px-2 py-1 text-xs font-semibold rounded-full {{ $degree->is_active ? 'bg-green-600 text-white' : 'bg-red-600 text-white' }}">
                            {{ $degree->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </div>
                    <div>
                        <span class="font-medium text-gray-400">Universities Offering:</span>
                        <span class="text-white ml-2">{{ $degree->universities->count() }}</span>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Description</h3>
                <p class="text-gray-300">
                    {{ $degree->description ?: 'No description provided.' }}
                </p>
                <div class="text-sm text-gray-500 mt-4">
                    Created: {{ $degree->created_at->format('M d, Y') }}
                    @if($degree->updated_at != $degree->created_at)
                        <br>Updated: {{ $degree->updated_at->format('M d, Y') }}
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Universities Offering This Degree -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
        <h2 class="text-2xl font-bold text-white mb-4">Universities Offering This Degree</h2>
        
        @if($degree->universities->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($degree->universities as $university)
                    <div class="bg-gray-700 rounded-lg border border-gray-600 p-4 hover:bg-gray-650 transition-colors">
                        <div class="flex items-start justify-between mb-2">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-white">{{ $university->name }}</h3>
                                <p class="text-gray-400 text-sm">{{ $university->country->name ?? 'No Country' }}</p>
                            </div>
                            <a href="{{ route('admin.universities.show', $university->id) }}"
                                class="text-blue-400 hover:text-blue-300 p-2 rounded-lg hover:bg-gray-600 transition-colors"
                                title="View University">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        @if($university->ranking)
                            <div class="flex items-center text-gray-300 text-sm">
                                <svg class="w-4 h-4 mr-1 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                    </path>
                                </svg>
                                <span>Rank #{{ $university->ranking }}</span>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-8">
                <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                    </path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-400 mb-2">No universities offer this degree yet</h3>
                <p class="text-gray-500">You can assign universities to this degree from the university management section.</p>
            </div>
        @endif
    </div>
</div>
@endsection

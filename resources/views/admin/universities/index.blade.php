@extends('layouts.admin')
@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">Universities Management</h1>
            <p class="text-gray-400 mt-1">Manage universities and their information</p>
        </div>
        <a href="{{ route('admin.universities.create') }}"
            class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Add New University
        </a>
    </div>

    <!-- Universities Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($universities as $university)
            <div class="bg-gray-800 rounded-lg border border-gray-700 p-6 hover:bg-gray-750 transition-colors">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-white mb-1">{{ $university->name }}</h3>
                        <p class="text-gray-400 text-sm">
                            {{ $university->country->name ?? 'No Country' }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.universities.show', $university->id) }}"
                            class="text-blue-400 hover:text-blue-300 p-2 rounded-lg hover:bg-gray-700 transition-colors"
                            title="View">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </a>
                        <a href="{{ route('admin.universities.edit', $university->id) }}"
                            class="text-green-400 hover:text-green-300 p-2 rounded-lg hover:bg-gray-700 transition-colors"
                            title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                        </a>
                        <form
                            action="{{ route('admin.universities.destroy', $university->id) }}"
                            method="POST" class="inline"
                            onsubmit="return confirm('Are you sure you want to delete this university?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-400 hover:text-red-300 p-2 rounded-lg hover:bg-gray-700 transition-colors"
                                title="Delete">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="space-y-3">
                    @if($university->ranking)
                        <div class="flex items-center text-gray-300">
                            <svg class="w-4 h-4 mr-2 text-yellow-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                </path>
                            </svg>
                            <span class="text-sm">Ranking: {{ $university->ranking }}</span>
                        </div>
                    @endif

                    @if($university->website)
                        <div class="flex items-center text-gray-300">
                            <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                                </path>
                            </svg>
                            <a href="{{ $university->website }}" target="_blank"
                                class="text-blue-400 hover:text-blue-300 text-sm">Visit Website</a>
                        </div>
                    @endif

                    <div class="flex items-center justify-between pt-3 border-t border-gray-700">
                        <span class="text-xs text-gray-500">ID: {{ $university->id }}</span>
                        <div class="flex space-x-1">
                            <span class="bg-red-600 text-white px-2 py-1 rounded-full text-xs">Add</span>
                            <span class="bg-blue-600 text-white px-2 py-1 rounded-full text-xs">Edit</span>
                            <span class="bg-red-800 text-white px-2 py-1 rounded-full text-xs">Delete</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    @if($universities->hasPages())
        <div class="flex justify-center mt-8">
            {{ $universities->links() }}
        </div>
    @endif

    <!-- Empty State -->
    @if($universities->isEmpty())
        <div class="text-center py-12">
            <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                </path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-400 mb-2">No universities found</h3>
            <p class="text-gray-500 mb-6">Get started by adding your first university.</p>
            <a href="{{ route('admin.universities.create') }}"
                class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add First University
            </a>
        </div>
    @endif
</div>
@endsection

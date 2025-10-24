@extends('layouts.admin')
@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">Countries Management</h1>
            <p class="text-gray-400 mt-1">Manage countries and their information</p>
        </div>
        <a href="{{ route('admin.countries.create') }}"
            class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Add New Country
        </a>
    </div>

    <!-- Countries Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($countries as $country)
            <div class="bg-gray-800 rounded-lg border border-gray-700 p-6 hover:bg-gray-750 transition-colors">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-white mb-1">{{ $country->name }}</h3>
                        <p class="text-gray-400 text-sm">{{ $country->country_code }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.countries.show', $country->id) }}"
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
                        <a href="{{ route('admin.countries.edit', $country->id) }}"
                            class="text-green-400 hover:text-green-300 p-2 rounded-lg hover:bg-gray-700 transition-colors"
                            title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                        </a>
                        <form action="{{ route('admin.countries.destroy', $country->id) }}"
                            method="POST" class="inline"
                            onsubmit="return confirm('Are you sure you want to delete this country?')">
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
                    <div class="flex items-center text-gray-300">
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <span class="text-sm">{{ number_format($country->student_count) }} students</span>
                    </div>

                    <p class="text-gray-400 text-sm line-clamp-3">{{ Str::limit($country->description, 120) }}
                    </p>

                    <div class="flex items-center justify-between pt-3 border-t border-gray-700">
                        <span class="text-xs text-gray-500">ID: {{ $country->id }}</span>
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
    @if($countries->hasPages())
        <div class="flex justify-center mt-8">
            {{ $countries->links() }}
        </div>
    @endif

    <!-- Empty State -->
    @if($countries->isEmpty())
        <div class="text-center py-12">
            <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064">
                </path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-400 mb-2">No countries found</h3>
            <p class="text-gray-500 mb-6">Get started by adding your first country.</p>
            <a href="{{ route('admin.countries.create') }}"
                class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add First Country
            </a>
        </div>
    @endif
</div>
@endsection

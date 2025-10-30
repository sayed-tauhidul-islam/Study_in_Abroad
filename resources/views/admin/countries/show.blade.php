@extends('layouts.admin')
@section('content')
<div class="max-w-6xl mx-auto space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">{{ $country->name }}</h1>
            <p class="text-gray-400 mt-1">Country Details</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('admin.countries.edit', $country->id) }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                </svg>
                Edit
            </a>
            <a href="{{ route('admin.countries.index') }}"
                class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                Back to List
            </a>
        </div>
    </div>

    <!-- Country Information Card -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Country Name -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Country Name</h3>
                <p class="text-xl font-semibold text-white">{{ $country->name }}</p>
            </div>

            <!-- Country Code -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Country Code</h3>
                <p class="text-xl font-semibold text-white">{{ $country->country_code }}</p>
            </div>

            <!-- Student Count -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Student Count</h3>
                <p class="text-xl font-semibold text-white">{{ number_format($country->student_count ?? 0) }}
                </p>
            </div>

            <!-- ID -->
            <div>
                <h3 class="text-sm font-medium text-gray-400 mb-2">Country ID</h3>
                <p class="text-xl font-semibold text-white">#{{ $country->id }}</p>
            </div>
        </div>

        <!-- Description -->
        <div class="border-t border-gray-700 pt-6">
            <h3 class="text-sm font-medium text-gray-400 mb-3">Description</h3>
            <p class="text-gray-300 leading-relaxed">
                {{ $country->description ?? 'No description available.' }}
            </p>
        </div>

        <!-- Timestamps -->
        <div class="border-t border-gray-700 pt-6 mt-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h3 class="text-sm font-medium text-gray-400 mb-2">Created At</h3>
                    <p class="text-gray-300">
                        {{ $country->created_at ? $country->created_at->format('F j, Y - g:i A') : 'N/A' }}
                    </p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-400 mb-2">Last Updated</h3>
                    <p class="text-gray-300">
                        {{ $country->updated_at ? $country->updated_at->format('F j, Y - g:i A') : 'N/A' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Universities List -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-white">
                Universities in {{ $country->name }} ({{ $country->universities->count() }})
            </h2>
            @if($country->universities->count() > 0)
                <a href="{{ route('admin.universities.create') }}?country_id={{ $country->id }}"
                    class="bg-green-700 hover:bg-green-800 text-white font-semibold py-2 px-4 rounded-lg transition-colors flex items-center text-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add University
                </a>
            @endif
        </div>

        @if($country->universities->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($country->universities as $university)
                    <div
                        class="bg-gray-900 rounded-lg border border-gray-700 hover:border-blue-500 transition-all duration-300 overflow-hidden">
                        <!-- University Header -->
                        <div class="p-5 border-b border-gray-700">
                            <h3 class="text-lg font-bold text-white mb-2">{{ $university->name }}</h3>
                            <p class="text-gray-400 text-sm flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                {{ $university->location ?? 'Location not specified' }}
                            </p>
                        </div>

                        <!-- University Stats -->
                        <div class="p-5 bg-gray-800">
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Courses</p>
                                    <p class="text-lg font-semibold text-blue-400">
                                        {{ $university->courses->count() ?? 0 }}</p>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Students</p>
                                    <p class="text-lg font-semibold text-green-400">
                                        {{ number_format($university->student_count ?? 0) }}</p>
                                </div>
                            </div>

                            @if($university->description)
                                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                                    {{ Str::limit($university->description, 80) }}
                                </p>
                            @endif
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 bg-gray-900 border-t border-gray-700 flex justify-between items-center">
                            <a href="{{ route('admin.universities.show', $university->id) }}"
                                class="text-blue-400 hover:text-blue-300 font-semibold text-sm flex items-center transition-colors">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                                View Details
                            </a>
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.universities.edit', $university->id) }}"
                                    class="text-green-400 hover:text-green-300 p-2 rounded-lg hover:bg-gray-800 transition-colors"
                                    title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </a>
                                <form
                                    action="{{ route('admin.universities.destroy', $university->id) }}"
                                    method="POST" class="inline"
                                    onsubmit="return confirm('Are you sure you want to delete {{ $university->name }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-400 hover:text-red-300 p-2 rounded-lg hover:bg-gray-800 transition-colors"
                                        title="Delete">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                    </path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-400 mb-2">No universities found</h3>
                <p class="text-gray-500 mb-6">This country doesn't have any universities yet.</p>
                <a href="{{ route('admin.universities.create') }}?country_id={{ $country->id }}"
                    class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg transition-colors inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add First University
                </a>
            </div>
        @endif
    </div>

    <!-- Delete Button -->
    <div class="bg-gray-800 rounded-lg border border-red-700 p-6">
        <div class="flex items-start justify-between">
            <div>
                <h3 class="text-lg font-semibold text-red-500 mb-2">Danger Zone</h3>
                <p class="text-gray-400">Once you delete this country, there is no going back. Please be certain.</p>
            </div>
            <form action="{{ route('admin.countries.destroy', $country->id) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this country? This action cannot be undone.')">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                        </path>
                    </svg>
                    Delete Country
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

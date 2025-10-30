@extends('layouts.admin')
@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">Add New Country</h1>
            <p class="text-gray-400 mt-1">Create a new country entry</p>
        </div>
        <a href="{{ route('admin.countries.index') }}"
            class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
            </svg>
            Back to List
        </a>
    </div>

    <!-- Form Card -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 p-8">
        <form action="{{ route('admin.countries.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Country Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">
                    Country Name <span class="text-red-500">*</span>
                </label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="e.g., United States">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Country Code -->
            <div>
                <label for="country_code" class="block text-sm font-medium text-gray-300 mb-2">
                    Country Code <span class="text-red-500">*</span>
                </label>
                <input type="text" name="country_code" id="country_code"
                    value="{{ old('country_code') }}" required
                    class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="e.g., US">
                @error('country_code')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Student Count -->
            <div>
                <label for="student_count" class="block text-sm font-medium text-gray-300 mb-2">
                    Student Count
                </label>
                <input type="number" name="student_count" id="student_count"
                    value="{{ old('student_count') }}" min="0"
                    class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="e.g., 50000">
                @error('student_count')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-300 mb-2">
                    Description
                </label>
                <textarea name="description" id="description" rows="6"
                    class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Enter country description...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4 pt-6 border-t border-gray-700">
                <a href="{{ route('admin.countries.index') }}"
                    class="px-6 py-3 bg-gray-700 hover:bg-gray-600 text-white font-semibold rounded-lg transition-colors">
                    Cancel
                </a>
                <button type="submit"
                    class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Create Country
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

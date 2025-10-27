@extends('layouts.admin')

@section('title', 'Edit Degree')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Edit Degree</h1>
        <p class="text-gray-600 mt-2">Update the degree information.</p>
    </div>

    <form method="POST" action="{{ route('admin.degrees.update', $degree) }}">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Degree Name *</label>
                <input type="text" name="name" id="name"
                    value="{{ old('name', $degree->name) }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                    required>
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="level" class="block text-sm font-medium text-gray-700 mb-2">Level</label>
                <select name="level" id="level"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Level</option>
                    <option value="Undergraduate"
                        {{ old('level', $degree->level) == 'Undergraduate' ? 'selected' : '' }}>
                        Undergraduate</option>
                    <option value="Postgraduate"
                        {{ old('level', $degree->level) == 'Postgraduate' ? 'selected' : '' }}>
                        Postgraduate</option>
                    <option value="Doctoral"
                        {{ old('level', $degree->level) == 'Doctoral' ? 'selected' : '' }}>
                        Doctoral</option>
                </select>
            </div>

            <div>
                <label for="duration_years" class="block text-sm font-medium text-gray-700 mb-2">Duration
                    (Years)</label>
                <input type="number" name="duration_years" id="duration_years"
                    value="{{ old('duration_years', $degree->duration_years) }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    min="1" max="10">
                @error('duration_years')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <div class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" value="1"
                        {{ old('is_active', $degree->is_active) ? 'checked' : '' }}
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_active" class="ml-2 block text-sm text-gray-900">
                        Active (visible to users)
                    </label>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
            <textarea name="description" id="description" rows="4"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Describe the degree program...">{{ old('description', $degree->description) }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-6 flex items-center justify-between">
            <a href="{{ route('admin.degrees.index') }}"
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md transition-colors duration-300">
                Cancel
            </a>
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition-colors duration-300">
                Update Degree
            </button>
        </div>
    </form>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-white">Edit University</h1>
        <p class="text-gray-400 mt-1">Update university information and images</p>
    </div>

    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
        <form action="{{ route('admin.universities.update', $university->id) }}"
            method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- University Name -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-300 mb-2">University Name *</label>
                    <input type="text" name="name" value="{{ $university->name }}" required
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter university name">
                </div>

                <!-- Country -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Country *</label>
                    <select name="country_id" required
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Select Country</option>
                        @foreach(\App\Models\Country::all() as $country)
                            <option value="{{ $country->id }}"
                                {{ $university->country_id == $country->id ? 'selected' : '' }}>
                                {{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Ranking -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Ranking</label>
                    <input type="number" name="ranking" value="{{ $university->ranking }}"
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="e.g., 1">
                </div>

                <!-- Website -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Website URL</label>
                    <input type="url" name="website" value="{{ $university->website }}"
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="https://example.edu">
                </div>

                <!-- Logo URL -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Logo URL</label>
                    <input type="url" name="logo_url" value="{{ $university->logo_url }}"
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="https://example.com/logo.png">
                    <p class="text-xs text-gray-500 mt-1">University logo (recommended: square, 150x150px)</p>
                    @if($university->logo_url)
                        <div class="mt-2">
                            <img src="{{ $university->logo_url }}" alt="Current Logo"
                                class="h-16 w-16 object-contain bg-white p-2 rounded">
                        </div>
                    @endif
                </div>

                <!-- Image URL -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-300 mb-2">University Image URL</label>
                    <input type="url" name="image_url" value="{{ $university->image_url }}"
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="https://example.com/campus.jpg">
                    <p class="text-xs text-gray-500 mt-1">Campus or building image (recommended: 800x600px)</p>
                    @if($university->image_url)
                        <div class="mt-2">
                            <img src="{{ $university->image_url }}" alt="Current Image"
                                class="h-32 w-auto object-cover rounded">
                        </div>
                    @endif
                </div>

                <!-- Description -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-300 mb-2">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter university description">{{ $university->description }}</textarea>
                </div>

                <!-- Environment Quality -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Environment Quality</label>
                    <input type="text" name="environment_quality" value="{{ $university->environment_quality }}"
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="e.g., Excellent">
                </div>

                <!-- Number of Courses -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Number of Courses</label>
                    <input type="number" name="num_courses" value="{{ $university->num_courses }}"
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="e.g., 150">
                </div>

                <!-- BD Students -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Bangladeshi Students</label>
                    <input type="number" name="bd_students" value="{{ $university->bd_students }}"
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="e.g., 500">
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end space-x-4 mt-6">
                <a href="{{ route('admin.universities.show', $university->id) }}"
                    class="px-6 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition-colors">
                    Cancel
                </a>
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                    Update University
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

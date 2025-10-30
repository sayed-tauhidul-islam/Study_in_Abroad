@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-white">Edit Course</h1>
            <p class="text-gray-400 mt-1">Update course information</p>
        </div>
        <a href="{{ route('admin.courses.index') }}"
            class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition-colors">
            ← Back to Courses
        </a>
    </div>

    <!-- Form -->
    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
        <form action="{{ route('admin.courses.update', $course->id) }}" method="POST"
            class="space-y-6">
            @csrf
            @method('PUT')

            <!-- University Selection -->
            <div>
                <label for="university_id" class="block text-sm font-medium text-gray-300 mb-2">
                    University <span class="text-red-500">*</span>
                </label>
                <select name="university_id" id="university_id"
                    class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 @error('university_id') border-red-500 @enderror"
                    required>
                    <option value="">Select University</option>
                    @foreach($universities as $university)
                        <option value="{{ $university->id }}"
                            {{ old('university_id', $course->university_id) == $university->id ? 'selected' : '' }}>
                            {{ $university->name }}
                        </option>
                    @endforeach
                </select>
                @error('university_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Course Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">
                    Course Name <span class="text-red-500">*</span>
                </label>
                <input type="text" name="name" id="name"
                    value="{{ old('name', $course->name) }}"
                    class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 @error('name') border-red-500 @enderror"
                    placeholder="e.g., Computer Science" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-300 mb-2">
                    Description
                </label>
                <textarea name="description" id="description" rows="4"
                    class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 @error('description') border-red-500 @enderror"
                    placeholder="Enter course description...">{{ old('description', $course->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Duration and Level -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="duration" class="block text-sm font-medium text-gray-300 mb-2">
                        Duration
                    </label>
                    <input type="text" name="duration" id="duration"
                        value="{{ old('duration', $course->duration) }}"
                        class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 @error('duration') border-red-500 @enderror"
                        placeholder="e.g., 4 years, 2 semesters">
                    @error('duration')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="level" class="block text-sm font-medium text-gray-300 mb-2">
                        Level
                    </label>
                    <select name="level" id="level"
                        class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 @error('level') border-red-500 @enderror">
                        <option value="">Select Level</option>
                        <option value="Certificate"
                            {{ old('level', $course->level) == 'Certificate' ? 'selected' : '' }}>
                            Certificate</option>
                        <option value="Diploma"
                            {{ old('level', $course->level) == 'Diploma' ? 'selected' : '' }}>
                            Diploma</option>
                        <option value="Associate"
                            {{ old('level', $course->level) == 'Associate' ? 'selected' : '' }}>
                            Associate</option>
                        <option value="Bachelor"
                            {{ old('level', $course->level) == 'Bachelor' ? 'selected' : '' }}>
                            Bachelor</option>
                        <option value="Master"
                            {{ old('level', $course->level) == 'Master' ? 'selected' : '' }}>
                            Master</option>
                        <option value="Doctor"
                            {{ old('level', $course->level) == 'Doctor' ? 'selected' : '' }}>
                            Doctor (PhD)</option>
                    </select>
                    @error('level')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Fees -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="tuition_fee" class="block text-sm font-medium text-gray-300 mb-2">
                        Tuition Fee (USD)
                    </label>
                    <input type="number" name="tuition_fee" id="tuition_fee"
                        value="{{ old('tuition_fee', $course->tuition_fee) }}" step="0.01"
                        min="0"
                        class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 @error('tuition_fee') border-red-500 @enderror"
                        placeholder="25000.00">
                    @error('tuition_fee')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="application_fee" class="block text-sm font-medium text-gray-300 mb-2">
                        Application Fee (USD)
                    </label>
                    <input type="number" name="application_fee" id="application_fee"
                        value="{{ old('application_fee', $course->application_fee) }}"
                        step="0.01" min="0"
                        class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 @error('application_fee') border-red-500 @enderror"
                        placeholder="100.00">
                    @error('application_fee')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Language -->
            <div>
                <label for="language" class="block text-sm font-medium text-gray-300 mb-2">
                    Language of Instruction
                </label>
                <input type="text" name="language" id="language"
                    value="{{ old('language', $course->language) }}"
                    class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 @error('language') border-red-500 @enderror"
                    placeholder="English">
                @error('language')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Requirements -->
            <div>
                <label for="requirements" class="block text-sm font-medium text-gray-300 mb-2">
                    Admission Requirements
                </label>
                <textarea name="requirements" id="requirements" rows="4"
                    class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 @error('requirements') border-red-500 @enderror"
                    placeholder="High school diploma, Mathematics proficiency, English language test (TOEFL/IELTS)">{{ old('requirements', $course->requirements) }}</textarea>
                @error('requirements')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-700">
                <a href="{{ route('admin.courses.index') }}"
                    class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg transition-colors">
                    Cancel
                </a>
                <button type="submit"
                    class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-lg transition-colors">
                    Update Course
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

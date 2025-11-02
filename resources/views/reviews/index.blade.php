@extends('layouts.app')

@section('title', 'Reviews')

@section('content')
<div class="bg-gradient-to-br from-blue-50 via-white to-green-50 min-h-screen py-12">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="inline-block bg-green-700 text-white px-6 py-2 rounded-full text-sm font-bold mb-4 animate-pulse">
                ⭐ Student Testimonials
            </span>
            <h1 class="text-5xl font-black text-gray-900 mb-4">
                Student Reviews & <span class="text-green-700">Testimonials</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Read real experiences from students who achieved their dreams of studying abroad with our guidance.
            </p>
            
            <!-- Search Box -->
            <div class="max-w-2xl mx-auto mt-8">
                <form action="{{ route('reviews.index') }}" method="GET" class="relative">
                    <input type="text" 
                           name="query" 
                           value="{{ request('query') }}"
                           placeholder="Search reviews by name, university, country, program..." 
                           class="w-full px-6 py-4 pr-24 border-2 border-gray-300 rounded-full focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none text-lg">
                    <button type="submit" 
                            class="absolute right-2 top-1/2 -translate-y-1/2 bg-gradient-to-r from-green-600 to-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:from-green-700 hover:to-blue-700 transition-all flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        Search
                    </button>
                </form>
                
                @if(request('query'))
                    <div class="mt-4 flex items-center justify-center gap-4">
                        <p class="text-gray-600">
                            Showing results for: <span class="font-bold text-green-700">"{{ request('query') }}"</span>
                        </p>
                        <a href="{{ route('reviews.index') }}" 
                           class="text-sm text-gray-500 hover:text-gray-700 underline">
                            Clear search
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Write Review Form Section -->
        <div class="max-w-4xl mx-auto mb-16">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-2 border-green-100">
                <div class="bg-gradient-to-r from-green-600 to-blue-600 p-8 text-white">
                    <h2 class="text-3xl font-bold mb-2 flex items-center gap-3">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        Share Your Experience
                    </h2>
                    <p class="text-green-50">Help inspire and guide future students by sharing your study abroad journey!</p>
                </div>

                <form action="{{ route('reviews.store') }}" method="POST" class="p-8 space-y-6">
                    @csrf
                    
                    @if(session('success'))
                        <div class="bg-green-100 border-2 border-green-500 text-green-800 px-6 py-4 rounded-xl flex items-center gap-3">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Student Name -->
                        <div>
                            <label for="name" class="block text-sm font-bold text-gray-700 mb-2">
                                Full Name <span class="text-red-600">*</span>
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name') }}"
                                   required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none @error('name') border-red-500 @enderror"
                                   placeholder="Enter your full name">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-bold text-gray-700 mb-2">
                                Email Address <span class="text-red-600">*</span>
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}"
                                   required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none @error('email') border-red-500 @enderror"
                                   placeholder="your.email@example.com">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- University -->
                        <div>
                            <label for="university" class="block text-sm font-bold text-gray-700 mb-2">
                                University Name <span class="text-red-600">*</span>
                            </label>
                            <input type="text" 
                                   id="university" 
                                   name="university" 
                                   value="{{ old('university') }}"
                                   required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none @error('university') border-red-500 @enderror"
                                   placeholder="e.g., Harvard University">
                            @error('university')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Country -->
                        <div>
                            <label for="country" class="block text-sm font-bold text-gray-700 mb-2">
                                Country <span class="text-red-600">*</span>
                            </label>
                            <select id="country" 
                                    name="country" 
                                    required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none @error('country') border-red-500 @enderror">
                                <option value="">Select Country</option>
                                <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>🇺🇸 United States</option>
                                <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>🇬🇧 United Kingdom</option>
                                <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>🇨🇦 Canada</option>
                                <option value="Australia" {{ old('country') == 'Australia' ? 'selected' : '' }}>🇦🇺 Australia</option>
                                <option value="Germany" {{ old('country') == 'Germany' ? 'selected' : '' }}>🇩🇪 Germany</option>
                                <option value="France" {{ old('country') == 'France' ? 'selected' : '' }}>🇫🇷 France</option>
                                <option value="Netherlands" {{ old('country') == 'Netherlands' ? 'selected' : '' }}>🇳🇱 Netherlands</option>
                                <option value="Other" {{ old('country') == 'Other' ? 'selected' : '' }}>🌍 Other</option>
                            </select>
                            @error('country')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Program/Course -->
                        <div>
                            <label for="program" class="block text-sm font-bold text-gray-700 mb-2">
                                Program/Course <span class="text-red-600">*</span>
                            </label>
                            <input type="text" 
                                   id="program" 
                                   name="program" 
                                   value="{{ old('program') }}"
                                   required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none @error('program') border-red-500 @enderror"
                                   placeholder="e.g., Computer Science">
                            @error('program')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Rating -->
                        <div>
                            <label for="rating" class="block text-sm font-bold text-gray-700 mb-2">
                                Rating <span class="text-red-600">*</span>
                            </label>
                            <select id="rating" 
                                    name="rating" 
                                    required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none @error('rating') border-red-500 @enderror">
                                <option value="">Select Rating</option>
                                <option value="5" {{ old('rating') == '5' ? 'selected' : '' }}>⭐⭐⭐⭐⭐ Excellent (5 stars)</option>
                                <option value="4" {{ old('rating') == '4' ? 'selected' : '' }}>⭐⭐⭐⭐ Very Good (4 stars)</option>
                                <option value="3" {{ old('rating') == '3' ? 'selected' : '' }}>⭐⭐⭐ Good (3 stars)</option>
                                <option value="2" {{ old('rating') == '2' ? 'selected' : '' }}>⭐⭐ Fair (2 stars)</option>
                                <option value="1" {{ old('rating') == '1' ? 'selected' : '' }}>⭐ Poor (1 star)</option>
                            </select>
                            @error('rating')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Study Year -->
                        <div>
                            <label for="year" class="block text-sm font-bold text-gray-700 mb-2">
                                Year of Admission <span class="text-red-600">*</span>
                            </label>
                            <input type="number" 
                                   id="year" 
                                   name="year" 
                                   value="{{ old('year') }}"
                                   min="2000" 
                                   max="2030"
                                   required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none @error('year') border-red-500 @enderror"
                                   placeholder="e.g., 2024">
                            @error('year')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Scholarship -->
                        <div>
                            <label for="scholarship" class="block text-sm font-bold text-gray-700 mb-2">
                                Received Scholarship? <span class="text-red-600">*</span>
                            </label>
                            <select id="scholarship" 
                                    name="scholarship" 
                                    required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none @error('scholarship') border-red-500 @enderror">
                                <option value="">Select Option</option>
                                <option value="Yes" {{ old('scholarship') == 'Yes' ? 'selected' : '' }}>Yes - Full Scholarship</option>
                                <option value="Partial" {{ old('scholarship') == 'Partial' ? 'selected' : '' }}>Partial Scholarship</option>
                                <option value="No" {{ old('scholarship') == 'No' ? 'selected' : '' }}>No Scholarship</option>
                            </select>
                            @error('scholarship')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Address -->
                    <div>
                        <label for="address" class="block text-sm font-bold text-gray-700 mb-2">
                            Address <span class="text-red-600">*</span>
                        </label>
                        <input type="text" 
                               id="address" 
                               name="address" 
                               value="{{ old('address') }}"
                               required
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none @error('address') border-red-500 @enderror"
                               placeholder="Enter your full address">
                        @error('address')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Review Content -->
                    <div>
                        <label for="content" class="block text-sm font-bold text-gray-700 mb-2">
                            Your Review <span class="text-red-600">*</span>
                        </label>
                        <textarea id="content" 
                                  name="content" 
                                  rows="6" 
                                  required
                                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all outline-none resize-none @error('content') border-red-500 @enderror"
                                  placeholder="Share your experience with StudyAbroad... Tell us about your journey, the support you received, and how we helped you achieve your goals.">{{ old('content') }}</textarea>
                        <p class="text-sm text-gray-500 mt-2">Minimum 50 characters</p>
                        @error('content')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Consent Checkbox -->
                    <div class="flex items-start gap-3">
                        <input type="checkbox" 
                               id="consent" 
                               name="consent" 
                               required
                               class="mt-1 w-5 h-5 text-green-600 border-2 border-gray-300 rounded focus:ring-2 focus:ring-green-500">
                        <label for="consent" class="text-sm text-gray-600">
                            I agree to share my review publicly on the StudyAbroad website and understand that my feedback will help other students. <span class="text-red-600">*</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-between pt-4">
                        <button type="button" 
                                onclick="this.closest('form').reset()"
                                class="px-6 py-3 text-gray-600 font-semibold hover:text-gray-800 transition-colors">
                            Clear Form
                        </button>
                        <button type="submit" 
                                class="bg-gradient-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white px-10 py-4 rounded-xl font-bold text-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 flex items-center gap-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Submit Review
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Reviews Display Section -->
        @if($reviews->total() > 0)
        <div class="mb-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">What Our Students Say</h2>
                <p class="text-gray-600">{{ $reviews->total() }} verified reviews from our amazing students</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($reviews as $review)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-green-100 hover:border-green-500 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="p-6">
                            <!-- User Info -->
                            <div class="flex items-center mb-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg">
                                    {{ substr($review->user->name ?? $review->name ?? 'U', 0, 1) }}
                                </div>
                                <div class="ml-4 flex-1">
                                    <h3 class="text-lg font-bold text-gray-900">
                                        {{ $review->user->name ?? $review->name ?? 'Student' }}
                                    </h3>
                                    <p class="text-sm text-gray-600">{{ $review->university ?? 'University' }}</p>
                                    <div class="flex text-yellow-400 text-lg mt-1">
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

                            <!-- Review Content -->
                            <div class="mb-4">
                                <p class="text-gray-700 text-sm leading-relaxed italic">
                                    "{{ Str::limit($review->content, 150) }}"
                                </p>
                            </div>

                            <!-- Meta Info -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <span class="text-xs text-gray-500 flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $review->country ?? 'International' }}
                                </span>
                                <span class="text-xs text-gray-500">
                                    {{ $review->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $reviews->links() }}
        </div>
        @endif
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Find Your Best Choice')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-purple-600 via-blue-600 to-indigo-700 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div
        class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yIDItNCAyLTRzMiAyIDIgNGMwIDItMiA0LTIgNHMtMi0yLTItNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-10">
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-block mb-6 animate-bounce">
                <svg class="w-20 h-20 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                    <path fill-rule="evenodd"
                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
                Find Your <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-300 to-pink-300">Perfect
                    Match</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-100 leading-relaxed">
                Answer a few questions and get personalized recommendations for universities, countries, courses,
                scholarships, and more!
            </p>
            <div class="flex flex-wrap gap-4 justify-center text-sm md:text-base">
                <div class="flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                    <span>Personalized Results</span>
                </div>
                <div class="flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd" /></svg>
                    <span>Save & Access Anytime</span>
                </div>
                <div class="flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                            clip-rule="evenodd" /></svg>
                    <span>Scholarship Options</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <!-- Progress Steps -->
            <div class="mb-12">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex-1 text-center">
                        <div
                            class="w-12 h-12 mx-auto bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-lg mb-2">
                            1</div>
                        <p class="text-sm font-medium text-purple-600">Personal Info</p>
                    </div>
                    <div class="flex-1 border-t-2 border-gray-300 mx-4 mt-[-30px]"></div>
                    <div class="flex-1 text-center">
                        <div
                            class="w-12 h-12 mx-auto bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-lg mb-2">
                            2</div>
                        <p class="text-sm font-medium text-purple-600">Preferences</p>
                    </div>
                    <div class="flex-1 border-t-2 border-gray-300 mx-4 mt-[-30px]"></div>
                    <div class="flex-1 text-center">
                        <div
                            class="w-12 h-12 mx-auto bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-lg mb-2">
                            3</div>
                        <p class="text-sm font-medium text-purple-600">Requirements</p>
                    </div>
                    <div class="flex-1 border-t-2 border-gray-300 mx-4 mt-[-30px]"></div>
                    <div class="flex-1 text-center">
                        <div
                            class="w-12 h-12 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-lg mb-2">
                            ✓</div>
                        <p class="text-sm font-medium text-gray-500">Results</p>
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12">
                <form action="{{ route('best-choice.store') }}" method="POST" id="bestChoiceForm">
                    @csrf

                    <!-- Step 1: Personal Information -->
                    <div class="form-step active" id="step1">
                        <h2 class="text-3xl font-bold mb-8 text-gray-800 flex items-center gap-3">
                            <span
                                class="bg-gradient-to-r from-purple-600 to-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center">1</span>
                            Personal Information
                        </h2>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                                <input type="text" name="name" required
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                                    placeholder="John Doe">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                <input type="email" name="email" required
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                                    placeholder="john@example.com">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" name="phone"
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                                    placeholder="+1 234 567 8900">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Current Education Level
                                    *</label>
                                <select name="current_education_level" required
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition">
                                    <option value="">Select Level</option>
                                    <option value="High School">High School</option>
                                    <option value="Bachelor's">Bachelor's Degree</option>
                                    <option value="Master's">Master's Degree</option>
                                    <option value="PhD">PhD</option>
                                    <option value="Professional">Professional Degree</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Field of Interest *</label>
                            <input type="text" name="field_of_interest" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                                placeholder="e.g., Computer Science, Business, Medicine">
                        </div>

                        <div class="flex justify-end">
                            <button type="button" onclick="nextStep(2)"
                                class="px-8 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition shadow-lg">
                                Next Step →
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Preferences -->
                    <div class="form-step" id="step2">
                        <h2 class="text-3xl font-bold mb-8 text-gray-800 flex items-center gap-3">
                            <span
                                class="bg-gradient-to-r from-purple-600 to-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center">2</span>
                            Your Preferences
                        </h2>

                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Preferred Countries (Select
                                multiple)</label>
                            <div
                                class="grid grid-cols-2 md:grid-cols-4 gap-3 max-h-64 overflow-y-auto p-4 border-2 border-gray-200 rounded-lg">
                                @foreach($countries as $country)
                                    <label
                                        class="flex items-center gap-2 cursor-pointer hover:bg-purple-50 p-2 rounded transition">
                                        <input type="checkbox" name="preferred_countries[]"
                                            value="{{ $country->country_code }}"
                                            class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                                        <span class="text-sm">{{ $country->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Preferred Degree Level (Select
                                multiple)</label>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                                @foreach($degrees as $degree)
                                    <label
                                        class="flex items-center gap-2 cursor-pointer hover:bg-purple-50 p-3 rounded-lg border-2 border-gray-200 transition">
                                        <input type="checkbox" name="preferred_degrees[]" value="{{ $degree->id }}"
                                            class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                                        <span class="text-sm font-medium">{{ $degree->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Budget Range (USD per
                                    year)</label>
                                <div class="flex gap-4">
                                    <input type="number" name="budget_min"
                                        class="w-1/2 px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                                        placeholder="Min: 10000">
                                    <input type="number" name="budget_max"
                                        class="w-1/2 px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                                        placeholder="Max: 50000">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Study Mode</label>
                                <select name="study_mode"
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition">
                                    <option value="">Select Mode</option>
                                    <option value="Full-time">Full-time</option>
                                    <option value="Part-time">Part-time</option>
                                    <option value="Online">Online</option>
                                    <option value="Hybrid">Hybrid</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" name="scholarship_required" value="1"
                                    class="w-5 h-5 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                                <span class="text-sm font-semibold text-gray-700">I need scholarship
                                    opportunities</span>
                            </label>
                        </div>

                        <div class="flex justify-between">
                            <button type="button" onclick="prevStep(1)"
                                class="px-8 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition">
                                ← Previous
                            </button>
                            <button type="button" onclick="nextStep(3)"
                                class="px-8 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition shadow-lg">
                                Next Step →
                            </button>
                        </div>
                    </div>

                    <!-- Step 3: Requirements -->
                    <div class="form-step" id="step3">
                        <h2 class="text-3xl font-bold mb-8 text-gray-800 flex items-center gap-3">
                            <span
                                class="bg-gradient-to-r from-purple-600 to-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center">3</span>
                            Academic Requirements
                        </h2>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">English Proficiency
                                    Test</label>
                                <select name="english_proficiency"
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition">
                                    <option value="">Select Test</option>
                                    <option value="IELTS 6.5+">IELTS 6.5+</option>
                                    <option value="IELTS 7.0+">IELTS 7.0+</option>
                                    <option value="TOEFL 80+">TOEFL 80+</option>
                                    <option value="TOEFL 100+">TOEFL 100+</option>
                                    <option value="Duolingo 110+">Duolingo 110+</option>
                                    <option value="Not taken yet">Not taken yet</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">GPA / Academic Score (out
                                    of 4.0)</label>
                                <input type="number" name="gpa_score" step="0.01" min="0" max="4"
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                                    placeholder="e.g., 3.5">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Work Experience (if
                                any)</label>
                            <textarea name="work_experience" rows="3"
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                                placeholder="Describe your work experience, internships, projects..."></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Intake</label>
                            <select name="intake_preference"
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition">
                                <option value="">Select Intake</option>
                                <option value="Fall 2025">Fall 2025</option>
                                <option value="Spring 2026">Spring 2026</option>
                                <option value="Summer 2026">Summer 2026</option>
                                <option value="Fall 2026">Fall 2026</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Additional Requirements or
                                Preferences</label>
                            <textarea name="additional_requirements" rows="4"
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                                placeholder="Any specific requirements, concerns, or preferences we should know about..."></textarea>
                        </div>

                        <div class="flex justify-between">
                            <button type="button" onclick="prevStep(2)"
                                class="px-8 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition">
                                ← Previous
                            </button>
                            <button type="submit"
                                class="px-12 py-3 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg font-bold text-lg hover:from-green-700 hover:to-blue-700 transition shadow-lg transform hover:scale-105">
                                🎯 Get My Recommendations
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Search Previous Recommendations -->
            <div class="mt-12 bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold mb-4 text-gray-800 flex items-center gap-3">
                    <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                    Already Submitted? Search Your Results
                </h3>
                <p class="text-gray-600 mb-4">Enter your name or email to retrieve your previous recommendations.</p>

                <form action="{{ route('best-choice.search') }}" method="GET" class="flex gap-4">
                    <input type="text" name="search" required
                        class="flex-1 px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition"
                        placeholder="Search by name or email...">
                    <button type="submit"
                        class="px-8 py-3 bg-purple-600 text-white rounded-lg font-semibold hover:bg-purple-700 transition">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-step {
        display: none;
    }

    .form-step.active {
        display: block;
        animation: fadeIn 0.5s ease-in;
    }

    <blade keyframes|%20fadeIn%20%7B%0D>from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
    }

</style>

<script>
    function nextStep(step) {
        // Validate current step
        const currentStep = document.querySelector('.form-step.active');
        const inputs = currentStep.querySelectorAll('[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value) {
                isValid = false;
                input.classList.add('border-red-500');
            } else {
                input.classList.remove('border-red-500');
            }
        });

        if (!isValid) {
            alert('Please fill in all required fields');
            return;
        }

        // Move to next step
        document.querySelectorAll('.form-step').forEach(el => el.classList.remove('active'));
        document.getElementById('step' + step).classList.add('active');
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function prevStep(step) {
        document.querySelectorAll('.form-step').forEach(el => el.classList.remove('active'));
        document.getElementById('step' + step).classList.add('active');
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

</script>
@endsection

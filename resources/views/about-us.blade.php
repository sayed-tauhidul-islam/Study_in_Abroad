@extends('layouts.app')

@section('title', 'About Us | Study Abroad')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-500 via-purple-500 to-pink-400 py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-extrabold text-white mb-6 drop-shadow-lg">About StudyAbroad</h1>
        <p class="text-xl text-white mb-8 max-w-3xl mx-auto">Your trusted partner in international education, connecting
            students worldwide with life-changing opportunities since 2010.</p>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Story</h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Founded in 2010, StudyAbroad began with a simple mission: to make international education accessible
                    to students from all backgrounds. What started as a small consultancy in Dhaka has grown into
                    Bangladesh's leading study abroad platform, helping thousands of students achieve their dreams of
                    studying at world-renowned universities.
                </p>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Over the years, we've built strong partnerships with top universities across the globe and developed
                    comprehensive support systems that guide students through every step of their international
                    education journey.
                </p>
                <div class="flex items-center space-x-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">14+</div>
                        <div class="text-sm text-gray-600">Years of Experience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600">50K+</div>
                        <div class="text-sm text-gray-600">Students Helped</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-purple-600">500+</div>
                        <div class="text-sm text-gray-600">Partner Universities</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80"
                    alt="Our Team" class="rounded-2xl shadow-2xl">
                <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-xl shadow-lg">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold">
                            S</div>
                        <div>
                            <div class="font-semibold text-gray-800">StudyAbroad Team</div>
                            <div class="text-sm text-gray-600">Dedicated Professionals</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission & Vision -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Mission & Vision</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Guiding principles that drive everything we do</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12">
            <div
                class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl shadow-lg border-l-4 border-blue-500">
                <div class="text-6xl mb-6">🎯</div>
                <h3 class="text-2xl font-bold text-blue-700 mb-4">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">
                    To empower students with comprehensive guidance, personalized support, and access to world-class
                    education opportunities. We strive to make the dream of studying abroad a reality for every
                    deserving student, regardless of their background or financial situation.
                </p>
            </div>
            <div
                class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl shadow-lg border-l-4 border-green-500">
                <div class="text-6xl mb-6">🌟</div>
                <h3 class="text-2xl font-bold text-green-700 mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    To become the most trusted and comprehensive platform for international education in Bangladesh and
                    beyond. We envision a world where geographical boundaries don't limit educational opportunities, and
                    every student can access the education that best fits their aspirations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- What Sets Us Apart -->
<section class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">What Sets Us Apart</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Why thousands of students choose StudyAbroad</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center">
                <div class="text-6xl mb-6">🤝</div>
                <h3 class="font-bold text-xl mb-3 text-blue-700">Personalized Approach</h3>
                <p class="text-gray-600">Every student receives customized guidance based on their unique profile,
                    goals, and preferences.</p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center">
                <div class="text-6xl mb-6">💰</div>
                <h3 class="font-bold text-xl mb-3 text-green-700">Financial Support</h3>
                <p class="text-gray-600">Access to thousands of scholarships and financial aid opportunities to make
                    education affordable.</p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center">
                <div class="text-6xl mb-6">🌍</div>
                <h3 class="font-bold text-xl mb-3 text-purple-700">Global Network</h3>
                <p class="text-gray-600">Strong partnerships with universities worldwide and extensive alumni network
                    for ongoing support.</p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center">
                <div class="text-6xl mb-6">📋</div>
                <h3 class="font-bold text-xl mb-3 text-orange-700">End-to-End Support</h3>
                <p class="text-gray-600">Complete assistance from application to arrival, including visa guidance and
                    accommodation help.</p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center">
                <div class="text-6xl mb-6">🎓</div>
                <h3 class="font-bold text-xl mb-3 text-red-700">Expert Counselors</h3>
                <p class="text-gray-600">Team of experienced education consultants with firsthand knowledge of
                    international education systems.</p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center">
                <div class="text-6xl mb-6">✅</div>
                <h3 class="font-bold text-xl mb-3 text-teal-700">Proven Success</h3>
                <p class="text-gray-600">95% success rate with thousands of students successfully placed in top
                    universities worldwide.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Meet Our Leadership Team</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Experienced professionals dedicated to your success</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80"
                    alt="CEO" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover border-4 border-white shadow-lg">
                <h3 class="font-bold text-xl mb-2 text-blue-700">Ahmed Rahman</h3>
                <p class="text-purple-600 font-semibold mb-3">Chief Executive Officer</p>
                <p class="text-gray-600 text-sm">15+ years in international education, former Harvard admissions officer
                </p>
            </div>
            <div class="text-center bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=200&q=80"
                    alt="COO" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover border-4 border-white shadow-lg">
                <h3 class="font-bold text-xl mb-2 text-green-700">Fatima Khan</h3>
                <p class="text-purple-600 font-semibold mb-3">Chief Operating Officer</p>
                <p class="text-gray-600 text-sm">12+ years in student services, MBA from University of Toronto</p>
            </div>
            <div class="text-center bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-2xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=200&q=80"
                    alt="CTO" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover border-4 border-white shadow-lg">
                <h3 class="font-bold text-xl mb-2 text-purple-700">Dr. Sarah Ahmed</h3>
                <p class="text-purple-600 font-semibold mb-3">Director of Counseling</p>
                <p class="text-gray-600 text-sm">PhD in Education, specializes in career guidance and university
                    admissions</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">Our Core Values</h2>
            <p class="text-xl text-white max-w-3xl mx-auto">The principles that guide our work and relationships</p>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <div
                class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300">
                <div class="text-5xl mb-4">🎯</div>
                <h3 class="font-bold text-xl mb-3 text-white">Excellence</h3>
                <p class="text-gray-200">We strive for the highest standards in everything we do</p>
            </div>
            <div
                class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300">
                <div class="text-5xl mb-4">🤝</div>
                <h3 class="font-bold text-xl mb-3 text-white">Integrity</h3>
                <p class="text-gray-200">We build trust through honest and transparent practices</p>
            </div>
            <div
                class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300">
                <div class="text-5xl mb-4">🌟</div>
                <h3 class="font-bold text-xl mb-3 text-white">Innovation</h3>
                <p class="text-gray-200">We embrace new technologies and methods to better serve students</p>
            </div>
            <div
                class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300">
                <div class="text-5xl mb-4">❤️</div>
                <h3 class="font-bold text-xl mb-3 text-white">Compassion</h3>
                <p class="text-gray-200">We care deeply about each student's dreams and challenges</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="py-20 bg-gradient-to-br from-green-400 to-blue-500">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to Start Your Journey?</h2>
        <p class="text-xl text-white mb-8">Join thousands of successful students who trusted StudyAbroad with their
            future</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('applications.create') }}"
                class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition shadow-lg">Start
                Your Application</a>
            <a href="tel:+8801306753144"
                class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition">Call
                Us: +880 1306 753144</a>
        </div>
    </div>
</section>
@endsection

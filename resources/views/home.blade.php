@extends('layouts.app')

@section('title', 'Study Abroad | Home')

@section('content')

<!-- Hero Section with Search Bar -->
<section class="relative bg-gradient-to-br from-blue-500 via-purple-500 to-pink-400 py-20" x-data="{
    images: [
        {src: 'https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=800&q=80', alt: 'Modern University Building', caption: 'Modern University'},
        {src: 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=800&q=80', alt: 'International Students', caption: 'International Students'},
        {src: 'https://images.unsplash.com/photo-1517520287167-4bbf64a00d66?auto=format&fit=crop&w=800&q=80', alt: 'Student Group', caption: 'Student Group'},
        {src: 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=800&q=80', alt: 'Graduation Celebration', caption: 'Graduation Celebration'},
        {src: 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=800&q=80', alt: 'Campus Life', caption: 'Campus Life'},
        {src: 'https://images.unsplash.com/photo-1465808883808-8a0e0b6b9a57?auto=format&fit=crop&w=800&q=80', alt: 'Library Study', caption: 'Library Study'},
        {src: 'https://images.unsplash.com/photo-1465101178521-c1a9136a3b99?auto=format&fit=crop&w=800&q=80', alt: 'Lecture Hall', caption: 'Lecture Hall'},
        {src: 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=800&q=80', alt: 'Student Friends', caption: 'Student Friends'},
        {src: 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80', alt: 'University Building', caption: 'University Building'},
        {src: 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=800&q=80', alt: 'Outdoor Study', caption: 'Outdoor Study'},
        {src: 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=800&q=80', alt: 'Student Smiling', caption: 'Student Smiling'},
        {src: 'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=800&q=80', alt: 'Graduation Day', caption: 'Graduation Day'},
        {src: 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80', alt: 'Group Project', caption: 'Group Project'},
        {src: 'https://images.unsplash.com/photo-1515168833906-d2a3b82b1a48?auto=format&fit=crop&w=800&q=80', alt: 'Campus Walk', caption: 'Campus Walk'},
        {src: 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=800&q=80', alt: 'Student Laughing', caption: 'Student Laughing'},
        {src: 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=800&q=80', alt: 'Classroom', caption: 'Classroom'},
        {src: 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80', alt: 'Teamwork', caption: 'Teamwork'},
        {src: 'https://images.unsplash.com/photo-1515168833906-d2a3b82b1a48?auto=format&fit=crop&w=800&q=80', alt: 'Campus Green', caption: 'Campus Green'},
        {src: 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=800&q=80', alt: 'Student Group', caption: 'Student Group'},
        {src: 'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=800&q=80', alt: 'Graduation Friends', caption: 'Graduation Friends'},
        {src: 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=800&q=80', alt: 'International Students', caption: 'International Students'},
        {src: 'https://images.unsplash.com/photo-1517520287167-4bbf64a00d66?auto=format&fit=crop&w=800&q=80', alt: 'Student Group', caption: 'Student Group'},
        {src: 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=800&q=80', alt: 'Graduation Celebration', caption: 'Graduation Celebration'}
    ],
    current: 0,
    next() {
        if (this.current < this.images.length - 1) {
            this.current++;
        } else {
            this.current = 0;
        }
    },
    prev() {
        if (this.current > 0) {
            this.current--;
        } else {
            this.current = this.images.length - 1;
        }
    },
    interval: null,
    start() { this.interval = setInterval(() => this.next(), 1000) },
    stop() { clearInterval(this.interval) },
    init() { this.start() }
}">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-10 md:mb-0 text-white">
            <h1 class="text-5xl font-extrabold mb-6 drop-shadow-lg">Explore Your <span class="text-yellow-300">Study
                    Abroad</span> Opportunities</h1>
            <p class="text-lg mb-8">Find the best universities and programs around the world. Start your journey to
                study abroad with us today!</p>
            <form action="{{ route('search') }}" method="GET" class="mb-6 flex items-center max-w-md">
                <input type="text" name="query" placeholder="Search universities, courses, scholarships..."
                    class="w-full px-4 py-2 rounded-l-lg focus:outline-none text-gray-800" />
                <button type="submit"
                    class="bg-yellow-300 text-blue-900 px-4 py-2 rounded-r-lg font-bold hover:bg-yellow-400 transition">Search</button>
            </form>
            <a href="{{ route('applications.create') }}"
                class="bg-yellow-300 text-blue-900 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition shadow">Apply
                Now</a>
        </div>
        <div class="md:w-1/2 flex flex-col items-center justify-center relative">
            <div class="relative w-full max-w-md">
                <div class="relative w-full h-72 overflow-hidden">
                    <template x-for="(img, idx) in images" :key="idx">
                        <img :src="img.src" :alt="img.alt"
                            class="rounded-2xl shadow-2xl w-full h-72 object-cover border-4 border-white absolute top-0 left-0 transition-transform duration-700"
                            :style="`transform: translateX(${(idx-current)*100}%); z-index: ${idx === current ? 10 : 1}`"
                            x-show="Math.abs(current-idx) <= 1 || (current === 0 && idx === images.length-1) || (current === images.length-1 && idx === 0)" />
                    </template>
                </div>
                <!-- Carousel Controls -->
                <button @click="prev"
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-white bg-opacity-60 hover:bg-opacity-90 text-blue-700 rounded-full p-2 shadow-lg focus:outline-none"><svg
                        xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24'
                        stroke='currentColor'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 19l-7-7 7-7' />
                    </svg></button>
                <button @click="next"
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-white bg-opacity-60 hover:bg-opacity-90 text-blue-700 rounded-full p-2 shadow-lg focus:outline-none"><svg
                        xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24'
                        stroke='currentColor'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7' />
                    </svg></button>
            </div>
            <div class="mt-4 text-lg text-white font-semibold bg-blue-900 bg-opacity-60 px-4 py-2 rounded shadow-lg min-h-[48px]"
                x-text="images[current].caption"></div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Why Choose StudyAbroad?</h2>
        <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">We provide comprehensive support to make
            your study abroad journey smooth, successful, and unforgettable.</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-blue-500">
                <div class="text-6xl mb-6 text-center">🎯</div>
                <h3 class="font-bold text-xl mb-3 text-blue-700 text-center">Personalized Matching</h3>
                <p class="text-gray-600 text-center">AI-powered recommendations based on your profile, preferences, and
                    goals.</p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-green-500">
                <div class="text-6xl mb-6 text-center">💰</div>
                <h3 class="font-bold text-xl mb-3 text-green-700 text-center">Scholarship Assistance</h3>
                <p class="text-gray-600 text-center">Access to thousands of scholarships with expert application
                    guidance.</p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-purple-500">
                <div class="text-6xl mb-6 text-center">📋</div>
                <h3 class="font-bold text-xl mb-3 text-purple-700 text-center">Complete Support</h3>
                <p class="text-gray-600 text-center">From application to arrival - we handle every step of your journey.
                </p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-orange-500">
                <div class="text-6xl mb-6 text-center">🌟</div>
                <h3 class="font-bold text-xl mb-3 text-orange-700 text-center">Success Guarantee</h3>
                <p class="text-gray-600 text-center">95% success rate with proven track record of student placements.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="container mx-auto px-4 py-16">
    <div class="grid md:grid-cols-3 gap-10">
        <div
            class="bg-gradient-to-br from-yellow-200 via-pink-100 to-blue-100 p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform border-2 border-yellow-300">
            <div class="text-5xl mb-4">🌍</div>
            <h3 class="font-bold text-2xl mb-2 text-blue-700">Global Universities</h3>
            <p class="text-gray-700">Access a wide range of top universities from all over the world.</p>
        </div>
        <div
            class="bg-gradient-to-br from-blue-200 via-green-100 to-yellow-100 p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform border-2 border-blue-300">
            <div class="text-5xl mb-4">🎓</div>
            <h3 class="font-bold text-2xl mb-2 text-green-700">Diverse Programs</h3>
            <p class="text-gray-700">Choose from hundreds of programs to match your interests and goals.</p>
        </div>
        <div
            class="bg-gradient-to-br from-pink-200 via-purple-100 to-green-100 p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform border-2 border-pink-300">
            <div class="text-5xl mb-4">🤝</div>
            <h3 class="font-bold text-2xl mb-2 text-pink-700">Expert Guidance</h3>
            <p class="text-gray-700">Get support from our experienced counselors at every step.</p>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-white mb-4">Our Impact in Numbers</h2>
        <p class="text-xl text-center text-white mb-16">Trusted by students worldwide for their study abroad dreams</p>
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 hover:scale-105 border border-white border-opacity-20">
                <div class="text-5xl font-bold text-yellow-300 mb-3">500+</div>
                <p class="text-white font-semibold text-lg">Partner Universities</p>
                <p class="text-white text-sm opacity-80 mt-2">World-class institutions</p>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 hover:scale-105 border border-white border-opacity-20">
                <div class="text-5xl font-bold text-yellow-300 mb-3">50K+</div>
                <p class="text-white font-semibold text-lg">Students Helped</p>
                <p class="text-white text-sm opacity-80 mt-2">Successful placements</p>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 hover:scale-105 border border-white border-opacity-20">
                <div class="text-5xl font-bold text-yellow-300 mb-3">100+</div>
                <p class="text-white font-semibold text-lg">Countries Covered</p>
                <p class="text-white text-sm opacity-80 mt-2">Global opportunities</p>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 hover:scale-105 border border-white border-opacity-20">
                <div class="text-5xl font-bold text-yellow-300 mb-3">95%</div>
                <p class="text-white font-semibold text-lg">Success Rate</p>
                <p class="text-white text-sm opacity-80 mt-2">Proven track record</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="bg-gradient-to-br from-gray-50 via-white to-blue-50 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Frequently Asked Questions</h2>
        <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">Get answers to common questions about
            studying abroad</p>
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-bold text-blue-700 mb-4 flex items-center">
                    <span class="bg-blue-100 text-blue-600 rounded-full p-2 mr-4">❓</span>
                    How do I choose the right university for me?
                </h3>
                <p class="text-gray-600 leading-relaxed">We help you evaluate universities based on your academic
                    profile, career goals, budget, and personal preferences. Our AI-powered matching system considers
                    factors like acceptance rates, program quality, location, and cost of living to recommend the best
                    options for you.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-bold text-green-700 mb-4 flex items-center">
                    <span class="bg-green-100 text-green-600 rounded-full p-2 mr-4">💰</span>
                    What scholarships am I eligible for?
                </h3>
                <p class="text-gray-600 leading-relaxed">We maintain a comprehensive database of scholarships from
                    universities, governments, and private organizations. Our team helps identify scholarships based on
                    your nationality, field of study, academic merit, and financial need, potentially saving you
                    thousands of dollars.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-bold text-purple-700 mb-4 flex items-center">
                    <span class="bg-purple-100 text-purple-600 rounded-full p-2 mr-4">📋</span>
                    What documents do I need for my application?
                </h3>
                <p class="text-gray-600 leading-relaxed">Required documents typically include academic transcripts,
                    standardized test scores (TOEFL/IELTS, GRE/GMAT), letters of recommendation, personal statement, and
                    financial statements. We provide detailed checklists and guidance for each document.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-bold text-orange-700 mb-4 flex items-center">
                    <span class="bg-orange-100 text-orange-600 rounded-full p-2 mr-4">🛂</span>
                    How long does the visa process take?
                </h3>
                <p class="text-gray-600 leading-relaxed">Visa processing times vary by country and visa type, typically
                    ranging from 2-12 weeks. We help you prepare all required documents, schedule appointments, and
                    provide tips to increase your approval chances. Most students receive their visas within 4-6 weeks.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="container mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">What Our Students Say</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=100&q=80"
                    alt="Student" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h4 class="font-semibold">Sarah Johnson</h4>
                    <p class="text-gray-600 text-sm">Harvard University</p>
                </div>
            </div>
            <p class="text-gray-700">"StudyAbroad helped me find the perfect program in the US. The guidance was
                exceptional!"</p>
            <div class="flex text-yellow-400 mt-4">
                ★★★★★
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80"
                    alt="Student" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h4 class="font-semibold">Ahmed Hassan</h4>
                    <p class="text-gray-600 text-sm">University of Toronto</p>
                </div>
            </div>
            <p class="text-gray-700">"The application process was smooth and the support team was always there when I
                needed help."</p>
            <div class="flex text-yellow-400 mt-4">
                ★★★★★
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=100&q=80"
                    alt="Student" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h4 class="font-semibold">Maria Garcia</h4>
                    <p class="text-gray-600 text-sm">University of Melbourne</p>
                </div>
            </div>
            <p class="text-gray-700">"Thanks to StudyAbroad, I achieved my dream of studying in Australia. Highly
                recommended!"</p>
            <div class="flex text-yellow-400 mt-4">
                ★★★★★
            </div>
        </div>
    </div>
</section>

<!-- Student Success Stories Section -->
<section class="container mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Success Stories from Our Students</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=80&q=80"
                    alt="Student" class="w-16 h-16 rounded-full mr-4">
                <div>
                    <h4 class="font-semibold">Emma Thompson</h4>
                    <p class="text-gray-600 text-sm">MBA at Harvard Business School</p>
                </div>
            </div>
            <p class="text-gray-700 mb-4">"Thanks to StudyAbroad's guidance, I secured admission to Harvard. The visa
                process was seamless and their support team was incredible!"</p>
            <div class="flex text-yellow-400 mb-4">
                ★★★★★
            </div>
            <p class="text-sm text-gray-500 italic">"The personalized counseling helped me choose the right program and
                prepare for interviews."</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&q=80"
                    alt="Student" class="w-16 h-16 rounded-full mr-4">
                <div>
                    <h4 class="font-semibold">Carlos Rodriguez</h4>
                    <p class="text-gray-600 text-sm">Engineering at MIT</p>
                </div>
            </div>
            <p class="text-gray-700 mb-4">"From application to arrival, StudyAbroad handled everything. I got a full
                scholarship and now I'm living my dream!"</p>
            <div class="flex text-yellow-400 mb-4">
                ★★★★★
            </div>
            <p class="text-sm text-gray-500 italic">"Their scholarship matching service saved me thousands of dollars."
            </p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=80&q=80"
                    alt="Student" class="w-16 h-16 rounded-full mr-4">
                <div>
                    <h4 class="font-semibold">Priya Sharma</h4>
                    <p class="text-gray-600 text-sm">Medicine at University of Oxford</p>
                </div>
            </div>
            <p class="text-gray-700 mb-4">"The team helped me navigate the complex UK visa process and find
                accommodation. I'm now pursuing my medical degree!"</p>
            <div class="flex text-yellow-400 mb-4">
                ★★★★★
            </div>
            <p class="text-sm text-gray-500 italic">"Their pre-departure orientation prepared me perfectly for life in
                the UK."</p>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-gradient-to-r from-green-400 to-blue-500 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to Start Your Journey?</h2>
        <p class="text-xl text-white mb-8">Join thousands of students who have successfully studied abroad with our
            help.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('search') }}"
                class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition shadow-lg">Search
                Programs</a>
            <a href="{{ route('applications.create') }}"
                class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition">Apply
                Now</a>
        </div>
    </div>
</section>

<!-- Popular Destinations Section -->
<section class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Popular Study Destinations</h2>
        <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">Explore the world's most sought-after
            destinations for international education</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="text-6xl mb-2">🇺🇸</div>
                        <h3 class="text-2xl font-bold">United States</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Home to world-renowned universities like Harvard, MIT, and Stanford.
                        Over 4,000 institutions to choose from.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">500+ Universities</span>
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">Most
                            Popular</span>
                    </div>
                </div>
            </div>
            <div
                class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="text-6xl mb-2">🇬🇧</div>
                        <h3 class="text-2xl font-bold">United Kingdom</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Historic universities with cutting-edge research. Programs from 9-12
                        months with post-study work visas.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">150+ Universities</span>
                        <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-semibold">Historic
                            Excellence</span>
                    </div>
                </div>
            </div>
            <div
                class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="text-6xl mb-2">🇦🇺</div>
                        <h3 class="text-2xl font-bold">Australia</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">High-quality education with excellent post-study work opportunities.
                        Known for research excellence.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">40+ Universities</span>
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Work
                            Opportunities</span>
                    </div>
                </div>
            </div>
            <div
                class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="text-6xl mb-2">🇨🇦</div>
                        <h3 class="text-2xl font-bold">Canada</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Affordable education with pathways to permanent residency.
                        Multicultural environment with high quality of life.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">100+ Universities</span>
                        <span
                            class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm font-semibold">Affordable
                            Excellence</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Study Programs Section -->
<section class="container mx-auto px-4 py-20">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Explore Study Programs</h2>
    <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">Find the perfect program that matches your
        academic goals and career aspirations</p>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div
            class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-blue-500">
            <div class="text-5xl mb-4">🎓</div>
            <h3 class="font-bold text-2xl mb-3 text-blue-700">Undergraduate Programs</h3>
            <p class="text-gray-700 mb-4">Bachelor's degrees in various fields including Business, Engineering, Arts,
                and Sciences. 3-4 year programs with foundation year options.</p>
            <ul class="text-sm text-gray-600 space-y-1">
                <li>• Foundation Programs Available</li>
                <li>• Transfer Credits Accepted</li>
                <li>• Career Counseling Included</li>
            </ul>
        </div>
        <div
            class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-green-500">
            <div class="text-5xl mb-4">📚</div>
            <h3 class="font-bold text-2xl mb-3 text-green-700">Graduate Programs</h3>
            <p class="text-gray-700 mb-4">Master's and PhD programs for advanced study. Research opportunities, industry
                partnerships, and specialized tracks.</p>
            <ul class="text-sm text-gray-600 space-y-1">
                <li>• Research Assistantships</li>
                <li>• Industry Partnerships</li>
                <li>• Fast-track Options</li>
            </ul>
        </div>
        <div
            class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-purple-500">
            <div class="text-5xl mb-4">💼</div>
            <h3 class="font-bold text-2xl mb-3 text-purple-700">Professional Programs</h3>
            <p class="text-gray-700 mb-4">MBA, Law, Medicine, and other professional degrees. Specialized training with
                industry certifications.</p>
            <ul class="text-sm text-gray-600 space-y-1">
                <li>• Industry Certifications</li>
                <li>• Internship Programs</li>
                <li>• Executive Networks</li>
            </ul>
        </div>
        <div
            class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-orange-500">
            <div class="text-5xl mb-4">🌐</div>
            <h3 class="font-bold text-2xl mb-3 text-orange-700">Online & Hybrid Programs</h3>
            <p class="text-gray-700 mb-4">Flexible learning options combining online coursework with in-person
                components. Perfect for working professionals.</p>
            <ul class="text-sm text-gray-600 space-y-1">
                <li>• Flexible Scheduling</li>
                <li>• Global Faculty Access</li>
                <li>• Interactive Learning</li>
            </ul>
        </div>
        <div
            class="bg-gradient-to-br from-pink-50 to-pink-100 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-pink-500">
            <div class="text-5xl mb-4">🎨</div>
            <h3 class="font-bold text-2xl mb-3 text-pink-700">Creative Arts Programs</h3>
            <p class="text-gray-700 mb-4">Fine Arts, Design, Music, Film, and Performing Arts. Portfolio development and
                industry connections included.</p>
            <ul class="text-sm text-gray-600 space-y-1">
                <li>• Portfolio Development</li>
                <li>• Industry Connections</li>
                <li>• Exhibition Opportunities</li>
            </ul>
        </div>
        <div
            class="bg-gradient-to-br from-teal-50 to-teal-100 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-teal-500">
            <div class="text-5xl mb-4">🔬</div>
            <h3 class="font-bold text-2xl mb-3 text-teal-700">STEM Programs</h3>
            <p class="text-gray-700 mb-4">Science, Technology, Engineering, and Mathematics. Cutting-edge research
                facilities and innovation hubs.</p>
            <ul class="text-sm text-gray-600 space-y-1">
                <li>• Research Facilities</li>
                <li>• Innovation Labs</li>
                <li>• Industry Partnerships</li>
            </ul>
        </div>
    </div>
</section>

<!-- University Rankings Section -->
<section class="bg-gradient-to-r from-gray-900 via-blue-900 to-purple-900 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-white mb-4">Top Ranked Universities</h2>
        <p class="text-xl text-center text-gray-300 mb-16 max-w-3xl mx-auto">Partnered with world-leading institutions
            recognized for academic excellence</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-4xl font-bold text-yellow-400">#1</div>
                    <div class="text-6xl">🏛️</div>
                </div>
                <h3 class="font-bold text-xl mb-2 text-white">Harvard University</h3>
                <p class="text-gray-300 mb-3">Cambridge, Massachusetts, USA</p>
                <div class="flex items-center justify-between">
                    <span class="text-yellow-400 text-sm">⭐ QS World Ranking</span>
                    <span class="bg-yellow-400 bg-opacity-20 text-yellow-300 px-3 py-1 rounded-full text-sm">Ivy
                        League</span>
                </div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-4xl font-bold text-yellow-400">#2</div>
                    <div class="text-6xl">🎓</div>
                </div>
                <h3 class="font-bold text-xl mb-2 text-white">Stanford University</h3>
                <p class="text-gray-300 mb-3">Stanford, California, USA</p>
                <div class="flex items-center justify-between">
                    <span class="text-yellow-400 text-sm">⭐ QS World Ranking</span>
                    <span class="bg-yellow-400 bg-opacity-20 text-yellow-300 px-3 py-1 rounded-full text-sm">Innovation
                        Hub</span>
                </div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-4xl font-bold text-yellow-400">#3</div>
                    <div class="text-6xl">🏫</div>
                </div>
                <h3 class="font-bold text-xl mb-2 text-white">University of Oxford</h3>
                <p class="text-gray-300 mb-3">Oxford, United Kingdom</p>
                <div class="flex items-center justify-between">
                    <span class="text-yellow-400 text-sm">⭐ QS World Ranking</span>
                    <span class="bg-yellow-400 bg-opacity-20 text-yellow-300 px-3 py-1 rounded-full text-sm">Historic
                        Excellence</span>
                </div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-4xl font-bold text-yellow-400">#4</div>
                    <div class="text-6xl">🎓</div>
                </div>
                <h3 class="font-bold text-xl mb-2 text-white">MIT</h3>
                <p class="text-gray-300 mb-3">Cambridge, Massachusetts, USA</p>
                <div class="flex items-center justify-between">
                    <span class="text-yellow-400 text-sm">⭐ QS World Ranking</span>
                    <span class="bg-yellow-400 bg-opacity-20 text-yellow-300 px-3 py-1 rounded-full text-sm">Tech
                        Innovation</span>
                </div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-4xl font-bold text-yellow-400">#5</div>
                    <div class="text-6xl">🏛️</div>
                </div>
                <h3 class="font-bold text-xl mb-2 text-white">University of Cambridge</h3>
                <p class="text-gray-300 mb-3">Cambridge, United Kingdom</p>
                <div class="flex items-center justify-between">
                    <span class="text-yellow-400 text-sm">⭐ QS World Ranking</span>
                    <span class="bg-yellow-400 bg-opacity-20 text-yellow-300 px-3 py-1 rounded-full text-sm">Research
                        Powerhouse</span>
                </div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-4xl font-bold text-yellow-400">#6</div>
                    <div class="text-6xl">🎓</div>
                </div>
                <h3 class="font-bold text-xl mb-2 text-white">University of Toronto</h3>
                <p class="text-gray-300 mb-3">Toronto, Canada</p>
                <div class="flex items-center justify-between">
                    <span class="text-yellow-400 text-sm">⭐ QS World Ranking</span>
                    <span class="bg-yellow-400 bg-opacity-20 text-yellow-300 px-3 py-1 rounded-full text-sm">Diverse
                        Excellence</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Student Resources Section -->
<section class="bg-gradient-to-br from-green-50 via-blue-50 to-purple-50 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Student Resources & Tools</h2>
        <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">Everything you need to succeed in your
            study abroad journey</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-blue-500">
                <div class="text-6xl mb-6">📖</div>
                <h3 class="font-bold text-xl mb-3 text-blue-700">Application Guides</h3>
                <p class="text-gray-600 mb-4">Step-by-step guides for university applications, visa processes, and
                    document preparation.</p>
                <button class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition">Explore
                    Guides</button>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-green-500">
                <div class="text-6xl mb-6">💰</div>
                <h3 class="font-bold text-xl mb-3 text-green-700">Financial Planning</h3>
                <p class="text-gray-600 mb-4">Budget calculators, scholarship databases, and financial aid resources for
                    international students.</p>
                <button class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition">Plan
                    Finances</button>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-purple-500">
                <div class="text-6xl mb-6">🏠</div>
                <h3 class="font-bold text-xl mb-3 text-purple-700">Accommodation Finder</h3>
                <p class="text-gray-600 mb-4">Find student housing, dormitories, and off-campus apartments in your
                    destination city.</p>
                <button class="bg-purple-500 text-white px-6 py-2 rounded-full hover:bg-purple-600 transition">Find
                    Housing</button>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-orange-500">
                <div class="text-6xl mb-6">🌍</div>
                <h3 class="font-bold text-xl mb-3 text-orange-700">Cultural Guides</h3>
                <p class="text-gray-600 mb-4">Cultural adaptation tips, language resources, and local insights for your
                    destination country.</p>
                <button class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition">Learn
                    Culture</button>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-pink-500">
                <div class="text-6xl mb-6">💼</div>
                <h3 class="font-bold text-xl mb-3 text-pink-700">Career Services</h3>
                <p class="text-gray-600 mb-4">Resume building, job search assistance, and internship opportunities for
                    international students.</p>
                <button class="bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition">Build
                    Career</button>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-teal-500">
                <div class="text-6xl mb-6">👥</div>
                <h3 class="font-bold text-xl mb-3 text-teal-700">Student Community</h3>
                <p class="text-gray-600 mb-4">Connect with fellow international students, join study groups, and share
                    experiences.</p>
                <button class="bg-teal-500 text-white px-6 py-2 rounded-full hover:bg-teal-600 transition">Join
                    Community</button>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-indigo-500">
                <div class="text-6xl mb-6">📱</div>
                <h3 class="font-bold text-xl mb-3 text-indigo-700">Mobile App</h3>
                <p class="text-gray-600 mb-4">Access all our services on-the-go with our mobile app for iOS and Android
                    devices.</p>
                <button class="bg-indigo-500 text-white px-6 py-2 rounded-full hover:bg-indigo-600 transition">Download
                    App</button>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-red-500">
                <div class="text-6xl mb-6">🎓</div>
                <h3 class="font-bold text-xl mb-3 text-red-700">Alumni Network</h3>
                <p class="text-gray-600 mb-4">Connect with successful alumni for mentorship, career advice, and
                    networking opportunities.</p>
                <button class="bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition">Join
                    Network</button>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events Section -->
<section class="container mx-auto px-4 py-20">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Upcoming Events & Webinars</h2>
    <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">Stay informed and connected with our
        educational events and live sessions</p>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">Live Webinar</span>
                    <span class="text-2xl">💻</span>
                </div>
                <h3 class="font-bold text-xl mb-2">Study in USA: Complete Guide 2025</h3>
                <p class="text-blue-100">Learn everything about studying in the United States</p>
            </div>
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="text-4xl mr-4">📅</div>
                    <div>
                        <p class="font-semibold">March 15, 2025</p>
                        <p class="text-gray-600">2:00 PM - 4:00 PM GMT</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">Free Registration</span>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Register
                        Now</button>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden">
            <div class="bg-gradient-to-r from-green-500 to-teal-600 p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">Virtual Fair</span>
                    <span class="text-2xl">🎪</span>
                </div>
                <h3 class="font-bold text-xl mb-2">European Universities Fair</h3>
                <p class="text-green-100">Connect with top European institutions</p>
            </div>
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="text-4xl mr-4">📅</div>
                    <div>
                        <p class="font-semibold">March 22, 2025</p>
                        <p class="text-gray-600">10:00 AM - 6:00 PM GMT</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">Virtual Event</span>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">Join
                        Fair</button>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden">
            <div class="bg-gradient-to-r from-purple-500 to-pink-600 p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">Workshop</span>
                    <span class="text-2xl">🎨</span>
                </div>
                <h3 class="font-bold text-xl mb-2">Visa Application Workshop</h3>
                <p class="text-purple-100">Master the visa application process</p>
            </div>
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="text-4xl mr-4">📅</div>
                    <div>
                        <p class="font-semibold">April 5, 2025</p>
                        <p class="text-gray-600">3:00 PM - 5:00 PM GMT</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">$25 Registration</span>
                    <button class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600 transition">Book
                        Seat</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Signup Section -->
<section class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 py-20">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Stay Updated with StudyAbroad</h2>
        <p class="text-xl text-white mb-8 max-w-2xl mx-auto">Get the latest news, scholarship opportunities, and study
            abroad tips delivered to your inbox</p>
        <div
            class="max-w-md mx-auto bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 border border-white border-opacity-20">
            <form class="space-y-4">
                <div>
                    <input type="email" placeholder="Enter your email address"
                        class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 text-gray-800"
                        required>
                </div>
                <div class="flex items-start space-x-2 text-left">
                    <input type="checkbox" id="newsletter-consent" class="mt-1" required>
                    <label for="newsletter-consent" class="text-white text-sm">I agree to receive newsletters and
                        updates about study abroad opportunities. You can unsubscribe at any time.</label>
                </div>
                <button type="submit"
                    class="w-full bg-yellow-400 text-blue-900 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition shadow-lg">Subscribe
                    Now</button>
            </form>
            <p class="text-white text-sm mt-4 opacity-80">Join 50,000+ students who stay informed with our newsletter
            </p>
        </div>
    </div>
</section>

@endsection

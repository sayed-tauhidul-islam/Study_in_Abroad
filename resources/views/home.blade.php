@extends('layouts.app')

@section('title', 'Study Abroad | Home')

@section('content')

<!-- Hero Section with Search Bar -->
<section class="relative bg-white py-20 border-b-4 border-blue-500" x-data="{
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
        <div class="md:w-1/2 mb-10 md:mb-0">
            <h1 class="text-5xl font-extrabold mb-6 drop-shadow-sm text-blue-900">Explore Your <span
                    class="text-green-600">Study
                    Abroad</span> Opportunities</h1>
            <p class="text-lg mb-8 text-blue-800">Find the best universities and programs around the world. Start your
                journey to
                study abroad with us today!</p>
            <div class="flex items-center space-x-4 mb-6">
                <form action="{{ route('search') }}" method="GET" class="flex items-center max-w-sm">
                    <input type="text" name="query" placeholder="Search universities..."
                        class="w-full px-3 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500 text-gray-800 text-sm border border-green-200 bg-white" />
                    <button type="submit"
                        class="bg-green-700 text-white px-3 py-2 rounded-r-lg font-bold hover:bg-green-800 transition text-sm">Search</button>
                </form>
            </div>
            <a href="{{ route('applications.create') }}"
                class="bg-green-700 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-800 transition shadow-xl pulse-glow">Apply
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
            <div class="mt-4 text-lg text-blue-900 font-semibold bg-white bg-opacity-90 px-4 py-2 rounded shadow-lg min-h-[48px]"
                x-text="images[current].caption"></div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-slate-800 mb-4">Why Choose StudyAbroad?</h2>
        <p class="text-xl text-center text-slate-600 mb-16 max-w-3xl mx-auto">We provide comprehensive support to make
            your study abroad journey smooth, successful, and unforgettable.</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-emerald-500 bounce-hover">
                <div class="text-6xl mb-6 text-center">🎯</div>
                <h3 class="font-bold text-xl mb-3 text-slate-800 text-center">Personalized Matching</h3>
                <p class="text-slate-600 text-center">AI-powered recommendations based on your profile, preferences, and
                    goals.</p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-emerald-500 bounce-hover">
                <div class="text-6xl mb-6 text-center">💰</div>
                <h3 class="font-bold text-xl mb-3 text-slate-800 text-center">Scholarship Assistance</h3>
                <p class="text-slate-600 text-center">Access to thousands of scholarships with expert application
                    guidance.</p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-emerald-500 bounce-hover">
                <div class="text-6xl mb-6 text-center">📋</div>
                <h3 class="font-bold text-xl mb-3 text-slate-800 text-center">Complete Support</h3>
                <p class="text-slate-600 text-center">From application to arrival - we handle every step of your
                    journey.
                </p>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-l-4 border-green-600 bounce-hover">
                <div class="text-6xl mb-6 text-center">🌟</div>
                <h3 class="font-bold text-xl mb-3 text-blue-900 text-center">Success Guarantee</h3>
                <p class="text-blue-700 text-center">95% success rate with proven track record of student placements.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="container mx-auto px-4 py-16 bg-white">
    <div class="grid md:grid-cols-3 gap-10">
        <div
            class="bg-white p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform border-2 border-blue-200 hover:border-blue-500 shimmer">
            <div class="text-5xl mb-4">🌍</div>
            <h3 class="font-bold text-2xl mb-2 text-blue-900">Global Universities</h3>
            <p class="text-blue-700">Access a wide range of top universities from all over the world.</p>
        </div>
        <div
            class="bg-white p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform border-2 border-green-200 hover:border-green-500 shimmer">
            <div class="text-5xl mb-4">🎓</div>
            <h3 class="font-bold text-2xl mb-2 text-blue-900">Diverse Programs</h3>
            <p class="text-blue-700">Choose from hundreds of programs to match your interests and goals.</p>
        </div>
        <div
            class="bg-white p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform border-2 border-blue-200 hover:border-blue-500 shimmer">
            <div class="text-5xl mb-4">🤝</div>
            <h3 class="font-bold text-2xl mb-2 text-blue-900">Expert Guidance</h3>
            <p class="text-blue-700">Get support from our experienced counselors at every step.</p>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="bg-white py-20 border-t-4 border-b-4 border-blue-500">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-blue-900 mb-4">Our Impact in Numbers</h2>
        <p class="text-xl text-center text-blue-700 mb-16">Trusted by students worldwide for their study abroad dreams
        </p>
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div
                class="bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:scale-105 border-l-4 border-blue-600 float-animation">
                <div class="text-5xl font-bold text-blue-900 mb-3">500+</div>
                <p class="text-blue-800 font-semibold text-lg">Partner Universities</p>
                <p class="text-blue-600 text-sm mt-2">World-class institutions</p>
            </div>
            <div
                class="bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:scale-105 border-l-4 border-green-600 float-animation">
                <div class="text-5xl font-bold text-blue-900 mb-3">50K+</div>
                <p class="text-blue-800 font-semibold text-lg">Students Helped</p>
                <p class="text-blue-600 text-sm mt-2">Successful placements</p>
            </div>
            <div
                class="bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:scale-105 border-l-4 border-blue-600 float-animation">
                <div class="text-5xl font-bold text-blue-900 mb-3">100+</div>
                <p class="text-blue-800 font-semibold text-lg">Countries Covered</p>
                <p class="text-blue-600 text-sm mt-2">Global opportunities</p>
            </div>
            <div
                class="bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:scale-105 border-l-4 border-green-600 float-animation">
                <div class="text-5xl font-bold text-blue-900 mb-3">95%</div>
                <p class="text-blue-800 font-semibold text-lg">Success Rate</p>
                <p class="text-blue-600 text-sm mt-2">Proven track record</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-slate-800 mb-4">Frequently Asked Questions</h2>
        <p class="text-xl text-center text-slate-600 mb-16 max-w-3xl mx-auto">Get answers to common questions about
            studying abroad</p>
        <div class="max-w-4xl mx-auto space-y-6">
            <div
                class="bg-white rounded-2xl shadow-md p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-emerald-500">
                <h3 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                    <span class="bg-emerald-100 text-emerald-700 rounded-full p-2 mr-4">❓</span>
                    How do I choose the right university for me?
                </h3>
                <p class="text-slate-600 leading-relaxed">We help you evaluate universities based on your academic
                    profile, career goals, budget, and personal preferences. Our AI-powered matching system considers
                    factors like acceptance rates, program quality, location, and cost of living to recommend the best
                    options for you.</p>
            </div>
            <div
                class="bg-white rounded-2xl shadow-md p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-emerald-500">
                <h3 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                    <span class="bg-emerald-100 text-emerald-700 rounded-full p-2 mr-4">💰</span>
                    What scholarships am I eligible for?
                </h3>
                <p class="text-slate-600 leading-relaxed">We maintain a comprehensive database of scholarships from
                    universities, governments, and private organizations. Our team helps identify scholarships based on
                    your nationality, field of study, academic merit, and financial need, potentially saving you
                    thousands of dollars.</p>
            </div>
            <div
                class="bg-white rounded-2xl shadow-md p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-emerald-500">
                <h3 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                    <span class="bg-emerald-100 text-emerald-700 rounded-full p-2 mr-4">📋</span>
                    What documents do I need for my application?
                </h3>
                <p class="text-slate-600 leading-relaxed">Required documents typically include academic transcripts,
                    standardized test scores (TOEFL/IELTS, GRE/GMAT), letters of recommendation, personal statement, and
                    financial statements. We provide detailed checklists and guidance for each document.</p>
            </div>
            <div
                class="bg-white rounded-2xl shadow-md p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-emerald-500">
                <h3 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                    <span class="bg-emerald-100 text-emerald-700 rounded-full p-2 mr-4">🛂</span>
                    How long does the visa process take?
                </h3>
                <p class="text-slate-600 leading-relaxed">Visa processing times vary by country and visa type, typically
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
<section class="bg-white py-16 border-t-4 border-b-4 border-blue-500">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to Start Your Journey?</h2>
        <p class="text-xl text-blue-100 mb-8">Join thousands of students who have successfully studied abroad with our
            help.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('search') }}"
                class="bg-white text-blue-700 px-8 py-3 rounded-full font-semibold hover:bg-blue-50 transition shadow-lg pulse-glow">Search
                Programs</a>
            <a href="{{ route('applications.create') }}"
                class="bg-green-700 border-2 border-green-700 text-white px-8 py-3 rounded-full font-semibold hover:bg-green-800 hover:border-green-800 transition shimmer">Apply
                Now</a>
        </div>
    </div>
</section>

<!-- Popular Destinations Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-blue-900 mb-4">Popular Study Destinations</h2>
        <p class="text-xl text-center text-blue-700 mb-16 max-w-3xl mx-auto">Explore the world's most sought-after
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
                        <div class="text-6xl mb-2">UK</div>
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
                <div class="h-48 bg-gradient-to-br from-red-400 to-yellow-600 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="text-6xl mb-2">CA</div>
                        <h3 class="text-2xl font-bold">Canada</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">High-quality education with excellent post-study work opportunities.
                        Known for research excellence.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">20+ Universities</span>
                        <span class="bg-pink-100 text-black-600 px-3 py-1 rounded-full text-sm font-semibold">Work
                            Opportunities</span>
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
            class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-blue-500">
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
            class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-green-500">
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
            class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-purple-500">
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
            class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-orange-500">
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
            class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-pink-500">
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
            class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-teal-500">
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
<section class="bg-white py-20 border-t-4 border-b-4 border-pink-500">
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
<section class="bg-white py-20">
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
                <a href="{{ route('applications.create') }}"
                    class="bg-green-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Explore
                    Guides</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-green-500">
                <div class="text-6xl mb-6">💰</div>
                <h3 class="font-bold text-xl mb-3 text-green-700">Financial Planning</h3>
                <p class="text-gray-600 mb-4">Budget calculators, scholarship databases, and financial aid resources for
                    international students.</p>
                <a href="{{ route('scholarships.index') }}"
                    class="bg-green-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Plan
                    Finances</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-purple-500">
                <div class="text-6xl mb-6">🏠</div>
                <h3 class="font-bold text-xl mb-3 text-purple-700">Accommodation Finder</h3>
                <p class="text-gray-600 mb-4">Find student housing, dormitories, and off-campus apartments in your
                    destination city.</p>
                <a href="{{ route('universities.index') }}"
                    class="bg-purple-500 text-white px-6 py-2 rounded-full hover:bg-purple-600 transition">Find
                    Housing</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-orange-500">
                <div class="text-6xl mb-6">🌍</div>
                <h3 class="font-bold text-xl mb-3 text-orange-700">Cultural Guides</h3>
                <p class="text-gray-600 mb-4">Cultural adaptation tips, language resources, and local insights for your
                    destination country.</p>
                <a href="{{ route('countries.index') }}"
                    class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition">Learn
                    Culture</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-pink-500">
                <div class="text-6xl mb-6">💼</div>
                <h3 class="font-bold text-xl mb-3 text-pink-700">Career Services</h3>
                <p class="text-gray-600 mb-4">Resume building, job search assistance, and internship opportunities for
                    international students.</p>
                <a href="{{ route('posts.index') }}"
                    class="bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition">Build
                    Career</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-teal-500">
                <div class="text-6xl mb-6">👥</div>
                <h3 class="font-bold text-xl mb-3 text-teal-700">Student Community</h3>
                <p class="text-gray-600 mb-4">Connect with fellow international students, join study groups, and share
                    experiences.</p>
                <a href="{{ route('reviews.index') }}"
                    class="bg-teal-500 text-white px-6 py-2 rounded-full hover:bg-teal-600 transition">Join
                    Community</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-indigo-500">
                <div class="text-6xl mb-6">📱</div>
                <h3 class="font-bold text-xl mb-3 text-indigo-700">Mobile App</h3>
                <p class="text-gray-600 mb-4">Access all our services on-the-go with our mobile app for iOS and Android
                    devices.</p>
                <a href="{{ route('about-us') }}"
                    class="bg-indigo-500 text-white px-6 py-2 rounded-full hover:bg-indigo-600 transition">Download
                    App</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-red-500">
                <div class="text-6xl mb-6">🎓</div>
                <h3 class="font-bold text-xl mb-3 text-red-700">Alumni Network</h3>
                <p class="text-gray-600 mb-4">Connect with successful alumni for mentorship, career advice, and
                    networking opportunities.</p>
                <a href="{{ route('reviews.index') }}"
                    class="bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition">Join
                    Network</a>
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
                    <form action="{{ route('events.register', 1) }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800 transition">Register
                            Now</button>
                    </form>
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

<!-- Accreditation & Partnerships Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Trusted by Leading Institutions</h2>
        <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">We are accredited and partnered with
            world-renowned organizations ensuring quality education and support</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="bg-white p-8 rounded-2xl text-center border-2 border-blue-200">
                <div class="text-6xl mb-4">🏛️</div>
                <h3 class="font-bold text-xl mb-2 text-blue-700">ICEF Certified</h3>
                <p class="text-gray-600">International Consultants for Education and Fairs certified partner</p>
            </div>
            <div class="bg-white p-8 rounded-2xl text-center border-2 border-green-200">
                <div class="text-6xl mb-4">🎓</div>
                <h3 class="font-bold text-xl mb-2 text-green-700">QS Partner</h3>
                <p class="text-gray-600">Official partner of QS World University Rankings</p>
            </div>
            <div class="bg-white p-8 rounded-2xl text-center border-2 border-purple-200">
                <div class="text-6xl mb-4">🌍</div>
                <h3 class="font-bold text-xl mb-2 text-purple-700">UNESCO Alliance</h3>
                <p class="text-gray-600">Member of UNESCO's global education network</p>
            </div>
            <div class="bg-white p-8 rounded-2xl text-center border-2 border-orange-200">
                <div class="text-6xl mb-4">⭐</div>
                <h3 class="font-bold text-xl mb-2 text-orange-700">ISO Certified</h3>
                <p class="text-gray-600">ISO 9001:2015 certified for quality management</p>
            </div>
        </div>
        <div class="text-center">
            <h3 class="text-2xl font-bold text-gray-800 mb-8">Our University Partners</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 opacity-60">
                <div class="text-center">
                    <div class="text-4xl mb-2">🎓</div>
                    <p class="text-sm font-semibold text-gray-600">Harvard</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🏛️</div>
                    <p class="text-sm font-semibold text-gray-600">Oxford</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🎓</div>
                    <p class="text-sm font-semibold text-gray-600">Stanford</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🏫</div>
                    <p class="text-sm font-semibold text-gray-600">Cambridge</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🎓</div>
                    <p class="text-sm font-semibold text-gray-600">MIT</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🏛️</div>
                    <p class="text-sm font-semibold text-gray-600">Yale</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Study Abroad Process Timeline -->
<section class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Your Study Abroad Journey</h2>
        <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">Follow our proven 8-step process to
            successfully study abroad</p>
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div
                        class="bg-blue-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        1</div>
                    <h3 class="font-bold text-xl mb-3 text-blue-700">Free Consultation</h3>
                    <p class="text-gray-600">Discuss your goals, budget, and preferences with our expert counselors</p>
                    <div class="mt-4 text-sm text-gray-500">Week 1</div>
                </div>
                <div class="text-center">
                    <div
                        class="bg-green-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        2</div>
                    <h3 class="font-bold text-xl mb-3 text-green-700">University Selection</h3>
                    <p class="text-gray-600">Get personalized university recommendations based on your profile</p>
                    <div class="mt-4 text-sm text-gray-500">Week 2-3</div>
                </div>
                <div class="text-center">
                    <div
                        class="bg-purple-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        3</div>
                    <h3 class="font-bold text-xl mb-3 text-purple-700">Application Preparation</h3>
                    <p class="text-gray-600">Complete application forms, write SOPs, and prepare required documents</p>
                    <div class="mt-4 text-sm text-gray-500">Week 4-8</div>
                </div>
                <div class="text-center">
                    <div
                        class="bg-orange-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        4</div>
                    <h3 class="font-bold text-xl mb-3 text-orange-700">Test Preparation</h3>
                    <p class="text-gray-600">Prepare for IELTS/TOEFL, GRE/GMAT with our expert coaching</p>
                    <div class="mt-4 text-sm text-gray-500">Week 6-12</div>
                </div>
                <div class="text-center">
                    <div
                        class="bg-pink-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        5</div>
                    <h3 class="font-bold text-xl mb-3 text-pink-700">Application Submission</h3>
                    <p class="text-gray-600">Submit applications to multiple universities with our assistance</p>
                    <div class="mt-4 text-sm text-gray-500">Week 10-16</div>
                </div>
                <div class="text-center">
                    <div
                        class="bg-teal-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        6</div>
                    <h3 class="font-bold text-xl mb-3 text-teal-700">Offer & Acceptance</h3>
                    <p class="text-gray-600">Receive offers and make informed decisions about your future</p>
                    <div class="mt-4 text-sm text-gray-500">Week 16-20</div>
                </div>
                <div class="text-center">
                    <div
                        class="bg-indigo-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        7</div>
                    <h3 class="font-bold text-xl mb-3 text-indigo-700">Visa Processing</h3>
                    <p class="text-gray-600">Complete visa applications with our dedicated visa assistance team</p>
                    <div class="mt-4 text-sm text-gray-500">Week 20-24</div>
                </div>
                <div class="text-center">
                    <div
                        class="bg-red-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        8</div>
                    <h3 class="font-bold text-xl mb-3 text-red-700">Pre-Departure Support</h3>
                    <p class="text-gray-600">Get accommodation, airport pickup, and orientation before departure</p>
                    <div class="mt-4 text-sm text-gray-500">Week 24+</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost Comparison Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Study Abroad Cost Comparison</h2>
        <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">Compare tuition fees, living costs, and
            potential savings across popular destinations</p>
        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-2xl shadow-xl overflow-hidden">
                <thead class="bg-gradient-to-r from-blue-600 to-purple-600 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left">Country</th>
                        <th class="px-6 py-4 text-center">Avg. Tuition ($/year)</th>
                        <th class="px-6 py-4 text-center">Living Cost ($/month)</th>
                        <th class="px-6 py-4 text-center">Total Cost ($/year)</th>
                        <th class="px-6 py-4 text-center">Scholarship Potential</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-white">
                        <td class="px-6 py-4 font-semibold text-gray-800">🇺🇸 United States</td>
                        <td class="px-6 py-4 text-center">$25,000 - $55,000</td>
                        <td class="px-6 py-4 text-center">$1,200 - $2,500</td>
                        <td class="px-6 py-4 text-center">$37,200 - $79,000</td>
                        <td class="px-6 py-4 text-center"><span
                                class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">High (50%+)</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-white">
                        <td class="px-6 py-4 font-semibold text-gray-800">🇬🇧 United Kingdom</td>
                        <td class="px-6 py-4 text-center">$15,000 - $30,000</td>
                        <td class="px-6 py-4 text-center">$1,000 - $1,800</td>
                        <td class="px-6 py-4 text-center">$27,000 - $45,600</td>
                        <td class="px-6 py-4 text-center"><span
                                class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">High (40%+)</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-white">
                        <td class="px-6 py-4 font-semibold text-gray-800">🇦🇺 Australia</td>
                        <td class="px-6 py-4 text-center">$20,000 - $35,000</td>
                        <td class="px-6 py-4 text-center">$1,200 - $2,000</td>
                        <td class="px-6 py-4 text-center">$34,400 - $51,000</td>
                        <td class="px-6 py-4 text-center"><span
                                class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm">Medium
                                (30%+)</span></td>
                    </tr>
                    <tr class="hover:bg-white">
                        <td class="px-6 py-4 font-semibold text-gray-800">🇨🇦 Canada</td>
                        <td class="px-6 py-4 text-center">$12,000 - $25,000</td>
                        <td class="px-6 py-4 text-center">$800 - $1,500</td>
                        <td class="px-6 py-4 text-center">$21,600 - $39,000</td>
                        <td class="px-6 py-4 text-center"><span
                                class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">High (35%+)</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-white">
                        <td class="px-6 py-4 font-semibold text-gray-800">🇩🇪 Germany</td>
                        <td class="px-6 py-4 text-center">$0 - $500</td>
                        <td class="px-6 py-4 text-center">$800 - $1,200</td>
                        <td class="px-6 py-4 text-center">$9,600 - $14,400</td>
                        <td class="px-6 py-4 text-center"><span
                                class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Low (10%+)</span></td>
                    </tr>
                    <tr class="hover:bg-white">
                        <td class="px-6 py-4 font-semibold text-gray-800">🇳🇱 Netherlands</td>
                        <td class="px-6 py-4 text-center">$8,000 - $15,000</td>
                        <td class="px-6 py-4 text-center">$900 - $1,400</td>
                        <td class="px-6 py-4 text-center">$19,800 - $31,800</td>
                        <td class="px-6 py-4 text-center"><span
                                class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm">Medium
                                (25%+)</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-8">
            <p class="text-gray-600 mb-4">*Costs are approximate and can vary based on location, lifestyle, and currency
                exchange rates</p>
            <button class="bg-blue-500 text-white px-8 py-3 rounded-full hover:bg-blue-600 transition font-semibold">Get
                Detailed Cost Analysis</button>
        </div>
    </div>
</section>

<!-- Admission Requirements Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Admission Requirements by Country</h2>
        <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">Understand the specific requirements for
            your dream destination</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border-l-4 border-blue-500">
                <div class="flex items-center mb-6">
                    <div class="text-4xl mr-4">🇺🇸</div>
                    <h3 class="font-bold text-2xl text-blue-700">United States</h3>
                </div>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <span class="bg-blue-100 text-blue-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>GPA:</strong> 3.0+ (undergraduate), 3.5+ (graduate)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-blue-100 text-blue-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>English:</strong> TOEFL 80+ or IELTS 6.5+</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-blue-100 text-blue-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Tests:</strong> SAT/ACT (undergrad), GRE/GMAT (grad)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-blue-100 text-blue-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Documents:</strong> Transcripts, LORs, SOP</span>
                    </li>
                </ul>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border-l-4 border-red-500">
                <div class="flex items-center mb-6">
                    <div class="text-4xl mr-4">🇬🇧</div>
                    <h3 class="font-bold text-2xl text-red-700">United Kingdom</h3>
                </div>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <span class="bg-red-100 text-red-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>GPA:</strong> 3.0+ or equivalent grades</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-red-100 text-red-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>English:</strong> IELTS 6.0-7.0+ (varies by course)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-red-100 text-red-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Tests:</strong> UCAS application system</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-red-100 text-red-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Documents:</strong> Personal statement, references</span>
                    </li>
                </ul>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border-l-4 border-green-500">
                <div class="flex items-center mb-6">
                    <div class="text-4xl mr-4">🇦🇺</div>
                    <h3 class="font-bold text-2xl text-green-700">Australia</h3>
                </div>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <span class="bg-green-100 text-green-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>GPA:</strong> 2.8+ or ATAR equivalent</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-green-100 text-green-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>English:</strong> IELTS 6.5+ or PTE 58+</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-green-100 text-green-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Tests:</strong> No standardized tests required</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-green-100 text-green-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Documents:</strong> Academic transcripts, CV</span>
                    </li>
                </ul>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border-l-4 border-orange-500">
                <div class="flex items-center mb-6">
                    <div class="text-4xl mr-4">🇨🇦</div>
                    <h3 class="font-bold text-2xl text-orange-700">Canada</h3>
                </div>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <span class="bg-orange-100 text-orange-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>GPA:</strong> 3.0+ (B average)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-orange-100 text-orange-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>English:</strong> IELTS 6.5+ or TOEFL 86+</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-orange-100 text-orange-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Tests:</strong> No entrance exams for most programs</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-orange-100 text-orange-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Documents:</strong> Transcripts, LORs, SOP</span>
                    </li>
                </ul>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border-l-4 border-purple-500">
                <div class="flex items-center mb-6">
                    <div class="text-4xl mr-4">🇩🇪</div>
                    <h3 class="font-bold text-2xl text-purple-700">Germany</h3>
                </div>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <span class="bg-purple-100 text-purple-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>GPA:</strong> 2.5+ or equivalent</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-purple-100 text-purple-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>English:</strong> IELTS 6.0+ (for English programs)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-purple-100 text-purple-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Tests:</strong> TestAS for some technical programs</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-purple-100 text-purple-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Documents:</strong> University entrance qualification</span>
                    </li>
                </ul>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border-l-4 border-teal-500">
                <div class="flex items-center mb-6">
                    <div class="text-4xl mr-4">🇳🇱</div>
                    <h3 class="font-bold text-2xl text-teal-700">Netherlands</h3>
                </div>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <span class="bg-teal-100 text-teal-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>GPA:</strong> 3.0+ or equivalent</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-teal-100 text-teal-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>English:</strong> IELTS 6.5+ or TOEFL 90+</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-teal-100 text-teal-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Tests:</strong> No entrance exams for most programs</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-teal-100 text-teal-600 rounded-full p-1 mr-3 mt-0.5">✓</span>
                        <span><strong>Documents:</strong> Motivation letter, CV, references</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Post-Study Work Opportunities Section -->
<section class="bg-gradient-to-r from-indigo-900 via-purple-900 to-pink-900 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-white mb-4">Post-Study Work Opportunities</h2>
        <p class="text-xl text-center text-white mb-16 max-w-3xl mx-auto">Maximize your international education
            investment with work opportunities after graduation</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl">🇺🇸</div>
                    <div class="bg-yellow-400 text-blue-900 px-3 py-1 rounded-full text-sm font-bold">OPT</div>
                </div>
                <h3 class="font-bold text-xl mb-3 text-white">United States - OPT Program</h3>
                <ul class="text-gray-300 space-y-2 mb-4">
                    <li>• 12 months for STEM graduates</li>
                    <li>• 36 months for STEM extensions</li>
                    <li>• Work authorization for F-1 students</li>
                    <li>• Path to H-1B visa</li>
                </ul>
                <div class="text-yellow-400 font-semibold">Average Salary: $65,000+</div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl">🇬🇧</div>
                    <div class="bg-yellow-400 text-blue-900 px-3 py-1 rounded-full text-sm font-bold">PSW</div>
                </div>
                <h3 class="font-bold text-xl mb-3 text-white">United Kingdom - PSW Visa</h3>
                <ul class="text-gray-300 space-y-2 mb-4">
                    <li>• 2 years work permission</li>
                    <li>• Any job, any salary level</li>
                    <li>• Extendable in some cases</li>
                    <li>• Path to skilled worker visa</li>
                </ul>
                <div class="text-yellow-400 font-semibold">Average Salary: £35,000+</div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl">🇦🇺</div>
                    <div class="bg-yellow-400 text-blue-900 px-3 py-1 rounded-full text-sm font-bold">485</div>
                </div>
                <h3 class="font-bold text-xl mb-3 text-white">Australia - 485 Visa</h3>
                <ul class="text-gray-300 space-y-2 mb-4">
                    <li>• 18 months for graduates</li>
                    <li>• 4 years for PhD graduates</li>
                    <li>• Work rights in any occupation</li>
                    <li>• Pathway to PR</li>
                </ul>
                <div class="text-yellow-400 font-semibold">Average Salary: AUD 70,000+</div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl">🇨🇦</div>
                    <div class="bg-yellow-400 text-blue-900 px-3 py-1 rounded-full text-sm font-bold">PGWP</div>
                </div>
                <h3 class="font-bold text-xl mb-3 text-white">Canada - PGWP</h3>
                <ul class="text-gray-300 space-y-2 mb-4">
                    <li>• 8-36 months based on program length</li>
                    <li>• Open work permit</li>
                    <li>• Express Entry points</li>
                    <li>• Direct path to permanent residency</li>
                </ul>
                <div class="text-yellow-400 font-semibold">Average Salary: CAD 60,000+</div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl">🇩🇪</div>
                    <div class="bg-yellow-400 text-blue-900 px-3 py-1 rounded-full text-sm font-bold">Job Seeker</div>
                </div>
                <h3 class="font-bold text-xl mb-3 text-white">Germany - Job Seeker Visa</h3>
                <ul class="text-gray-300 space-y-2 mb-4">
                    <li>• 6 months to find work</li>
                    <li>• Extendable if job found</li>
                    <li>• EU Blue Card pathway</li>
                    <li>• Strong economy with high demand</li>
                </ul>
                <div class="text-yellow-400 font-semibold">Average Salary: €45,000+</div>
            </div>
            <div
                class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                <div class="flex items-center justify-between mb-6">
                    <div class="text-4xl">🇳🇱</div>
                    <div class="bg-yellow-400 text-blue-900 px-3 py-1 rounded-full text-sm font-bold">Orientation</div>
                </div>
                <h3 class="font-bold text-xl mb-3 text-white">Netherlands - Orientation Year</h3>
                <ul class="text-gray-300 space-y-2 mb-4">
                    <li>• 1 year to find work or start business</li>
                    <li>• No job offer required initially</li>
                    <li>• Highly skilled migrant visa pathway</li>
                    <li>• English widely spoken</li>
                </ul>
                <div class="text-yellow-400 font-semibold">Average Salary: €40,000+</div>
            </div>
        </div>
    </div>
</section>

<!-- Pre-Departure Preparation Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Pre-Departure Preparation</h2>
        <p class="text-xl text-center text-gray-600 mb-16 max-w-3xl mx-auto">Get fully prepared for your study abroad
            journey with our comprehensive support</p>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="text-center bg-white p-8 rounded-2xl shadow-lg hover:scale-105 transition-transform border-2 border-blue-200">
                <div class="text-6xl mb-6">🏠</div>
                <h3 class="font-bold text-xl mb-3 text-blue-700">Accommodation</h3>
                <p class="text-gray-600 mb-4">Pre-arranged housing options including dormitories, apartments, and
                    homestays with verified landlords.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• Airport pickup included</li>
                    <li>• Fully furnished options</li>
                    <li>• Utilities setup assistance</li>
                </ul>
            </div>
            <div
                class="text-center bg-white p-8 rounded-2xl shadow-lg hover:scale-105 transition-transform border-2 border-green-200">
                <div class="text-6xl mb-6">💳</div>
                <h3 class="font-bold text-xl mb-3 text-green-700">Banking & Finance</h3>
                <p class="text-gray-600 mb-4">International bank account setup, currency exchange guidance, and
                    financial planning for your stay.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• Multi-currency accounts</li>
                    <li>• Debit card applications</li>
                    <li>• Money transfer services</li>
                </ul>
            </div>
            <div
                class="text-center bg-white p-8 rounded-2xl shadow-lg hover:scale-105 transition-transform border-2 border-purple-200">
                <div class="text-6xl mb-6">🏥</div>
                <h3 class="font-bold text-xl mb-3 text-purple-700">Health Insurance</h3>
                <p class="text-gray-600 mb-4">Comprehensive health insurance coverage, medical checkups, and emergency
                    assistance services for international students.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• Student health plans</li>
                    <li>• Emergency medical coverage</li>
                    <li>• Dental and vision care</li>
                </ul>
            </div>
            <div
                class="text-center bg-white p-8 rounded-2xl shadow-lg hover:scale-105 transition-transform border-2 border-orange-200">
                <div class="text-6xl mb-6">🌍</div>
                <h3 class="font-bold text-xl mb-3 text-orange-700">Cultural Orientation</h3>
                <p class="text-gray-600 mb-4">Cultural adaptation workshops, language classes, and local customs
                    guidance to help you settle in smoothly.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• Cultural sensitivity training</li>
                    <li>• Language immersion programs</li>
                    <li>• Local community connections</li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- Floating Chat Button -->
<div class="fixed bottom-6 right-6 z-50">
    <a href="{{ route('chat.index') }}"
        class="bg-blue-600 hover:bg-blue-700 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 group pulse-glow">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
            </path>
        </svg>
    </a>
    <!-- Tooltip -->
    <div
        class="absolute bottom-full right-0 mb-2 px-3 py-1 bg-gray-800 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
        Chat with us
        <div
            class="absolute top-full right-4 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
        </div>
    </div>
</div>

<!-- Floating Social Media Icons - Dynamic & Circular (Hidden by default) -->
<div
    class="fixed right-0 top-1/2 transform -translate-y-1/2 translate-x-12 hover:translate-x-0 transition-transform duration-500 ease-in-out z-40 group/container">
    <div class="flex flex-col space-y-6 pr-4">
        @foreach($socialLinks as $index => $social)
            <a href="{{ $social->url }}" target="_blank"
                class="group relative {{ $social->bg_color }} {{ $social->hover_color }} text-white w-14 h-14 rounded-full flex items-center justify-center shadow-xl transition-all duration-500 hover:scale-110 hover:rotate-6 ring-2 ring-white ring-opacity-50 hover:ring-4 hover:ring-opacity-100 z-10"
                style="animation: pulse-{{ $index }} 3s ease-in-out infinite {{ $index * 0.3 }}s;"
                title="{{ $social->platform }}">

                <!-- Icon -->
                <div
                    class="w-7 h-7 flex items-center justify-center relative z-10 transition-transform duration-300 group-hover:scale-110">
                    {!! $social->icon_svg !!}
                </div>

                <!-- Platform Name Badge - Shows on Hover -->
                <div
                    class="absolute right-full mr-3 px-4 py-2 bg-gray-900 text-white text-sm font-semibold rounded-lg shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 whitespace-nowrap transform group-hover:translate-x-0 translate-x-4 z-50">
                    {{ $social->platform }}
                    <!-- Arrow pointing to icon -->
                    <div class="absolute right-0 top-1/2 transform translate-x-full -translate-y-1/2">
                        <div
                            class="w-0 h-0 border-t-8 border-t-transparent border-b-8 border-b-transparent border-l-8 border-l-gray-900">
                        </div>
                    </div>
                </div>

                <!-- Glowing effect on hover -->
                <div class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-70 transition-opacity duration-300 blur-md -z-10"
                    style="background: inherit;"></div>
            </a>
        @endforeach
    </div>
</div>

<!-- Pulse Animation Styles for Social Icons -->
<style>
    <blade keyframes|%20pulse-0%20%7B%0D>0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
    }

    <blade keyframes|%20pulse-1%20%7B%0D>0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
    }

    <blade keyframes|%20pulse-2%20%7B%0D>0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
    }

    <blade keyframes|%20pulse-3%20%7B%0D>0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
    }

    <blade keyframes|%20pulse-4%20%7B%0D>0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
    }

    <blade keyframes|%20pulse-5%20%7B%0D>0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
    }

</style>

@endsection

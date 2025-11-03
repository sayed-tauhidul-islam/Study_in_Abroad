@extends('layouts.app')

@section('title', 'GlobalEduHub | Home - Your Gateway to Worldwide Education')

@section('content')

<!-- Hero Section with Elegant Slideshow -->
<section class="relative py-20 border-b-4 border-blue-500" x-data="{
    images: [
        {src: 'https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Harvard University', caption: 'Top Universities Worldwide'},
        {src: 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Oxford University', caption: 'Historic Academic Excellence'},
        {src: 'https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Stanford Campus', caption: 'World-Class Education'},
        {src: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'International Students', caption: 'Diverse Student Community'},
        {src: 'https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Modern Campus', caption: 'State-of-the-Art Facilities'},
        {src: 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Students Studying', caption: 'Academic Support & Resources'},
        {src: 'https://images.unsplash.com/photo-1513258496099-48168024aec0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Graduation Success', caption: '95% Student Success Rate'},
        {src: 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Campus Activities', caption: 'Vibrant Campus Life'},
        {src: 'https://images.unsplash.com/photo-1519452635265-7b1fbfd1e4e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'University Campus', caption: 'Beautiful Campus Environments'},
        {src: 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Library Study', caption: 'World-Class Libraries'},
        {src: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Team Project', caption: 'Collaborative Learning'},
        {src: 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Lecture Hall', caption: 'Interactive Classrooms'},
        {src: 'https://images.unsplash.com/photo-1503676382389-4809596d5290?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Global Education', caption: 'International Opportunities'},
        {src: 'https://images.unsplash.com/photo-1576495199011-eb94736d05d6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Students Campus Walk', caption: 'Campus Community'},
        {src: 'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Classroom Learning', caption: 'Quality Education'},
        {src: 'https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=95', alt: 'Students Together', caption: 'Friendship & Networking'}
    ],
    current: 0,
    next() {
        this.current = (this.current + 1) % this.images.length;
    },
    prev() {
        this.current = this.current === 0 ? this.images.length - 1 : this.current - 1;
    },
    interval: null,
    start() { 
        this.interval = setInterval(() => this.next(), 3000);
    },
    stop() { 
        if (this.interval) {
            clearInterval(this.interval);
            this.interval = null;
        }
    },
    init() { 
        this.start();
    }
}">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
        <!-- Left Content -->
        <div class="md:w-1/2 mb-10 md:mb-0">
            <h1 class="text-5xl font-extrabold mb-6 leading-tight text-gray-900">
                Explore Your
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-green-600 mt-2">
                    Study Abroad
                </span>
                <span class="block mt-2 text-gray-800">Opportunities</span>
            </h1>
            <p class="text-lg mb-8 text-gray-700 leading-relaxed">
                Find the best universities and programs around the world. Start your journey to study abroad with us
                today!
            </p>

            <div class="flex items-center space-x-4 mb-6">
                <form action="{{ route('search') }}" method="GET"
                    class="flex items-center w-full max-w-lg shadow-lg rounded-lg overflow-hidden bg-white">
                    <input type="text" name="query" placeholder="Search universities, courses, countries..."
                        class="flex-1 px-4 py-3 focus:outline-none text-gray-900" />
                    <button type="submit"
                        class="bg-green-700 text-white px-6 py-3 font-bold hover:bg-green-800 transition duration-300">
                        Search
                    </button>
                </form>
            </div>

            <a href="{{ route('applications.create') }}"
                class="inline-block bg-green-700 text-white px-8 py-4 rounded-lg font-semibold hover:bg-green-800 transition duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Apply Now →
            </a>
        </div>

        <!-- Right Slideshow -->
        <div class="md:w-1/2 flex flex-col items-center justify-center">
            <div class="relative w-full max-w-lg">
                <!-- Main Image Container -->
                <div class="relative w-full h-96 rounded-2xl overflow-hidden shadow-2xl">
                    <!-- Images with Fade Effect -->
                    <template x-for="(img, idx) in images" :key="idx">
                        <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
                            :class="idx === current ? 'opacity-100 z-10' : 'opacity-0 z-0'">
                            <img :src="img.src" :alt="img.alt" class="w-full h-full object-cover" />
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <!-- Caption -->
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-white text-2xl font-bold drop-shadow-lg" x-text="img.caption"></h3>
                            </div>
                        </div>
                    </template>

                    <!-- Navigation Arrows -->
                    <button @click="prev(); stop();" @mouseenter="stop()"
                        class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 backdrop-blur-sm hover:bg-green-700 text-green-700 hover:text-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 focus:outline-none group">
                        <svg class='h-6 w-6 group-hover:-translate-x-0.5 transition-transform' fill='none'
                            viewBox='0 0 24 24' stroke='currentColor' stroke-width='2.5'>
                            <path stroke-linecap='round' stroke-linejoin='round' d='M15 19l-7-7 7-7' />
                        </svg>
                    </button>
                    <button @click="next(); stop();" @mouseenter="stop()"
                        class="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 backdrop-blur-sm hover:bg-green-700 text-green-700 hover:text-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 focus:outline-none group">
                        <svg class='h-6 w-6 group-hover:translate-x-0.5 transition-transform' fill='none'
                            viewBox='0 0 24 24' stroke='currentColor' stroke-width='2.5'>
                            <path stroke-linecap='round' stroke-linejoin='round' d='M9 5l7 7-7 7' />
                        </svg>
                    </button>
                </div>

                <!-- Dot Indicators -->
                <div class="flex justify-center items-center gap-2 mt-6">
                    <template x-for="(img, idx) in images" :key="idx">
                        <button @click="current = idx; stop();"
                            class="transition-all duration-300 rounded-full focus:outline-none"
                            :class="idx === current ? 'w-8 h-3 bg-green-700' : 'w-3 h-3 bg-gray-400 hover:bg-gray-500'">
                        </button>
                    </template>
                </div>

                <!-- Play/Pause Button -->
                <div class="text-center mt-4">
                    <button @click="interval ? stop() : start()"
                        class="text-sm text-gray-700 hover:text-green-700 font-semibold transition-colors flex items-center gap-2 mx-auto">
                        <span x-show="interval">⏸ Pause</span>
                        <span x-show="!interval">▶ Play</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<!-- Why Choose StudyAbroad Section - Enhanced Design -->
<section class="relative py-24 overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-fade-in-up">
            <div class="inline-block mb-4 animate-bounce">
                <span
                    class="bg-gradient-to-r from-green-700 via-blue-600 to-purple-600 text-white px-8 py-3 rounded-full text-sm font-bold tracking-wider uppercase shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:scale-110">
                    ✨ Why Choose GlobalEduHub
                </span>
            </div>
            <h2
                class="text-5xl md:text-7xl font-black mb-6 text-transparent bg-clip-text bg-gradient-to-r from-green-600 via-blue-600 to-purple-600 leading-tight animate-pulse">
                Why Choose GlobalEduHub?
            </h2>
            <p class="text-xl md:text-3xl text-gray-800 max-w-4xl mx-auto leading-relaxed font-semibold">
                We provide <span class="font-black text-green-700 underline decoration-wavy decoration-green-400">worldwide education connections</span> 
                to make your study abroad journey
                <span class="font-black text-blue-700 underline decoration-wavy decoration-blue-400">smooth, successful, and unforgettable.</span>
            </p>
        </div>

        <!-- Feature Cards Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1: Personalized Matching -->
            <div class="group relative">
                <div
                    class="absolute inset-0 bg-green-700 rounded-3xl blur-xl opacity-10 group-hover:opacity-20 transition-opacity duration-500">
                </div>
                <div
                    class="relative bg-white/90 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-200 overflow-hidden">
                    <!-- Decorative Corner -->
                    <div
                        class="absolute top-0 right-0 w-20 h-20 bg-green-700 rounded-bl-full opacity-5">
                    </div>

                    <!-- Icon Container -->
                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 mx-auto bg-green-700 rounded-2xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500 shadow-lg">
                            <span class="text-4xl">🎯</span>
                        </div>
                    </div>

                    <h3
                        class="font-bold text-2xl mb-3 text-gray-900 text-center group-hover:text-green-700 transition-all duration-300">
                        Personalized Matching
                    </h3>
                    <p class="text-gray-700 text-center leading-relaxed">
                        AI-powered recommendations based on your profile, preferences, and career goals.
                    </p>

                    <!-- Bottom Accent -->
                    <div
                        class="absolute bottom-0 left-0 right-0 h-1 bg-green-700 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                    </div>
                </div>
            </div>

            <!-- Card 2: Scholarship Assistance -->
            <div class="group relative">
                <div
                    class="absolute inset-0 bg-green-700 rounded-3xl blur-xl opacity-10 group-hover:opacity-20 transition-opacity duration-500">
                </div>
                <div
                    class="relative bg-white/90 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-200 overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-20 h-20 bg-green-700 rounded-bl-full opacity-5">
                    </div>

                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 mx-auto bg-green-700 rounded-2xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500 shadow-lg">
                            <span class="text-4xl">💰</span>
                        </div>
                    </div>

                    <h3
                        class="font-bold text-2xl mb-3 text-gray-900 text-center group-hover:text-green-700 transition-all duration-300">
                        Scholarship Assistance
                    </h3>
                    <p class="text-gray-700 text-center leading-relaxed">
                        Access to thousands of scholarships with expert application guidance and support.
                    </p>

                    <div
                        class="absolute bottom-0 left-0 right-0 h-1 bg-green-700 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                    </div>
                </div>
            </div>

            <!-- Card 3: Complete Support -->
            <div class="group relative">
                <div
                    class="absolute inset-0 bg-orange-600 rounded-3xl blur-xl opacity-10 group-hover:opacity-20 transition-opacity duration-500">
                </div>
                <div
                    class="relative bg-white/90 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-200 overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-20 h-20 bg-orange-600 rounded-bl-full opacity-5">
                    </div>

                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 mx-auto bg-orange-600 rounded-2xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500 shadow-lg">
                            <span class="text-4xl">📋</span>
                        </div>
                    </div>

                    <h3
                        class="font-bold text-2xl mb-3 text-gray-900 text-center group-hover:text-orange-600 transition-all duration-300">
                        Complete Support
                    </h3>
                    <p class="text-gray-700 text-center leading-relaxed">
                        From application to arrival - we handle every step of your journey with care.
                    </p>

                    <div
                        class="absolute bottom-0 left-0 right-0 h-1 bg-orange-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                    </div>
                </div>
            </div>

            <!-- Card 4: Success Guarantee -->
            <div class="group relative">
                <div
                    class="absolute inset-0 bg-red-600 rounded-3xl blur-xl opacity-10 group-hover:opacity-20 transition-opacity duration-500">
                </div>
                <div
                    class="relative bg-white/90 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-200 overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-20 h-20 bg-red-600 rounded-bl-full opacity-5">
                    </div>

                    <div class="relative mb-6">
                        <div
                            class="w-20 h-20 mx-auto bg-red-600 rounded-2xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500 shadow-lg">
                            <span class="text-4xl">🌟</span>
                        </div>
                    </div>

                    <h3
                        class="font-bold text-2xl mb-3 text-gray-900 text-center group-hover:text-red-600 transition-all duration-300">
                        Success Guarantee
                    </h3>
                    <p class="text-gray-700 text-center leading-relaxed">
                        <span class="font-bold text-red-600">95% success rate</span> with proven track record of successful student placements.
                    </p>

                    <div
                        class="absolute bottom-0 left-0 right-0 h-1 bg-red-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Benefits Banner -->
        <div class="mt-16 bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl p-8 border border-gray-200">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="transform hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl mb-3">⚡</div>
                    <h4 class="font-bold text-lg text-gray-800 mb-2">Fast Processing</h4>
                    <p class="text-gray-600 text-sm">Quick turnaround on applications and responses</p>
                </div>
                <div class="transform hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl mb-3">🔒</div>
                    <h4 class="font-bold text-lg text-gray-800 mb-2">Secure & Confidential</h4>
                    <p class="text-gray-600 text-sm">Your data is protected with highest security standards</p>
                </div>
                <div class="transform hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl mb-3">💬</div>
                    <h4 class="font-bold text-lg text-gray-800 mb-2">24/7 Support</h4>
                    <p class="text-gray-600 text-sm">Expert counselors available anytime to help you</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="container mx-auto px-4 py-16">
    <div class="grid md:grid-cols-3 gap-10">
        <div
            class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform border-2 border-gray-200 hover:border-green-700 shimmer">
            <div class="text-5xl mb-4">🌍</div>
            <h3 class="font-bold text-2xl mb-2 text-gray-900">Global Universities</h3>
            <p class="text-gray-700">Access a wide range of top universities from all over the world.</p>
        </div>
        <div
            class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform border-2 border-gray-200 hover:border-green-700 shimmer">
            <div class="text-5xl mb-4">🎓</div>
            <h3 class="font-bold text-2xl mb-2 text-gray-900">Diverse Programs</h3>
            <p class="text-gray-700">Choose from hundreds of programs to match your interests and goals.</p>
        </div>
        <div
            class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform border-2 border-gray-200 hover:border-green-700 shimmer">
            <div class="text-5xl mb-4">🤝</div>
            <h3 class="font-bold text-2xl mb-2 text-gray-900">Expert Guidance</h3>
            <p class="text-gray-700">Get support from our experienced counselors at every step.</p>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 border-t-4 border-b-4 border-green-700">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">Our Impact in Numbers</h2>
        <p class="text-xl text-center text-gray-700 mb-16">Trusted by students worldwide for their study abroad dreams
        </p>
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div
                class="bg-white/90 backdrop-blur-sm rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:scale-105 border-l-4 border-green-700 float-animation">
                <div class="text-5xl font-bold text-green-700 mb-3">500+</div>
                <p class="text-gray-900 font-semibold text-lg">Partner Universities</p>
                <p class="text-gray-700 text-sm mt-2">World-class institutions</p>
            </div>
            <div
                class="bg-white/90 backdrop-blur-sm rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:scale-105 border-l-4 border-orange-600 float-animation">
                <div class="text-5xl font-bold text-orange-600 mb-3">50K+</div>
                <p class="text-gray-900 font-semibold text-lg">Students Helped</p>
                <p class="text-gray-700 text-sm mt-2">Successful placements</p>
            </div>
            <div
                class="bg-white/90 backdrop-blur-sm rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:scale-105 border-l-4 border-green-700 float-animation">
                <div class="text-5xl font-bold text-green-700 mb-3">100+</div>
                <p class="text-gray-900 font-semibold text-lg">Countries Covered</p>
                <p class="text-gray-700 text-sm mt-2">Global opportunities</p>
            </div>
            <div
                class="bg-white/90 backdrop-blur-sm rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 hover:scale-105 border-l-4 border-red-600 float-animation">
                <div class="text-5xl font-bold text-red-600 mb-3">95%</div>
                <p class="text-gray-900 font-semibold text-lg">Success Rate</p>
                <p class="text-gray-700 text-sm mt-2">Proven track record</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<!-- FAQ Section - Enhanced Beautiful Design -->
<section class="relative py-24 overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span
                    class="bg-green-700 text-white px-6 py-2 rounded-full text-sm font-semibold tracking-wider uppercase shadow-lg">
                    💡 Got Questions?
                </span>
            </div>
            <h2
                class="text-5xl md:text-6xl font-extrabold mb-6 text-gray-900 leading-tight">
                Frequently Asked Questions
            </h2>
            <p class="text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                Get answers to <span class="font-bold text-green-700">common questions</span> about studying abroad
            </p>
        </div>

        <!-- FAQ Accordion -->
        <div class="max-w-5xl mx-auto space-y-6">
            <!-- FAQ 1 -->
            <div class="group">
                <div class="relative">
                    <!-- Glow Effect -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-600 rounded-2xl blur-lg opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>

                    <!-- Card -->
                    <div
                        class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-gray-100 hover:border-green-200 overflow-hidden">
                        <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(event, 'faq1')">
                            <div class="flex items-start justify-between gap-4">
                                <div class="flex items-start gap-4 flex-1">
                                    <!-- Icon -->
                                    <div
                                        class="flex-shrink-0 w-14 h-14 bg-green-700 rounded-xl flex items-center justify-center shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                        <span class="text-2xl">❓</span>
                                    </div>
                                    <!-- Question -->
                                    <div class="flex-1">
                                        <h3
                                            class="text-xl md:text-2xl font-bold text-gray-800 mb-2 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-600 group-hover:to-purple-600 transition-all">
                                            How do I choose the right university for me?
                                        </h3>
                                    </div>
                                </div>
                                <!-- Toggle Icon -->
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-gray-600 transform transition-transform duration-300 faq-icon"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                            <!-- Answer -->
                            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
                                <p class="text-gray-600 leading-relaxed mt-4 pl-18 text-lg">
                                    We help you evaluate universities based on your academic profile, career goals,
                                    budget, and personal preferences. Our AI-powered matching system considers factors
                                    like acceptance rates, program quality, location, and cost of living to recommend
                                    the best options for you.
                                </p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="group">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-green-400 to-emerald-600 rounded-2xl blur-lg opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-gray-100 hover:border-green-200 overflow-hidden">
                        <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(event, 'faq2')">
                            <div class="flex items-start justify-between gap-4">
                                <div class="flex items-start gap-4 flex-1">
                                    <div
                                        class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                        <span class="text-2xl">💰</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3
                                            class="text-xl md:text-2xl font-bold text-gray-800 mb-2 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-green-600 group-hover:to-emerald-600 transition-all">
                                            What scholarships am I eligible for?
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-gray-600 transform transition-transform duration-300 faq-icon"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
                                <p class="text-gray-600 leading-relaxed mt-4 pl-18 text-lg">
                                    We maintain a comprehensive database of scholarships from universities, governments,
                                    and private organizations. Our team helps identify scholarships based on your
                                    nationality, field of study, academic merit, and financial need, potentially saving
                                    you thousands of dollars.
                                </p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="group">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-600 rounded-2xl blur-lg opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-gray-100 hover:border-orange-200 overflow-hidden">
                        <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(event, 'faq3')">
                            <div class="flex items-start justify-between gap-4">
                                <div class="flex items-start gap-4 flex-1">
                                    <div
                                        class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                        <span class="text-2xl">📋</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3
                                            class="text-xl md:text-2xl font-bold text-gray-800 mb-2 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-orange-600 group-hover:to-red-600 transition-all">
                                            What documents do I need for my application?
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-gray-600 transform transition-transform duration-300 faq-icon"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
                                <p class="text-gray-600 leading-relaxed mt-4 pl-18 text-lg">
                                    Required documents typically include academic transcripts, standardized test scores
                                    (TOEFL/IELTS, GRE/GMAT), letters of recommendation, personal statement, and
                                    financial statements. We provide detailed checklists and guidance for each document.
                                </p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="group">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-pink-400 to-rose-600 rounded-2xl blur-lg opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-gray-100 hover:border-pink-200 overflow-hidden">
                        <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(event, 'faq4')">
                            <div class="flex items-start justify-between gap-4">
                                <div class="flex items-start gap-4 flex-1">
                                    <div
                                        class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-pink-500 to-rose-600 rounded-xl flex items-center justify-center shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                        <span class="text-2xl">🛂</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3
                                            class="text-xl md:text-2xl font-bold text-gray-800 mb-2 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-pink-600 group-hover:to-rose-600 transition-all">
                                            How long does the visa process take?
                                        </h3>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-gray-600 transform transition-transform duration-300 faq-icon"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500">
                                <p class="text-gray-600 leading-relaxed mt-4 pl-18 text-lg">
                                    Visa processing times vary by country and visa type, typically ranging from 2-12
                                    weeks. We help you prepare all required documents, schedule appointments, and
                                    provide tips to increase your approval chances. Most students receive their visas
                                    within 4-6 weeks.
                                </p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Banner -->
        <div class="mt-16 text-center">
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-8 inline-block border border-gray-200">
                <p class="text-gray-700 text-lg mb-4">Still have questions? <span
                        class="font-bold text-transparent bg-clip-text bg-gradient-to-r bg-green-700">We're
                        here to help!</span></p>
                <a href="{{ route('chat.index') }}"
                    class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r bg-green-700 text-white rounded-full font-semibold hover:bg-green-800 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                            clip-rule="evenodd" />
                    </svg>
                    Chat with Our Experts
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFAQ(event, faqId) {
        event.preventDefault();
        const button = event.currentTarget;
        const answer = button.querySelector('.faq-answer');
        const icon = button.querySelector('.faq-icon');

        // Toggle answer
        if (answer.style.maxHeight && answer.style.maxHeight !== '0px') {
            answer.style.maxHeight = '0px';
            icon.style.transform = 'rotate(0deg)';
        } else {
            answer.style.maxHeight = answer.scrollHeight + 'px';
            icon.style.transform = 'rotate(180deg)';
        }
    }

</script>

<!-- Student Success Stories Section - Dynamic Interactive Design -->
<section class="relative py-24 overflow-hidden" x-data="{
    activeStory: 0,
    stories: [
        {
            id: 0,
            name: 'Sarah Mitchell',
            university: 'Stanford University',
            program: 'Computer Science',
            country: 'USA',
            image: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop',
            campusImage: 'https://images.unsplash.com/photo-1562774053-701939374585?w=800&h=600&fit=crop',
            quote: 'StudyAbroad made my dream a reality! From application to visa approval, their support was exceptional.',
            achievement: 'Full Scholarship',
            color: 'from-green-600 to-emerald-600',
            accentColor: 'green'
        },
        {
            id: 1,
            name: 'James Chen',
            university: 'University of Oxford',
            program: 'Business Management',
            country: 'UK',
            image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop',
            campusImage: 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=800&h=600&fit=crop',
            quote: 'The counseling team helped me secure admission to my dream university. Forever grateful!',
            achievement: 'Top University',
            color: 'from-orange-600 to-red-600',
            accentColor: 'orange'
        },
        {
            id: 2,
            name: 'Maria Rodriguez',
            university: 'University of Toronto',
            program: 'Medicine',
            country: 'Canada',
            image: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop',
            campusImage: 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&h=600&fit=crop',
            quote: 'From visa processing to finding accommodation, StudyAbroad supported me at every step.',
            achievement: 'Medical Student',
            color: 'from-blue-600 to-cyan-600',
            accentColor: 'blue'
        }
    ]
}">
    <!-- Animated Background with Gradient Mesh -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-green-50 to-orange-50"></div>
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 -left-4 w-96 h-96 bg-green-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute top-0 -right-4 w-96 h-96 bg-orange-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>

    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 bg-green-700 text-white px-6 py-3 rounded-full mb-6 shadow-lg transform hover:scale-105 transition-transform duration-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span class="font-bold text-sm tracking-wider uppercase">Success Stories</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-4">
                Dreams Achieved <span class="text-green-700">Worldwide</span>
            </h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                Discover how our students transformed their aspirations into reality with <span class="font-bold text-orange-600">StudyAbroad</span>
            </p>
        </div>

        <!-- Interactive Story Showcase with Tab Navigation -->
        <div class="max-w-6xl mx-auto">
            <!-- Story Tab Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <template x-for="(story, index) in stories" :key="story.id">
                    <button 
                        @click="activeStory = index"
                        :class="activeStory === index ? 'bg-gradient-to-r ' + story.color + ' text-white scale-110' : 'bg-white text-gray-700 hover:bg-gray-50'"
                        class="px-6 py-3 rounded-full font-semibold shadow-lg transition-all duration-300 transform hover:scale-105 border-2"
                        :style="activeStory === index ? 'border-color: transparent' : ''">
                        <span x-text="story.name"></span>
                    </button>
                </template>
            </div>

            <!-- Active Story Display -->
            <div class="relative">
                <template x-for="(story, index) in stories" :key="story.id">
                    <div 
                        x-show="activeStory === index"
                        x-transition:enter="transition ease-out duration-500 transform"
                        x-transition:enter-start="opacity-0 scale-95 translate-y-10"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300 transform"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                        
                        <!-- Story Content Grid -->
                        <div class="grid md:grid-cols-2 gap-8 p-8">
                            <!-- Left Side - Image & Profile -->
                            <div class="space-y-6">
                                <!-- Campus Image -->
                                <div class="relative h-80 rounded-2xl overflow-hidden group">
                                    <img :src="story.campusImage" :alt="story.university" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                                    
                                    <!-- Achievement Badge -->
                                    <div class="absolute top-4 right-4 px-4 py-2 rounded-full text-white font-bold text-sm shadow-xl animate-pulse"
                                         :class="'bg-gradient-to-r ' + story.color">
                                        <span x-text="story.achievement"></span>
                                    </div>
                                    
                                    <!-- University Name -->
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <h3 class="text-2xl font-black text-white drop-shadow-2xl" x-text="story.university"></h3>
                                        <p class="text-white/90 font-semibold flex items-center gap-2 mt-2">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                            <span x-text="story.country"></span>
                                        </p>
                                    </div>
                                </div>

                                <!-- Student Profile Card -->
                                <div class="flex items-center gap-4 p-6 rounded-2xl shadow-lg"
                                     :class="'bg-gradient-to-r ' + story.color">
                                    <div class="relative">
                                        <div class="absolute -inset-1 bg-white/50 rounded-full blur"></div>
                                        <img :src="story.image" :alt="story.name" class="relative w-20 h-20 rounded-full border-4 border-white object-cover shadow-xl">
                                    </div>
                                    <div class="text-white">
                                        <h4 class="text-2xl font-black drop-shadow" x-text="story.name"></h4>
                                        <p class="text-white/90 font-semibold" x-text="story.program"></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side - Story Details -->
                            <div class="flex flex-col justify-center space-y-6">
                                <!-- Quote -->
                                <div class="relative">
                                    <svg class="w-12 h-12 text-gray-200 absolute -top-4 -left-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                    </svg>
                                    <p class="text-2xl text-gray-800 font-medium leading-relaxed pl-10 italic" x-text="story.quote"></p>
                                </div>

                                <!-- Stats Grid -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center p-4 bg-green-50 rounded-xl transform hover:scale-105 transition-transform duration-300">
                                        <div class="text-3xl font-black text-green-700">100%</div>
                                        <div class="text-sm font-semibold text-gray-600">Success Rate</div>
                                    </div>
                                    <div class="text-center p-4 bg-orange-50 rounded-xl transform hover:scale-105 transition-transform duration-300">
                                        <div class="text-3xl font-black text-orange-600">Fast</div>
                                        <div class="text-sm font-semibold text-gray-600">Visa Approval</div>
                                    </div>
                                    <div class="text-center p-4 bg-blue-50 rounded-xl transform hover:scale-105 transition-transform duration-300">
                                        <div class="text-3xl font-black text-blue-600">24/7</div>
                                        <div class="text-sm font-semibold text-gray-600">Support</div>
                                    </div>
                                    <div class="text-center p-4 bg-red-50 rounded-xl transform hover:scale-105 transition-transform duration-300">
                                        <div class="text-3xl font-black text-red-600">Top</div>
                                        <div class="text-sm font-semibold text-gray-600">Universities</div>
                                    </div>
                                </div>

                                <!-- 5 Star Rating -->
                                <div class="flex items-center justify-center gap-2 p-4 bg-yellow-50 rounded-xl">
                                    <template x-for="i in 5">
                                        <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </template>
                                    <span class="text-2xl font-black text-gray-800 ml-2">5.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Navigation Arrows -->
            <div class="flex justify-center items-center gap-6 mt-12">
                <button 
                    @click="activeStory = activeStory > 0 ? activeStory - 1 : stories.length - 1"
                    class="group w-14 h-14 rounded-full bg-green-700 text-white flex items-center justify-center hover:bg-green-800 transform hover:scale-110 transition-all duration-300 shadow-lg">
                    <svg class="w-6 h-6 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>

                <!-- Dot Indicators -->
                <div class="flex gap-3">
                    <template x-for="(story, index) in stories" :key="story.id">
                        <button 
                            @click="activeStory = index"
                            class="transition-all duration-300"
                            :class="activeStory === index ? 'w-12 h-3 rounded-full bg-gradient-to-r ' + story.color : 'w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400'">
                        </button>
                    </template>
                </div>

                <button 
                    @click="activeStory = activeStory < stories.length - 1 ? activeStory + 1 : 0"
                    class="group w-14 h-14 rounded-full bg-green-700 text-white flex items-center justify-center hover:bg-green-800 transform hover:scale-110 transition-all duration-300 shadow-lg">
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-20 text-center">
            <div class="bg-gradient-to-r from-green-700 via-emerald-700 to-teal-700 rounded-3xl shadow-2xl p-12 max-w-4xl mx-auto text-white transform hover:scale-105 transition-all duration-500">
                <h3 class="text-4xl font-black mb-4 animate-pulse">Ready to Write Your Success Story?</h3>
                <p class="text-xl mb-8 text-green-100">Join thousands of students who achieved their dreams with <span class="font-black text-yellow-300">GlobalEduHub</span> - Your Gateway to Worldwide Education</p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="{{ route('applications.create') }}"
                        class="bg-white text-green-700 px-8 py-4 rounded-full font-bold hover:bg-green-50 transform hover:scale-105 transition-all duration-300 shadow-lg flex items-center gap-2 text-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        Start Your Journey
                    </a>
                    <a href="{{ route('best-choice.index') }}"
                        class="bg-orange-600 text-white px-8 py-4 rounded-full font-bold hover:bg-orange-700 transform hover:scale-105 transition-all duration-300 shadow-lg flex items-center gap-2 text-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        Find Your Best Choice
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Destinations Section -->


<!-- Popular Destinations Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-green-50">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block bg-green-700 text-white px-6 py-2 rounded-full text-sm font-bold mb-4 animate-pulse">
                🌍 Top Destinations
            </span>
            <h2 class="text-5xl font-black text-gray-900 mb-4">
                Popular Study <span class="text-green-700">Destinations</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Explore the world's most sought-after destinations for international education
            </p>
        </div>

        <!-- Countries Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- United States -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <!-- Country Image -->
                <div class="relative h-64 overflow-hidden bg-gradient-to-br from-blue-500 via-blue-600 to-blue-700">
                    <img src="https://cdn.pixabay.com/photo/2017/08/22/22/36/cinderella-castle-2670770_1280.jpg" 
                         alt="United States"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-blue-900/40 to-transparent"></div>
                    
                    <!-- Country Flag & Name Overlay -->
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex items-center gap-3">
                            <span class="text-5xl">🇺🇸</span>
                            <div>
                                <h3 class="text-2xl font-black text-white drop-shadow-lg">United States</h3>
                                <p class="text-sm text-blue-100 font-semibold">The Land of Opportunities</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            Most Popular
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        Home to world-renowned universities like Harvard, MIT, and Stanford. Over 4,000 institutions to choose from.
                    </p>
                    
                    <!-- Stats -->
                    <div class="flex items-center justify-between mb-5 pb-5 border-b border-gray-100">
                        <div class="text-center">
                            <div class="text-2xl font-black text-blue-600">500+</div>
                            <div class="text-xs text-gray-500 font-medium">Universities</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-green-600">$50K+</div>
                            <div class="text-xs text-gray-500 font-medium">Scholarships</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-orange-600">85%</div>
                            <div class="text-xs text-gray-500 font-medium">Visa Rate</div>
                        </div>
                    </div>
                    
                    <!-- View Details Button -->
                    <a href="{{ route('countries.show', 'united-states') }}" 
                       class="block w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white text-center py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        View Details
                        <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- United Kingdom -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <!-- Country Image -->
                <div class="relative h-64 overflow-hidden bg-gradient-to-br from-red-500 via-red-600 to-red-700">
                    <img src="https://cdn.pixabay.com/photo/2018/04/25/09/26/eiffel-tower-3349075_1280.jpg" 
                         alt="United Kingdom"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-red-900/80 via-red-900/40 to-transparent"></div>
                    
                    <!-- Country Flag & Name Overlay -->
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex items-center gap-3">
                            <span class="text-5xl">🇬🇧</span>
                            <div>
                                <h3 class="text-2xl font-black text-white drop-shadow-lg">United Kingdom</h3>
                                <p class="text-sm text-red-100 font-semibold">Historic Excellence</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="bg-red-600 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            Oxford & Cambridge
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        Historic universities with cutting-edge research. Programs from 9-12 months with post-study work visas.
                    </p>
                    
                    <!-- Stats -->
                    <div class="flex items-center justify-between mb-5 pb-5 border-b border-gray-100">
                        <div class="text-center">
                            <div class="text-2xl font-black text-red-600">150+</div>
                            <div class="text-xs text-gray-500 font-medium">Universities</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-green-600">£30K+</div>
                            <div class="text-xs text-gray-500 font-medium">Scholarships</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-orange-600">82%</div>
                            <div class="text-xs text-gray-500 font-medium">Visa Rate</div>
                        </div>
                    </div>
                    
                    <!-- View Details Button -->
                    <a href="{{ route('countries.show', 'united-kingdom') }}" 
                       class="block w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white text-center py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        View Details
                        <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Canada -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <!-- Country Image -->
                <div class="relative h-64 overflow-hidden bg-gradient-to-br from-red-500 via-red-600 to-orange-600">
                    <img src="https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072_1280.jpg" 
                         alt="Canada"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-red-900/80 via-red-900/40 to-transparent"></div>
                    
                    <!-- Country Flag & Name Overlay -->
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex items-center gap-3">
                            <span class="text-5xl">🇨🇦</span>
                            <div>
                                <h3 class="text-2xl font-black text-white drop-shadow-lg">Canada</h3>
                                <p class="text-sm text-red-100 font-semibold">Quality & Affordability</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="bg-red-600 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            PR Pathway
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        High-quality education with excellent immigration pathways. Safe, multicultural environment with top-ranked universities.
                    </p>
                    
                    <!-- Stats -->
                    <div class="flex items-center justify-between mb-5 pb-5 border-b border-gray-100">
                        <div class="text-center">
                            <div class="text-2xl font-black text-red-600">90+</div>
                            <div class="text-xs text-gray-500 font-medium">Universities</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-green-600">$35K+</div>
                            <div class="text-xs text-gray-500 font-medium">Scholarships</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-orange-600">88%</div>
                            <div class="text-xs text-gray-500 font-medium">Visa Rate</div>
                        </div>
                    </div>
                    
                    <!-- View Details Button -->
                    <a href="{{ route('countries.show', 'canada') }}" 
                       class="block w-full bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-white text-center py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        View Details
                        <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Australia -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-3">
                <!-- Country Image -->
                <div class="relative h-64 overflow-hidden bg-gradient-to-br from-green-500 via-teal-600 to-blue-600">
                    <img src="https://cdn.pixabay.com/photo/2014/02/17/10/20/statue-of-liberty-267948_1280.jpg" 
                         alt="Australia"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-green-900/40 to-transparent"></div>
                    
                    <!-- Country Flag & Name Overlay -->
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex items-center gap-3">
                            <span class="text-5xl">🇦🇺</span>
                            <div>
                                <h3 class="text-2xl font-black text-white drop-shadow-lg">Australia</h3>
                                <p class="text-sm text-green-100 font-semibold">Work & Study Balance</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="bg-green-600 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            Work Rights
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        High-quality education with excellent post-study work opportunities. Known for research excellence and innovation.
                    </p>
                    
                    <!-- Stats -->
                    <div class="flex items-center justify-between mb-5 pb-5 border-b border-gray-100">
                        <div class="text-center">
                            <div class="text-2xl font-black text-green-600">43+</div>
                            <div class="text-xs text-gray-500 font-medium">Universities</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-green-600">$40K+</div>
                            <div class="text-xs text-gray-500 font-medium">Scholarships</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-black text-orange-600">80%</div>
                            <div class="text-xs text-gray-500 font-medium">Visa Rate</div>
                        </div>
                    </div>
                    
                    <!-- View Details Button -->
                    <a href="{{ route('countries.show', 'australia') }}" 
                       class="block w-full bg-gradient-to-r from-green-600 to-teal-600 hover:from-green-700 hover:to-teal-700 text-white text-center py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        View Details
                        <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- View All Countries CTA -->
        <div class="text-center mt-12">
            <a href="{{ route('countries.index') }}" 
               class="inline-flex items-center gap-3 bg-green-700 hover:bg-green-800 text-white px-8 py-4 rounded-full font-bold text-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <span>Explore All Destinations</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Study Programs Section - Modern Elegant Design -->
<section class="relative py-24 overflow-hidden">
    <!-- Subtle Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50/60 via-blue-50/50 to-purple-50/60"></div>
    
    <!-- Floating Decorative Elements -->
    <div class="absolute inset-0 overflow-hidden opacity-25">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-gradient-to-br from-indigo-200 to-blue-200 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute top-1/3 -right-32 w-96 h-96 bg-gradient-to-br from-purple-200 to-pink-200 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute -bottom-32 left-1/3 w-96 h-96 bg-gradient-to-br from-blue-200 to-cyan-200 rounded-full blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-3 mb-6 bg-white/80 backdrop-blur-xl px-8 py-4 rounded-2xl border border-indigo-100 shadow-2xl">
                <span class="text-3xl animate-bounce">📚</span>
                <span class="text-gray-800 font-bold text-sm uppercase tracking-widest">Academic Excellence</span>
                <span class="text-3xl animate-bounce" style="animation-delay: 0.2s;">🎓</span>
            </div>
            <h2 class="text-5xl md:text-7xl font-black mb-6 bg-gradient-to-r from-indigo-600 via-blue-600 to-purple-600 bg-clip-text text-transparent leading-tight">
                Explore Study Programs</h2>
            <p class="text-xl md:text-2xl text-gray-700 max-w-3xl mx-auto font-semibold">Find the perfect program that matches your
                academic goals and career aspirations ✨</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Undergraduate Programs - Glassmorphism Design -->
            <div class="group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-400 via-cyan-400 to-teal-400 rounded-3xl blur opacity-30 group-hover:opacity-50 transition duration-500"></div>
                <div class="relative bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl hover:shadow-blue-300/50 transition-all duration-500 hover:-translate-y-2 p-8 border border-blue-100/50">
                    <!-- Icon with Gradient Background -->
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        🎓
                    </div>
                    <h3 class="font-black text-3xl mb-3 bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">Undergraduate Programs</h3>
                    <p class="text-gray-700 mb-6 font-medium leading-relaxed">Bachelor's degrees in various fields including
                        Business, Engineering, Arts, and Sciences.</p>
                    <ul class="text-sm text-gray-700 space-y-3 font-medium">
                        <li class="flex items-center bg-blue-50/80 rounded-lg px-3 py-2 hover:bg-blue-100/80 transition">
                            <span class="mr-2 text-lg text-blue-500">✓</span> Foundation Programs Available
                        </li>
                        <li class="flex items-center bg-blue-50/80 rounded-lg px-3 py-2 hover:bg-blue-100/80 transition">
                            <span class="mr-2 text-lg text-blue-500">✓</span> Transfer Credits Accepted
                        </li>
                        <li class="flex items-center bg-blue-50/80 rounded-lg px-3 py-2 hover:bg-blue-100/80 transition">
                            <span class="mr-2 text-lg text-blue-500">✓</span> Career Counseling Included
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Graduate Programs - Glassmorphism Design -->
            <div class="group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-emerald-400 via-green-400 to-teal-400 rounded-3xl blur opacity-30 group-hover:opacity-50 transition duration-500"></div>
                <div class="relative bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl hover:shadow-green-300/50 transition-all duration-500 hover:-translate-y-2 p-8 border border-green-100/50">
                    <!-- Icon with Gradient Background -->
                    <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-green-500 rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        📚
                    </div>
                    <h3 class="font-black text-3xl mb-3 bg-gradient-to-r from-emerald-600 to-green-600 bg-clip-text text-transparent">Graduate Programs</h3>
                    <p class="text-gray-700 mb-6 font-medium leading-relaxed">Master's and PhD programs for advanced study. Research
                        opportunities and industry partnerships.</p>
                    <ul class="text-sm text-gray-700 space-y-3 font-medium">
                        <li class="flex items-center bg-green-50/80 rounded-lg px-3 py-2 hover:bg-green-100/80 transition">
                            <span class="mr-2 text-lg text-green-500">✓</span> Research Assistantships
                        </li>
                        <li class="flex items-center bg-green-50/80 rounded-lg px-3 py-2 hover:bg-green-100/80 transition">
                            <span class="mr-2 text-lg text-green-500">✓</span> Industry Partnerships
                        </li>
                        <li class="flex items-center bg-green-50/80 rounded-lg px-3 py-2 hover:bg-green-100/80 transition">
                            <span class="mr-2 text-lg text-green-500">✓</span> Fast-track Options
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Professional Programs - Glassmorphism Design -->
            <div class="group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-400 via-fuchsia-400 to-pink-400 rounded-3xl blur opacity-30 group-hover:opacity-50 transition duration-500"></div>
                <div class="relative bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl hover:shadow-purple-300/50 transition-all duration-500 hover:-translate-y-2 p-8 border border-purple-100/50">
                    <!-- Icon with Gradient Background -->
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-fuchsia-500 rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        💼
                    </div>
                    <h3 class="font-black text-3xl mb-3 bg-gradient-to-r from-purple-600 to-fuchsia-600 bg-clip-text text-transparent">Professional Programs</h3>
                    <p class="text-gray-700 mb-6 font-medium leading-relaxed">MBA, Law, Medicine, and other professional degrees
                        with industry certifications.</p>
                    <ul class="text-sm text-gray-700 space-y-3 font-medium">
                        <li class="flex items-center bg-purple-50/80 rounded-lg px-3 py-2 hover:bg-purple-100/80 transition">
                            <span class="mr-2 text-lg text-purple-500">✓</span> Industry Certifications
                        </li>
                        <li class="flex items-center bg-purple-50/80 rounded-lg px-3 py-2 hover:bg-purple-100/80 transition">
                            <span class="mr-2 text-lg text-purple-500">✓</span> Internship Programs
                        </li>
                        <li class="flex items-center bg-purple-50/80 rounded-lg px-3 py-2 hover:bg-purple-100/80 transition">
                            <span class="mr-2 text-lg text-purple-500">✓</span> Executive Networks
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Online & Hybrid Programs -->
            <div
                class="group relative rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 bg-gradient-to-br from-orange-500 via-orange-600 to-red-600 p-8 border-4 border-orange-300">
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>

                <div class="relative z-10 h-full flex flex-col justify-between">
                    <div>
                        <div
                            class="w-20 h-20 bg-yellow-300 rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            🌐
                        </div>
                        <h3 class="font-black text-3xl mb-3 text-white drop-shadow-lg">Online & Hybrid Programs</h3>
                        <p class="text-white/95 mb-4 font-medium">Flexible learning options combining online coursework
                            with in-person components.</p>
                    </div>
                    <ul class="text-sm text-white/90 space-y-3 font-medium">
                        <li class="flex items-center bg-white/10 rounded-lg px-3 py-2"><span
                                class="mr-2 text-lg">✓</span> Flexible Scheduling</li>
                        <li class="flex items-center bg-white/10 rounded-lg px-3 py-2"><span
                                class="mr-2 text-lg">✓</span> Global Faculty Access</li>
                        <li class="flex items-center bg-white/10 rounded-lg px-3 py-2"><span
                                class="mr-2 text-lg">✓</span> Interactive Learning</li>
                    </ul>
                </div>
            </div>

            <!-- Creative Arts Programs -->
            <div
                class="group relative rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 bg-gradient-to-br from-pink-500 via-pink-600 to-rose-600 p-8 border-4 border-pink-300">
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>

                <div class="relative z-10 h-full flex flex-col justify-between">
                    <div>
                        <div
                            class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            🎨
                        </div>
                        <h3 class="font-black text-3xl mb-3 text-white drop-shadow-lg">Creative Arts Programs</h3>
                        <p class="text-white/95 mb-4 font-medium">Fine Arts, Design, Music, Film, and Performing Arts
                            with portfolio development.</p>
                    </div>
                    <ul class="text-sm text-white/90 space-y-3 font-medium">
                        <li class="flex items-center bg-white/10 rounded-lg px-3 py-2"><span
                                class="mr-2 text-lg">✓</span> Portfolio Development</li>
                        <li class="flex items-center bg-white/10 rounded-lg px-3 py-2"><span
                                class="mr-2 text-lg">✓</span> Industry Connections</li>
                        <li class="flex items-center bg-white/10 rounded-lg px-3 py-2"><span
                                class="mr-2 text-lg">✓</span> Exhibition Opportunities</li>
                    </ul>
                </div>
            </div>

            <!-- STEM Programs -->
            <div
                class="group relative rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 bg-gradient-to-br from-teal-500 via-teal-600 to-cyan-700 p-8 border-4 border-teal-300">
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>

                <div class="relative z-10 h-full flex flex-col justify-between">
                    <div>
                        <div
                            class="w-20 h-20 bg-pink-300 rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            🔬
                        </div>
                        <h3 class="font-black text-3xl mb-3 text-white drop-shadow-lg">STEM Programs</h3>
                        <p class="text-white/95 mb-4 font-medium">Science, Technology, Engineering, and Mathematics with
                            cutting-edge research facilities.</p>
                    </div>
                    <ul class="text-sm text-white/90 space-y-3 font-medium">
                        <li class="flex items-center bg-white/10 rounded-lg px-3 py-2"><span
                                class="mr-2 text-lg">✓</span> Research Facilities</li>
                        <li class="flex items-center bg-white/10 rounded-lg px-3 py-2"><span
                                class="mr-2 text-lg">✓</span> Innovation Labs</li>
                        <li class="flex items-center bg-white/10 rounded-lg px-3 py-2"><span
                                class="mr-2 text-lg">✓</span> Industry Partnerships</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- University Rankings Section -->
<section class="relative bg-white py-20 border-t-4 border-b-4 border-blue-500 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-10 w-64 h-64 bg-blue-200 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-purple-200 rounded-full blur-3xl animate-pulse"
            style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-pink-200 rounded-full blur-3xl animate-pulse"
            style="animation-delay: 2s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span
                    class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full font-bold text-sm uppercase tracking-wider shadow-lg">
                    🏆 World Class Institutions
                </span>
            </div>
            <h2 class="text-5xl font-extrabold text-gray-900 mb-6">
                Top Ranked Universities
            </h2>
            <p class="text-2xl text-gray-700 mb-4 font-semibold">
                Partnered with world-leading institutions recognized for academic excellence
            </p>
            <div class="flex items-center justify-center space-x-2 text-yellow-500">
                <span class="text-3xl">⭐</span>
                <span class="text-3xl">⭐</span>
                <span class="text-3xl">⭐</span>
                <span class="text-3xl">⭐</span>
                <span class="text-3xl">⭐</span>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Harvard University -->
            <div
                class="rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border-4 border-red-500 relative overflow-hidden group h-96">
                <!-- Background Image -->
                <div class="absolute inset-0 w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                    style="background-image: url('https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1200&q=80');">
                </div>
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
                <!-- Content -->
                <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                    <div class="flex items-center justify-between">
                        <div class="text-5xl font-black text-white drop-shadow-2xl">#1</div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Harvard_University_coat_of_arms.svg/200px-Harvard_University_coat_of_arms.svg.png"
                            alt="Harvard University Logo"
                            class="w-20 h-20 object-contain bg-white/90 rounded-full p-2 shadow-lg">
                    </div>
                    <div>
                        <h3 class="font-black text-3xl mb-3 text-white drop-shadow-lg">Harvard University</h3>
                        <p class="text-white/90 mb-4 font-semibold text-lg">📍 Cambridge, Massachusetts, USA</p>
                        <div class="flex items-center justify-between flex-wrap gap-2">
                            <span class="bg-red-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                ⭐ QS World #1
                            </span>
                            <span class="bg-red-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                🎓 Ivy League
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stanford University -->
            <div
                class="rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border-4 border-orange-500 relative overflow-hidden group h-96">
                <!-- Background Image -->
                <div class="absolute inset-0 w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                    style="background-image: url('https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&w=1200&q=80');">
                </div>
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
                <!-- Content -->
                <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                    <div class="flex items-center justify-between">
                        <div class="text-5xl font-black text-white drop-shadow-2xl">#2</div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Seal_of_Leland_Stanford_Junior_University.svg/200px-Seal_of_Leland_Stanford_Junior_University.svg.png"
                            alt="Stanford University Logo"
                            class="w-20 h-20 object-contain bg-white/90 rounded-full p-2 shadow-lg">
                    </div>
                    <div>
                        <h3 class="font-black text-3xl mb-3 text-white drop-shadow-lg">Stanford University</h3>
                        <p class="text-white/90 mb-4 font-semibold text-lg">📍 Stanford, California, USA</p>
                        <div class="flex items-center justify-between flex-wrap gap-2">
                            <span class="bg-orange-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                ⭐ QS World #2
                            </span>
                            <span class="bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                💡 Innovation Hub
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Oxford University -->
            <div
                class="rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border-4 border-blue-600 relative overflow-hidden group h-96">
                <!-- Background Image -->
                <div class="absolute inset-0 w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                    style="background-image: url('https://images.unsplash.com/photo-1588702547919-26089e690ecc?auto=format&fit=crop&w=1200&q=80');">
                </div>
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
                <!-- Content -->
                <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                    <div class="flex items-center justify-between">
                        <div class="text-5xl font-black text-white drop-shadow-2xl">#3</div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Oxford-University-Circlet.svg/200px-Oxford-University-Circlet.svg.png"
                            alt="Oxford University Logo"
                            class="w-20 h-20 object-contain bg-white/90 rounded-full p-2 shadow-lg">
                    </div>
                    <div>
                        <h3 class="font-black text-3xl mb-3 text-white drop-shadow-lg">University of Oxford</h3>
                        <p class="text-white/90 mb-4 font-semibold text-lg">📍 Oxford, United Kingdom</p>
                        <div class="flex items-center justify-between flex-wrap gap-2">
                            <span class="bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                ⭐ QS World #3
                            </span>
                            <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                📚 Historic Excellence
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MIT -->
            <div
                class="rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border-4 border-gray-700 relative overflow-hidden group h-96">
                <!-- Background Image -->
                <div class="absolute inset-0 w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                    style="background-image: url('https://images.unsplash.com/photo-1564981797816-1043664bf78d?auto=format&fit=crop&w=1200&q=80');">
                </div>
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
                <!-- Content -->
                <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                    <div class="flex items-center justify-between">
                        <div class="text-5xl font-black text-white drop-shadow-2xl">#4</div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/MIT_logo.svg/200px-MIT_logo.svg.png"
                            alt="MIT Logo" class="w-20 h-20 object-contain bg-white/90 rounded-full p-2 shadow-lg">
                    </div>
                    <div>
                        <h3 class="font-black text-3xl mb-3 text-white drop-shadow-lg">MIT</h3>
                        <p class="text-white/90 mb-4 font-semibold text-lg">📍 Cambridge, Massachusetts, USA</p>
                        <div class="flex items-center justify-between flex-wrap gap-2">
                            <span class="bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                ⭐ QS World #4
                            </span>
                            <span class="bg-gray-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                🚀 Tech Innovation
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cambridge University -->
            <div
                class="rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border-4 border-indigo-600 relative overflow-hidden group h-96">
                <!-- Background Image -->
                <div class="absolute inset-0 w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                    style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80');">
                </div>
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
                <!-- Content -->
                <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                    <div class="flex items-center justify-between">
                        <div class="text-5xl font-black text-white drop-shadow-2xl">#5</div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/University_of_Cambridge_coat_of_arms.svg/200px-University_of_Cambridge_coat_of_arms.svg.png"
                            alt="Cambridge University Logo"
                            class="w-20 h-20 object-contain bg-white/90 rounded-full p-2 shadow-lg">
                    </div>
                    <div>
                        <h3 class="font-black text-3xl mb-3 text-white drop-shadow-lg">University of Cambridge</h3>
                        <p class="text-white/90 mb-4 font-semibold text-lg">📍 Cambridge, United Kingdom</p>
                        <div class="flex items-center justify-between flex-wrap gap-2">
                            <span class="bg-indigo-700 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                ⭐ QS World #5
                            </span>
                            <span class="bg-indigo-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                🔬 Research Powerhouse
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Toronto University -->
            <div
                class="rounded-3xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-3 border-4 border-green-600 relative overflow-hidden group h-96">
                <!-- Background Image -->
                <div class="absolute inset-0 w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                    style="background-image: url('https://images.unsplash.com/photo-1519452635265-7b1fbfd1e4e0?auto=format&fit=crop&w=1200&q=80');">
                </div>
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
                <!-- Content -->
                <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                    <div class="flex items-center justify-between">
                        <div class="text-5xl font-black text-white drop-shadow-2xl">#6</div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/University_of_Toronto_coat_of_arms.svg/200px-University_of_Toronto_coat_of_arms.svg.png"
                            alt="University of Toronto Logo"
                            class="w-20 h-20 object-contain bg-white/90 rounded-full p-2 shadow-lg">
                    </div>
                    <div>
                        <h3 class="font-black text-3xl mb-3 text-white drop-shadow-lg">University of Toronto</h3>
                        <p class="text-white/90 mb-4 font-semibold text-lg">📍 Toronto, Canada</p>
                        <div class="flex items-center justify-between flex-wrap gap-2">
                            <span class="bg-green-700 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                ⭐ QS World #6
                            </span>
                            <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                🌍 Diverse Excellence
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <a href="{{ route('universities.index') }}"
                class="inline-block bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 px-12 py-4 rounded-full font-black text-lg shadow-2xl hover:shadow-3xl hover:scale-110 transition-all duration-300 hover:from-yellow-300 hover:to-orange-400 uppercase tracking-wider">
                🎯 Explore All Partner Universities
            </a>
        </div>
    </div>
</section>

<!-- Student Resources Section -->
<section class="py-20">
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
                    class="bg-red-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Explore
                    Guides</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-green-500">
                <div class="text-6xl mb-6">💰</div>
                <h3 class="font-bold text-xl mb-3 text-green-700">Financial Planning</h3>
                <p class="text-gray-600 mb-4">Budget calculators, scholarship databases, and financial aid resources for
                    international students.</p>
                <a href="{{ route('scholarships.index') }}"
                    class="bg-red-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Plan
                    Finances</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-purple-500">
                <div class="text-6xl mb-6">🏠</div>
                <h3 class="font-bold text-xl mb-3 text-purple-700">Accommodation Finder</h3>
                <p class="text-gray-600 mb-4">Find student housing, dormitories, and off-campus apartments in your
                    destination city.</p>
                <a href="{{ route('universities.index') }}"
                    class="bg-red-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Find
                    Housing</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-orange-500">
                <div class="text-6xl mb-6">🌍</div>
                <h3 class="font-bold text-xl mb-3 text-orange-700">Cultural Guides</h3>
                <p class="text-gray-600 mb-4">Cultural adaptation tips, language resources, and local insights for your
                    destination country.</p>
                <a href="{{ route('countries.index') }}"
                    class="bg-red-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Learn
                    Culture</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-pink-500">
                <div class="text-6xl mb-6">💼</div>
                <h3 class="font-bold text-xl mb-3 text-pink-700">Career Services</h3>
                <p class="text-gray-600 mb-4">Resume building, job search assistance, and internship opportunities for
                    international students.</p>
                <a href="{{ route('posts.index') }}"
                    class="bg-red-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Build
                    Career</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-teal-500">
                <div class="text-6xl mb-6">👥</div>
                <h3 class="font-bold text-xl mb-3 text-teal-700">Student Community</h3>
                <p class="text-gray-600 mb-4">Connect with fellow international students, join study groups, and share
                    experiences.</p>
                <a href="{{ route('reviews.index') }}"
                    class="bg-red-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Join
                    Community</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-indigo-500">
                <div class="text-6xl mb-6">📱</div>
                <h3 class="font-bold text-xl mb-3 text-indigo-700">Mobile App</h3>
                <p class="text-gray-600 mb-4">Access all our services on-the-go with our mobile app for iOS and Android
                    devices.</p>
                <a href="{{ route('about-us') }}"
                    class="bg-red-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Download
                    App</a>
            </div>
            <div
                class="bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 text-center border-t-4 border-red-500">
                <div class="text-6xl mb-6">🎓</div>
                <h3 class="font-bold text-xl mb-3 text-red-700">Alumni Network</h3>
                <p class="text-gray-600 mb-4">Connect with successful alumni for mentorship, career advice, and
                    networking opportunities.</p>
                <a href="{{ route('reviews.index') }}"
                    class="bg-red-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">Join
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
<section class="py-20">
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
                        class="bg-red-300 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
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
                        class="bg-green-300 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
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
<section class="py-20">
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
<section class="py-20">
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
<section class="relative py-24 overflow-hidden bg-blue-300">
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header with Animation -->
        <div class="text-center mb-16 animate-fade-in-down">
            <div class="inline-block mb-4">
                <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-transparent bg-clip-text text-6xl font-bold animate-pulse">
                    💼
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-extrabold text-white mb-6 leading-tight">
                <span class="bg-gradient-to-r from-yellow-400 via-pink-400 to-purple-400 text-transparent bg-clip-text animate-gradient">
                    Post-Study Work Opportunities
                </span>
            </h2>
            <p class="text-xl md:text-2xl text-white/90 max-w-4xl mx-auto leading-relaxed">
                🚀 Maximize your international education investment with 
                <span class="text-yellow-400 font-bold">exciting work opportunities</span> after graduation
            </p>
        </div>

        <!-- Cards Grid with Staggered Animation -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- USA Card -->
            <div class="work-opportunity-card group" style="animation-delay: 0.1s;">
                <div class="relative bg-white backdrop-blur-lg rounded-3xl p-8 border-2 border-gray-200 hover:border-blue-400 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/50 transform hover:-translate-y-2">
                    <!-- Country Flag & Badge -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-6xl transform group-hover:scale-110 transition-transform duration-300 group-hover:rotate-12">🇺🇸</div>
                        <div class="relative">
                            <div class="absolute inset-0 bg-yellow-400 blur-md group-hover:blur-lg transition-all duration-300"></div>
                            <div class="relative bg-gradient-to-r from-yellow-400 to-orange-400 text-blue-900 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                OPT
                            </div>
                        </div>
                    </div>
                    
                    <!-- Title -->
                    <h3 class="font-bold text-2xl mb-4 text-black group-hover:text-blue-400 transition-colors duration-300">
                        United States - OPT Program
                    </h3>
                    
                    <!-- Benefits List -->
                    <ul class="text-black space-y-3 mb-6">
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>12-36 months for STEM graduates</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Work authorization for F-1 students</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Path to H-1B visa</span>
                        </li>
                    </ul>
                    
                    <!-- Salary Badge -->
                    <div class="pt-4 border-t border-gray-200">
                        <div class="bg-gradient-to-r from-green-400 to-emerald-500 text-white px-4 py-3 rounded-xl font-bold text-lg shadow-lg inline-flex items-center gap-2">
                            <span>💰</span>
                            <span>$65,000+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UK Card -->
            <div class="work-opportunity-card group" style="animation-delay: 0.2s;">
                <div class="relative bg-white backdrop-blur-lg rounded-3xl p-8 border-2 border-gray-200 hover:border-blue-400 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/50 transform hover:-translate-y-2">
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-6xl transform group-hover:scale-110 transition-transform duration-300 group-hover:rotate-12">🇬🇧</div>
                        <div class="relative">
                            <div class="absolute inset-0 bg-yellow-400 blur-md group-hover:blur-lg transition-all duration-300"></div>
                            <div class="relative bg-gradient-to-r from-yellow-400 to-orange-400 text-blue-900 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                PSW
                            </div>
                        </div>
                    </div>
                    <h3 class="font-bold text-2xl mb-4 text-black group-hover:text-blue-400 transition-colors duration-300">
                        United Kingdom - PSW Visa
                    </h3>
                    <ul class="text-black space-y-3 mb-6">
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>2 years work permission</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Any job, any salary level</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Path to skilled worker visa</span>
                        </li>
                    </ul>
                    <div class="pt-4 border-t border-gray-200">
                        <div class="bg-gradient-to-r from-green-400 to-emerald-500 text-white px-4 py-3 rounded-xl font-bold text-lg shadow-lg inline-flex items-center gap-2">
                            <span>💰</span>
                            <span>£35,000+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Australia Card -->
            <div class="work-opportunity-card group" style="animation-delay: 0.3s;">
                <div class="relative bg-white backdrop-blur-lg rounded-3xl p-8 border-2 border-gray-200 hover:border-blue-400 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/50 transform hover:-translate-y-2">
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-6xl transform group-hover:scale-110 transition-transform duration-300 group-hover:rotate-12">🇦🇺</div>
                        <div class="relative">
                            <div class="absolute inset-0 bg-yellow-400 blur-md group-hover:blur-lg transition-all duration-300"></div>
                            <div class="relative bg-gradient-to-r from-yellow-400 to-orange-400 text-blue-900 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                485 Visa
                            </div>
                        </div>
                    </div>
                    <h3 class="font-bold text-2xl mb-4 text-black group-hover:text-blue-400 transition-colors duration-300">
                        Australia - 485 Visa
                    </h3>
                    <ul class="text-black space-y-3 mb-6">
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>18 months - 4 years duration</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Work rights in any occupation</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Pathway to PR</span>
                        </li>
                    </ul>
                    <div class="pt-4 border-t border-gray-200">
                        <div class="bg-gradient-to-r from-green-400 to-emerald-500 text-white px-4 py-3 rounded-xl font-bold text-lg shadow-lg inline-flex items-center gap-2">
                            <span>💰</span>
                            <span>AUD 70,000+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Canada Card -->
            <div class="work-opportunity-card group" style="animation-delay: 0.4s;">
                <div class="relative bg-white backdrop-blur-lg rounded-3xl p-8 border-2 border-gray-200 hover:border-blue-400 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/50 transform hover:-translate-y-2">
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-6xl transform group-hover:scale-110 transition-transform duration-300 group-hover:rotate-12">🇨🇦</div>
                        <div class="relative">
                            <div class="absolute inset-0 bg-yellow-400 blur-md group-hover:blur-lg transition-all duration-300"></div>
                            <div class="relative bg-gradient-to-r from-yellow-400 to-orange-400 text-blue-900 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                PGWP
                            </div>
                        </div>
                    </div>
                    <h3 class="font-bold text-2xl mb-4 text-black group-hover:text-blue-400 transition-colors duration-300">
                        Canada - PGWP
                    </h3>
                    <ul class="text-black space-y-3 mb-6">
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>8-36 months based on program</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Express Entry points</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Direct path to PR</span>
                        </li>
                    </ul>
                    <div class="pt-4 border-t border-gray-200">
                        <div class="bg-gradient-to-r from-green-400 to-emerald-500 text-white px-4 py-3 rounded-xl font-bold text-lg shadow-lg inline-flex items-center gap-2">
                            <span>💰</span>
                            <span>CAD 60,000+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Germany Card -->
            <div class="work-opportunity-card group" style="animation-delay: 0.5s;">
                <div class="relative bg-white backdrop-blur-lg rounded-3xl p-8 border-2 border-gray-200 hover:border-blue-400 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/50 transform hover:-translate-y-2">
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-6xl transform group-hover:scale-110 transition-transform duration-300 group-hover:rotate-12">🇩🇪</div>
                        <div class="relative">
                            <div class="absolute inset-0 bg-yellow-400 blur-md group-hover:blur-lg transition-all duration-300"></div>
                            <div class="relative bg-gradient-to-r from-yellow-400 to-orange-400 text-blue-900 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                Job Seeker
                            </div>
                        </div>
                    </div>
                    <h3 class="font-bold text-2xl mb-4 text-black group-hover:text-blue-400 transition-colors duration-300">
                        Germany - Job Seeker Visa
                    </h3>
                    <ul class="text-black space-y-3 mb-6">
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>6 months to find work</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>EU Blue Card pathway</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Strong economy</span>
                        </li>
                    </ul>
                    <div class="pt-4 border-t border-gray-200">
                        <div class="bg-gradient-to-r from-green-400 to-emerald-500 text-white px-4 py-3 rounded-xl font-bold text-lg shadow-lg inline-flex items-center gap-2">
                            <span>💰</span>
                            <span>€45,000+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Netherlands Card -->
            <div class="work-opportunity-card group" style="animation-delay: 0.6s;">
                <div class="relative bg-white backdrop-blur-lg rounded-3xl p-8 border-2 border-gray-200 hover:border-blue-400 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/50 transform hover:-translate-y-2">
                    <div class="flex items-center justify-between mb-6">
                        <div class="text-6xl transform group-hover:scale-110 transition-transform duration-300 group-hover:rotate-12">🇳🇱</div>
                        <div class="relative">
                            <div class="absolute inset-0 bg-yellow-400 blur-md group-hover:blur-lg transition-all duration-300"></div>
                            <div class="relative bg-gradient-to-r from-yellow-400 to-orange-400 text-blue-900 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                Orientation
                            </div>
                        </div>
                    </div>
                    <h3 class="font-bold text-2xl mb-4 text-black group-hover:text-blue-400 transition-colors duration-300">
                        Netherlands - Orientation Year
                    </h3>
                    <ul class="text-black space-y-3 mb-6">
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>1 year to find work or start business</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>Highly skilled migrant pathway</span>
                        </li>
                        <li class="flex items-start gap-2 transform transition-all duration-300 hover:translate-x-2 group-hover:text-blue-400">
                            <span class="text-green-400 text-xl flex-shrink-0">✓</span>
                            <span>English widely spoken</span>
                        </li>
                    </ul>
                    <div class="pt-4 border-t border-gray-200">
                        <div class="bg-gradient-to-r from-green-400 to-emerald-500 text-white px-4 py-3 rounded-xl font-bold text-lg shadow-lg inline-flex items-center gap-2">
                            <span>💰</span>
                            <span>€40,000+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pre-Departure Preparation Section -->
<section class="py-20">
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
    @keyframes blob {
        0%, 100% {
            transform: translate(0px, 0px) scale(1);
        }
        33% {
            transform: translate(30px, -50px) scale(1.1);
        }
        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes gradient {
        0%, 100% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    .animate-gradient {
        background-size: 200% auto;
        animation: gradient 3s ease infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .work-opportunity-card {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }
</style>

@endsection



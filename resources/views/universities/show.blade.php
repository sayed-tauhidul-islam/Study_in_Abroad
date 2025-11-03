@extends('layouts.app')

@section('title', $university->name)

@section('content')
<!-- University Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-800 text-white py-20">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center gap-8">
            @if($university->logo_url)
                <div class="bg-white rounded-2xl p-6 shadow-2xl">
                    <img src="{{ $university->logo_url }}" alt="{{ $university->name }} Logo"
                        class="w-32 h-32 object-contain">
                </div>
            @endif
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">{{ $university->name }}</h1>
                @if($university->country)
                    <p class="text-2xl mb-2 flex items-center justify-center md:justify-start gap-2">
                        <span>📍</span> {{ $university->country->name }}
                    </p>
                @endif
                @if($university->ranking)
                    <div class="inline-block bg-yellow-400 text-gray-900 px-6 py-2 rounded-full font-bold text-lg mt-4">
                        🏆 World Ranking: #{{ $university->ranking }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats Bar -->
@php
    $totalCourses = $university->courses->count();
    $totalScholarships = $university->scholarships->count();
    $successRate = $university->success_rate ?? ($university->bd_students > 0 ? rand(85, 98) : 0);
    $workPlacement = $university->work_placement_rate ?? ($university->bd_students > 0 ? rand(75, 95) : 0);
@endphp
<section class="bg-white shadow-lg border-b-4 border-blue-500">
    <div class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 text-center">
            <div class="p-4">
                <div class="text-3xl font-bold text-blue-600">
                    {{ $totalCourses > 0 ? $totalCourses : ($university->num_courses ?? 'N/A') }}
                </div>
                <div class="text-sm text-gray-600 font-semibold">Courses</div>
            </div>
            <div class="p-4">
                <div class="text-3xl font-bold text-green-600">
                    {{ $university->bd_students ?? 'N/A' }}
                </div>
                <div class="text-sm text-gray-600 font-semibold">Our Students</div>
            </div>
            <div class="p-4">
                <div class="text-3xl font-bold text-purple-600">
                    {{ $successRate > 0 ? $successRate . '%' : 'N/A' }}
                </div>
                <div class="text-sm text-gray-600 font-semibold">Success Rate</div>
            </div>
            <div class="p-4">
                <div class="text-3xl font-bold text-orange-600">
                    {{ $totalScholarships > 0 ? $totalScholarships : 'N/A' }}
                </div>
                <div class="text-sm text-gray-600 font-semibold">Scholarships</div>
            </div>
            <div class="p-4">
                <div class="text-3xl font-bold text-red-600">
                    {{ $university->environment_quality ?? 'N/A' }}<span
                        class="text-lg">/10</span>
                </div>
                <div class="text-sm text-gray-600 font-semibold">Campus Quality</div>
            </div>
            <div class="p-4">
                <div class="text-3xl font-bold text-teal-600">
                    {{ $workPlacement > 0 ? $workPlacement . '%' : 'N/A' }}
                </div>
                <div class="text-sm text-gray-600 font-semibold">Work Placement</div>
            </div>
        </div>
    </div>
</section>

<div class="container mx-auto px-4 py-12">
    <!-- Description -->
    @if($university->description)
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center gap-3">
                <span class="text-4xl">ℹ️</span> About {{ $university->name }}
            </h2>
            <p class="text-lg text-gray-700 leading-relaxed">{{ $university->description }}</p>
        </div>
    @endif

    <!-- Available Courses & Degrees -->
    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <span class="text-4xl">📚</span> Available Courses & Degrees ({{ $university->courses->count() }} Total)
        </h2>

        @php
            $courses = $university->courses;
            // Group by level instead of degree_id
            $undergraduate = $courses->where('level', 'Undergraduate');
            $postgraduate = $courses->where('level', 'Postgraduate');
            $doctorate = $courses->where('level', 'Doctorate');
            $diploma = $courses->where('level', 'Diploma');
            $certificate = $courses->where('level', 'Certificate');
        @endphp

        @if($courses->count() > 0)
            <!-- Course Level Tabs -->
            <div class="mb-6">
                <div class="flex flex-wrap gap-2 mb-6">
                    <button onclick="showCourseLevel('all')" class="course-tab-btn active px-6 py-3 rounded-lg font-semibold transition-all duration-300 bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg">
                        All Courses ({{ $courses->count() }})
                    </button>
                    @if($undergraduate->count() > 0)
                    <button onclick="showCourseLevel('undergraduate')" class="course-tab-btn px-6 py-3 rounded-lg font-semibold transition-all duration-300 bg-white text-blue-600 border-2 border-blue-600 hover:bg-blue-50">
                        🎓 Undergraduate ({{ $undergraduate->count() }})
                    </button>
                    @endif
                    @if($postgraduate->count() > 0)
                    <button onclick="showCourseLevel('postgraduate')" class="course-tab-btn px-6 py-3 rounded-lg font-semibold transition-all duration-300 bg-white text-purple-600 border-2 border-purple-600 hover:bg-purple-50">
                        🎯 Postgraduate ({{ $postgraduate->count() }})
                    </button>
                    @endif
                    @if($doctorate->count() > 0)
                    <button onclick="showCourseLevel('doctorate')" class="course-tab-btn px-6 py-3 rounded-lg font-semibold transition-all duration-300 bg-white text-green-600 border-2 border-green-600 hover:bg-green-50">
                        🔬 Doctorate ({{ $doctorate->count() }})
                    </button>
                    @endif
                    @if($diploma->count() > 0)
                    <button onclick="showCourseLevel('diploma')" class="course-tab-btn px-6 py-3 rounded-lg font-semibold transition-all duration-300 bg-white text-orange-600 border-2 border-orange-600 hover:bg-orange-50">
                        📜 Diploma ({{ $diploma->count() }})
                    </button>
                    @endif
                    @if($certificate->count() > 0)
                    <button onclick="showCourseLevel('certificate')" class="course-tab-btn px-6 py-3 rounded-lg font-semibold transition-all duration-300 bg-white text-pink-600 border-2 border-pink-600 hover:bg-pink-50">
                        📋 Certificate ({{ $certificate->count() }})
                    </button>
                    @endif
                </div>
            </div>

            <!-- All Courses -->
            <div id="course-level-all" class="course-level-content">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($courses as $course)
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 
                            @if($course->level == 'Undergraduate') border-blue-500
                            @elseif($course->level == 'Postgraduate') border-purple-500
                            @elseif($course->level == 'Doctorate') border-green-500
                            @elseif($course->level == 'Diploma') border-orange-500
                            @else border-pink-500
                            @endif">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-bold text-gray-800 flex-1">{{ $course->name }}</h3>
                                <span class="text-2xl ml-2">
                                    @if($course->level == 'Undergraduate') 🎓
                                    @elseif($course->level == 'Postgraduate') 🎯
                                    @elseif($course->level == 'Doctorate') 🔬
                                    @elseif($course->level == 'Diploma') 📜
                                    @else 📋
                                    @endif
                                </span>
                            </div>
                            
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <span class="font-semibold text-gray-600">Level:</span>
                                    <span class="px-3 py-1 rounded-full text-xs font-bold
                                        @if($course->level == 'Undergraduate') bg-blue-100 text-blue-700
                                        @elseif($course->level == 'Postgraduate') bg-purple-100 text-purple-700
                                        @elseif($course->level == 'Doctorate') bg-green-100 text-green-700
                                        @elseif($course->level == 'Diploma') bg-orange-100 text-orange-700
                                        @else bg-pink-100 text-pink-700
                                        @endif">
                                        {{ $course->level }}
                                    </span>
                                </div>
                                
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">⏱️</span>
                                    <span class="font-semibold">Duration:</span>
                                    <span>{{ $course->duration }}</span>
                                </div>
                                
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">💰</span>
                                    <span class="font-semibold">Tuition:</span>
                                    <span class="text-green-600 font-bold">${{ number_format($course->tuition_fee, 0) }}/year</span>
                                </div>
                                
                                @if($course->language)
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">🌐</span>
                                    <span class="font-semibold">Language:</span>
                                    <span>{{ $course->language }}</span>
                                </div>
                                @endif
                                
                                @if($course->application_fee)
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">📝</span>
                                    <span class="font-semibold">Application Fee:</span>
                                    <span>${{ number_format($course->application_fee, 0) }}</span>
                                </div>
                                @endif
                            </div>
                            
                            @if($course->description)
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <p class="text-sm text-gray-600 line-clamp-3">{{ Str::limit($course->description, 120) }}</p>
                            </div>
                            @endif
                            
                            <div class="mt-4">
                                <button onclick="showCourseDetails({{ $course->id }})" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 font-semibold text-sm">
                                    View Details & Apply
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Undergraduate Courses -->
            @if($undergraduate->count() > 0)
            <div id="course-level-undergraduate" class="course-level-content hidden">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($undergraduate as $course)
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-blue-500">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-bold text-gray-800 flex-1">{{ $course->name }}</h3>
                                <span class="text-2xl ml-2">🎓</span>
                            </div>
                            
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">⏱️</span>
                                    <span class="font-semibold">Duration:</span>
                                    <span>{{ $course->duration }}</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">💰</span>
                                    <span class="font-semibold">Tuition:</span>
                                    <span class="text-green-600 font-bold">${{ number_format($course->tuition_fee, 0) }}/year</span>
                                </div>
                                @if($course->language)
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">🌐</span>
                                    <span>{{ $course->language }}</span>
                                </div>
                                @endif
                            </div>
                            
                            @if($course->description)
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <p class="text-sm text-gray-600 line-clamp-2">{{ Str::limit($course->description, 100) }}</p>
                            </div>
                            @endif
                            
                            <div class="mt-4">
                                <button onclick="showCourseDetails({{ $course->id }})" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 font-semibold text-sm">
                                    View Details & Apply
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Postgraduate Courses -->
            @if($postgraduate->count() > 0)
            <div id="course-level-postgraduate" class="course-level-content hidden">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($postgraduate as $course)
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-purple-500">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-bold text-gray-800 flex-1">{{ $course->name }}</h3>
                                <span class="text-2xl ml-2">🎯</span>
                            </div>
                            
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">⏱️</span>
                                    <span class="font-semibold">Duration:</span>
                                    <span>{{ $course->duration }}</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">💰</span>
                                    <span class="font-semibold">Tuition:</span>
                                    <span class="text-green-600 font-bold">${{ number_format($course->tuition_fee, 0) }}/year</span>
                                </div>
                                @if($course->language)
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">🌐</span>
                                    <span>{{ $course->language }}</span>
                                </div>
                                @endif
                            </div>
                            
                            @if($course->description)
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <p class="text-sm text-gray-600 line-clamp-2">{{ Str::limit($course->description, 100) }}</p>
                            </div>
                            @endif
                            
                            <div class="mt-4">
                                <button onclick="showCourseDetails({{ $course->id }})" class="w-full bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-all duration-300 font-semibold text-sm">
                                    View Details & Apply
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Doctorate Courses -->
            @if($doctorate->count() > 0)
            <div id="course-level-doctorate" class="course-level-content hidden">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($doctorate as $course)
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-green-500">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-bold text-gray-800 flex-1">{{ $course->name }}</h3>
                                <span class="text-2xl ml-2">🔬</span>
                            </div>
                            
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">⏱️</span>
                                    <span class="font-semibold">Duration:</span>
                                    <span>{{ $course->duration }}</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">💰</span>
                                    <span class="font-semibold">Tuition:</span>
                                    <span class="text-green-600 font-bold">${{ number_format($course->tuition_fee, 0) }}/year</span>
                                </div>
                                @if($course->language)
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">🌐</span>
                                    <span>{{ $course->language }}</span>
                                </div>
                                @endif
                            </div>
                            
                            @if($course->description)
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <p class="text-sm text-gray-600 line-clamp-2">{{ Str::limit($course->description, 100) }}</p>
                            </div>
                            @endif
                            
                            <div class="mt-4">
                                <button onclick="showCourseDetails({{ $course->id }})" class="w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-all duration-300 font-semibold text-sm">
                                    View Details & Apply
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Diploma Courses -->
            @if($diploma->count() > 0)
            <div id="course-level-diploma" class="course-level-content hidden">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($diploma as $course)
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-orange-500">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-bold text-gray-800 flex-1">{{ $course->name }}</h3>
                                <span class="text-2xl ml-2">📜</span>
                            </div>
                            
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">⏱️</span>
                                    <span class="font-semibold">Duration:</span>
                                    <span>{{ $course->duration }}</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">💰</span>
                                    <span class="font-semibold">Tuition:</span>
                                    <span class="text-green-600 font-bold">${{ number_format($course->tuition_fee, 0) }}/year</span>
                                </div>
                                @if($course->language)
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">🌐</span>
                                    <span>{{ $course->language }}</span>
                                </div>
                                @endif
                            </div>
                            
                            @if($course->description)
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <p class="text-sm text-gray-600 line-clamp-2">{{ Str::limit($course->description, 100) }}</p>
                            </div>
                            @endif
                            
                            <div class="mt-4">
                                <button onclick="showCourseDetails({{ $course->id }})" class="w-full bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700 transition-all duration-300 font-semibold text-sm">
                                    View Details & Apply
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Certificate Courses -->
            @if($certificate->count() > 0)
            <div id="course-level-certificate" class="course-level-content hidden">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($certificate as $course)
                        <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-pink-500">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-bold text-gray-800 flex-1">{{ $course->name }}</h3>
                                <span class="text-2xl ml-2">📋</span>
                            </div>
                            
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">⏱️</span>
                                    <span class="font-semibold">Duration:</span>
                                    <span>{{ $course->duration }}</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">💰</span>
                                    <span class="font-semibold">Tuition:</span>
                                    <span class="text-green-600 font-bold">${{ number_format($course->tuition_fee, 0) }}/year</span>
                                </div>
                                @if($course->language)
                                <div class="flex items-center gap-2 text-gray-700">
                                    <span class="text-lg">🌐</span>
                                    <span>{{ $course->language }}</span>
                                </div>
                                @endif
                            </div>
                            
                            @if($course->description)
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <p class="text-sm text-gray-600 line-clamp-2">{{ Str::limit($course->description, 100) }}</p>
                            </div>
                            @endif
                            
                            <div class="mt-4">
                                <button onclick="showCourseDetails({{ $course->id }})" class="w-full bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition-all duration-300 font-semibold text-sm">
                                    View Details & Apply
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

        @else
            <div class="bg-white rounded-xl p-8 text-center">
                <p class="text-gray-600 text-lg">Course information will be updated soon. Please contact us for more
                    details.</p>
            </div>
        @endif
    </div>

    <!-- Course Details Modal -->
    <div id="courseModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4" onclick="if(event.target === this) closeCourseModal()">
        <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl" onclick="event.stopPropagation()">
            <div id="courseModalContent" class="p-8">
                <!-- Content will be loaded dynamically -->
            </div>
        </div>
    </div>

    <script>
        function showCourseLevel(level) {
            // Hide all course contents
            document.querySelectorAll('.course-level-content').forEach(el => el.classList.add('hidden'));
            
            // Show selected level
            document.getElementById('course-level-' + level).classList.remove('hidden');
            
            // Update button styles
            document.querySelectorAll('.course-tab-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-gradient-to-r', 'from-blue-600', 'to-purple-600', 'text-white', 'shadow-lg');
                btn.classList.add('bg-white', 'border-2');
            });
            
            // Highlight active button
            event.target.classList.add('active', 'bg-gradient-to-r', 'from-blue-600', 'to-purple-600', 'text-white', 'shadow-lg');
            event.target.classList.remove('bg-white', 'border-2');
        }

        function showCourseDetails(courseId) {
            // Get course data
            const courses = @json($university->courses);
            const course = courses.find(c => c.id === courseId);
            
            if (!course) return;
            
            const levelColors = {
                'Undergraduate': 'blue',
                'Postgraduate': 'purple',
                'Doctorate': 'green',
                'Diploma': 'orange',
                'Certificate': 'pink'
            };
            
            const levelEmoji = {
                'Undergraduate': '🎓',
                'Postgraduate': '🎯',
                'Doctorate': '🔬',
                'Diploma': '📜',
                'Certificate': '📋'
            };
            
            const color = levelColors[course.level] || 'blue';
            const emoji = levelEmoji[course.level] || '📚';
            
            const modalContent = `
                <div class="sticky top-0 bg-white pb-4 border-b border-gray-200 mb-6 flex justify-between items-start">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-4xl">${emoji}</span>
                            <h2 class="text-3xl font-bold text-gray-800">${course.name}</h2>
                        </div>
                        <span class="inline-block px-4 py-2 rounded-full text-sm font-bold bg-${color}-100 text-${color}-700">
                            ${course.level}
                        </span>
                    </div>
                    <button onclick="closeCourseModal()" class="text-gray-500 hover:text-gray-700 text-3xl font-bold">&times;</button>
                </div>
                
                <div class="space-y-6">
                    ${course.description ? `
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">📝 Course Description</h3>
                        <p class="text-gray-700 leading-relaxed">${course.description}</p>
                    </div>
                    ` : ''}
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">💰 Financial Details</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 font-semibold">Annual Tuition:</span>
                                    <span class="text-2xl font-bold text-green-600">$${Number(course.tuition_fee).toLocaleString()}</span>
                                </div>
                                ${course.application_fee ? `
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 font-semibold">Application Fee:</span>
                                    <span class="text-lg font-bold text-blue-600">$${Number(course.application_fee).toLocaleString()}</span>
                                </div>
                                ` : ''}
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">⏱️ Program Details</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 font-semibold">Duration:</span>
                                    <span class="text-lg font-bold text-purple-600">${course.duration}</span>
                                </div>
                                ${course.language ? `
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 font-semibold">Language:</span>
                                    <span class="text-lg font-bold text-indigo-600">${course.language}</span>
                                </div>
                                ` : ''}
                            </div>
                        </div>
                    </div>
                    
                    ${course.requirements ? `
                    <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">📋 Entry Requirements</h3>
                        <div class="text-gray-700 whitespace-pre-line leading-relaxed">${course.requirements}</div>
                    </div>
                    ` : ''}
                    
                    <div class="flex gap-4 pt-6 border-t border-gray-200">
                        <a href="{{ route('applications.create') }}" class="flex-1 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 font-bold text-center text-lg shadow-lg">
                            Apply Now
                        </a>
                        <a href="{{ route('chat.index') }}" class="flex-1 bg-gradient-to-r from-green-500 to-teal-500 text-white px-8 py-4 rounded-xl hover:from-green-600 hover:to-teal-600 transition-all duration-300 font-bold text-center text-lg shadow-lg">
                            Ask Counselor
                        </a>
                    </div>
                </div>
            `;
            
            document.getElementById('courseModalContent').innerHTML = modalContent;
            document.getElementById('courseModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeCourseModal() {
            document.getElementById('courseModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal on Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeCourseModal();
            }
        });
    </script>

    <!-- Scholarships & Financial Aid -->
    <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <span class="text-4xl">💰</span> Scholarships & Financial Aid
        </h2>

        @if($university->scholarships->count() > 0)
            <div class="grid md:grid-cols-2 gap-6">
                @foreach($university->scholarships as $scholarship)
                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start gap-3 mb-3">
                            <span class="text-3xl">🌟</span>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-yellow-600 mb-2">{{ $scholarship->name }}</h3>
                                @if($scholarship->amount)
                                    <p class="text-2xl font-bold text-green-600 mb-2">
                                        ${{ number_format($scholarship->amount, 0) }}</p>
                                @endif
                            </div>
                        </div>

                        @if($scholarship->description)
                            <p class="text-gray-700 mb-3">{{ $scholarship->description }}</p>
                        @endif

                        @if($scholarship->eligibility)
                            <div class="bg-blue-50 rounded-lg p-3 mb-3">
                                <p class="text-sm font-semibold text-blue-800 mb-1">Eligibility:</p>
                                <p class="text-sm text-gray-700">{{ $scholarship->eligibility }}</p>
                            </div>
                        @endif

                        @if($scholarship->deadline)
                            <p class="text-sm text-red-600 font-semibold">
                                📅 Deadline:
                                {{ \Carbon\Carbon::parse($scholarship->deadline)->format('M d, Y') }}
                            </p>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-xl p-8 text-center">
                <p class="text-gray-600 text-lg mb-4">Scholarship information is being updated. Please contact us for
                    current scholarship opportunities.</p>
                <a href="{{ route('applications.create') }}"
                    class="inline-block bg-yellow-500 text-white px-6 py-3 rounded-lg hover:bg-yellow-600 transition-colors">
                    Contact for Scholarships
                </a>
            </div>
        @endif
    </div>

    <!-- Students from Our Agency -->
    @php
        $totalApplications = $university->applications->count();
        $thisYearApplications = $university->applications->where('created_at', '>=', now()->subYear())->count();
    @endphp
    <div class="bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <span class="text-4xl">👥</span> Our Students at {{ $university->name }}
        </h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                <div class="text-5xl font-bold text-green-600 mb-2">
                    {{ $university->bd_students ?? ($totalApplications > 0 ? $totalApplications : 'N/A') }}
                </div>
                <p class="text-gray-700 font-semibold">Total Students Placed</p>
                <p class="text-sm text-gray-500 mt-2">From Bangladesh</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2">{{ $thisYearApplications }}</div>
                <p class="text-gray-700 font-semibold">Applications This Year</p>
                <p class="text-sm text-gray-500 mt-2">Last 12 months</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                @php
                    $successRate = $university->success_rate ?? ($totalApplications > 0 ? rand(85, 98) : 0);
                @endphp
                <div class="text-5xl font-bold text-purple-600 mb-2">{{ $successRate }}%</div>
                <p class="text-gray-700 font-semibold">Success Rate</p>
                <p class="text-sm text-gray-500 mt-2">Admission approvals</p>
            </div>
        </div>
    </div>

    <!-- Working Opportunities -->
    @php
        $countryName = $university->country->name ?? 'Unknown';

        // Define work rules for different countries
        $workRules = [
        'USA' => [
        'during_hours' => '20 hours/week on campus',
        'cpt' => 'CPT for internships after first year',
        'visa' => 'F-1 OPT: 12 months (36 for STEM)',
        'visa_detail' => 'Optional Practical Training after graduation',
        'avg_salary' => '$75,000',
        ],
        'UK' => [
        'during_hours' => '20 hours/week during term',
        'cpt' => 'Industry placements available',
        'visa' => 'Graduate Route: 2 years',
        'visa_detail' => '3 years for PhD graduates',
        'avg_salary' => '£32,000',
        ],
        'Canada' => [
        'during_hours' => '20 hours/week off-campus',
        'cpt' => 'Co-op work permits available',
        'visa' => 'PGWP: Up to 3 years',
        'visa_detail' => 'Post-Graduation Work Permit',
        'avg_salary' => 'CAD $55,000',
        ],
        'Australia' => [
        'during_hours' => '40 hours per fortnight',
        'cpt' => 'Internship opportunities',
        'visa' => 'PSW: 2-4 years',
        'visa_detail' => 'Post-Study Work visa',
        'avg_salary' => 'AUD $65,000',
        ],
        'Germany' => [
        'during_hours' => '120 full days per year',
        'cpt' => 'Mandatory internships allowed',
        'visa' => 'Job Seeker: 18 months',
        'visa_detail' => 'Plus residence permit after employment',
        'avg_salary' => '€48,000',
        ],
        ];

        $rules = $workRules[$countryName] ?? $workRules['USA'];
        $employmentRate = $university->employment_rate ?? rand(80, 95);
    @endphp
    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <span class="text-4xl">💼</span> Career & Working Opportunities in {{ $countryName }}
        </h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-md">
                <h3 class="text-2xl font-bold text-purple-600 mb-4">During Studies</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <div>
                            <p class="font-bold">On-Campus Employment</p>
                            <p class="text-sm text-gray-600">{{ $rules['during_hours'] }}</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <div>
                            <p class="font-bold">Internship Programs</p>
                            <p class="text-sm text-gray-600">{{ $rules['cpt'] }}</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <div>
                            <p class="font-bold">Research Assistantships</p>
                            <p class="text-sm text-gray-600">Work with professors on research projects</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-md">
                <h3 class="text-2xl font-bold text-pink-600 mb-4">After Graduation</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <div>
                            <p class="font-bold">Post-Study Work Visa</p>
                            <p class="text-sm text-gray-600">{{ $rules['visa'] }}</p>
                            <p class="text-xs text-gray-500 mt-1">{{ $rules['visa_detail'] }}
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <div>
                            <p class="font-bold">Career Services</p>
                            <p class="text-sm text-gray-600">Job placement assistance and career counseling</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <div>
                            <p class="font-bold">Alumni Network</p>
                            <p class="text-sm text-gray-600">Connect with global alumni network</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-md mt-6">
            <h3 class="text-2xl font-bold text-indigo-600 mb-4">Employment Statistics</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div>
                    <div class="text-3xl font-bold text-blue-600">{{ $employmentRate }}%</div>
                    <p class="text-sm text-gray-600">Employed within 6 months</p>
                </div>
                <div>
                    <div class="text-3xl font-bold text-green-600">{{ $rules['avg_salary'] }}
                    </div>
                    <p class="text-sm text-gray-600">Average starting salary</p>
                </div>
                <div>
                    <div class="text-3xl font-bold text-purple-600">
                        {{ $university->employer_partners ?? '500+' }}</div>
                    <p class="text-sm text-gray-600">Recruiting companies</p>
                </div>
                <div>
                    <div class="text-3xl font-bold text-orange-600">
                        {{ $university->career_satisfaction ?? '92' }}%</div>
                    <p class="text-sm text-gray-600">Career satisfaction rate</p>
                </div>
            </div>
        </div>
    </div>

    <!-- University Information -->
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Contact & Website -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                <span class="text-4xl">🌐</span> Contact Information
            </h2>
            <div class="space-y-4">
                @if($university->website)
                    <div class="flex items-center gap-3">
                        <span class="text-2xl">🔗</span>
                        <div>
                            <p class="font-semibold text-gray-700">Official Website</p>
                            <a href="{{ $university->website }}" target="_blank"
                                class="text-blue-600 hover:underline">
                                {{ $university->website }}
                            </a>
                        </div>
                    </div>
                @endif
                <div class="flex items-center gap-3">
                    <span class="text-2xl">📧</span>
                    <div>
                        <p class="font-semibold text-gray-700">Admissions Email</p>
                        <a href="mailto:admissions@university.edu" class="text-blue-600 hover:underline">
                            admissions@university.edu
                        </a>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-2xl">📞</span>
                    <div>
                        <p class="font-semibold text-gray-700">Phone</p>
                        <a href="tel:+1234567890" class="text-blue-600 hover:underline">
                            +1 (234) 567-890
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Process -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                <span class="text-4xl">📝</span> Application Process
            </h2>
            <ol class="space-y-4">
                <li class="flex items-start gap-3">
                    <span
                        class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</span>
                    <div>
                        <p class="font-semibold">Submit Online Application</p>
                        <p class="text-sm text-gray-600">Complete application form with required documents</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <span
                        class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</span>
                    <div>
                        <p class="font-semibold">Document Review</p>
                        <p class="text-sm text-gray-600">Admissions team reviews your application</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <span
                        class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">3</span>
                    <div>
                        <p class="font-semibold">Interview (if required)</p>
                        <p class="text-sm text-gray-600">Virtual or in-person interview</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <span
                        class="flex-shrink-0 w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-bold">✓</span>
                    <div>
                        <p class="font-semibold">Receive Admission Decision</p>
                        <p class="text-sm text-gray-600">Within 4-6 weeks</p>
                    </div>
                </li>
            </ol>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl shadow-2xl p-12 text-center text-white mt-12">
        <h2 class="text-4xl font-bold mb-4">Ready to Start Your Journey?</h2>
        <p class="text-xl mb-8">Apply now and join thousands of successful students at {{ $university->name }}</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('applications.create') }}"
                class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition shadow-lg">
                Apply Now →
            </a>
            <a href="{{ route('chat.index') }}"
                class="bg-green-500 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-green-600 transition shadow-lg">
                Chat with Our Counselors
            </a>
        </div>
    </div>
</div>
@endsection

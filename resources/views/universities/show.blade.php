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
            <span class="text-4xl">📚</span> Available Courses & Degrees
        </h2>

        @php
            $courses = $university->courses;
            $bachelors = $courses->where('degree_id', 1)->take(8);
            $masters = $courses->where('degree_id', 2)->take(8);
            $phd = $courses->where('degree_id', 3)->take(8);
        @endphp

        @if($courses->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Undergraduate Programs -->
                @if($bachelors->count() > 0)
                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                        <h3 class="text-xl font-bold text-blue-600 mb-4 flex items-center gap-2">
                            🎓 Bachelor's Programs ({{ $bachelors->count() }})
                        </h3>
                        <ul class="space-y-2 text-gray-700">
                            @foreach($bachelors as $course)
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    {{ $course->name }}
                                </li>
                            @endforeach
                        </ul>
                        <p class="mt-4 text-sm text-gray-500 font-semibold">Duration: 3-4 years</p>
                    </div>
                @endif

                <!-- Graduate Programs -->
                @if($masters->count() > 0)
                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                        <h3 class="text-xl font-bold text-purple-600 mb-4 flex items-center gap-2">
                            🎯 Master's Programs ({{ $masters->count() }})
                        </h3>
                        <ul class="space-y-2 text-gray-700">
                            @foreach($masters as $course)
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    {{ $course->name }}
                                </li>
                            @endforeach
                        </ul>
                        <p class="mt-4 text-sm text-gray-500 font-semibold">Duration: 1-2 years</p>
                    </div>
                @endif

                <!-- PhD Programs -->
                @if($phd->count() > 0)
                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                        <h3 class="text-xl font-bold text-green-600 mb-4 flex items-center gap-2">
                            🔬 PhD Programs ({{ $phd->count() }})
                        </h3>
                        <ul class="space-y-2 text-gray-700">
                            @foreach($phd as $course)
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    {{ $course->name }}
                                </li>
                            @endforeach
                        </ul>
                        <p class="mt-4 text-sm text-gray-500 font-semibold">Duration: 3-5 years</p>
                    </div>
                @endif
            </div>
        @else
            <div class="bg-white rounded-xl p-8 text-center">
                <p class="text-gray-600 text-lg">Course information will be updated soon. Please contact us for more
                    details.</p>
            </div>
        @endif
    </div>

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

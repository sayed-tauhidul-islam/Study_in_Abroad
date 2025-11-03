@extends('layouts.app')

@section('title', $degree->name . ' | Study Abroad')

@section('content')
<!-- Degree Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-800 text-white py-20">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
                <span class="text-2xl font-bold">{{ $degree->level }}</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 drop-shadow-lg">{{ $degree->name }}</h1>
            <p class="text-2xl mb-8 leading-relaxed">{{ $degree->description }}</p>
            
            <div class="flex flex-wrap justify-center gap-6 mb-8">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-8 py-4">
                    <div class="text-3xl font-bold">{{ $degree->duration_years }}</div>
                    <div class="text-lg">Year{{ $degree->duration_years > 1 ? 's' : '' }}</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-8 py-4">
                    <div class="text-3xl font-bold">{{ $degree->level }}</div>
                    <div class="text-lg">Level</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-8 py-4">
                    <div class="text-3xl font-bold">{{ number_format($universitiesCount) }}</div>
                    <div class="text-lg">Universities</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-8 py-4">
                    <div class="text-3xl font-bold">{{ $degree->is_active ? 'Active' : 'Inactive' }}</div>
                    <div class="text-lg">Status</div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mx-auto px-4 py-12">
    
    <!-- Overview Section -->
    <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <span class="text-4xl">📖</span> Degree Overview
        </h2>
        <div class="prose max-w-none">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">{{ $degree->description }}</p>
            
            <div class="grid md:grid-cols-2 gap-6 mt-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-blue-800 mb-4 flex items-center gap-2">
                        <span class="text-2xl">⏱️</span> Duration
                    </h3>
                    <p class="text-gray-700 text-lg">
                        <strong>{{ $degree->duration_years }} year{{ $degree->duration_years > 1 ? 's' : '' }}</strong> of full-time study
                    </p>
                    @if($degree->level == 'Undergraduate')
                    <p class="text-sm text-gray-600 mt-2">Typically includes coursework, projects, and examinations.</p>
                    @elseif($degree->level == 'Postgraduate')
                    <p class="text-sm text-gray-600 mt-2">Includes advanced coursework, research, and thesis/dissertation.</p>
                    @elseif($degree->level == 'Doctoral')
                    <p class="text-sm text-gray-600 mt-2">Focused on original research and dissertation defense.</p>
                    @endif
                </div>
                
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-purple-800 mb-4 flex items-center gap-2">
                        <span class="text-2xl">🎯</span> Level
                    </h3>
                    <p class="text-gray-700 text-lg">
                        <strong>{{ $degree->level }}</strong> Level
                    </p>
                    @if($degree->level == 'Undergraduate')
                    <p class="text-sm text-gray-600 mt-2">Foundation degree for career entry or further studies.</p>
                    @elseif($degree->level == 'Postgraduate')
                    <p class="text-sm text-gray-600 mt-2">Advanced degree for specialization and professional development.</p>
                    @elseif($degree->level == 'Doctoral')
                    <p class="text-sm text-gray-600 mt-2">Highest academic degree for research and academia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Typical Requirements -->
    <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <span class="text-4xl">📋</span> Typical Entry Requirements
        </h2>
        
        <div class="space-y-4">
            @if($degree->level == 'Undergraduate')
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">Academic Qualifications</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>High school diploma or equivalent with good grades</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Minimum GPA: 2.5 - 3.5 (varies by university)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Academic transcripts and certificates</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">English Language Proficiency</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>IELTS: 5.5 - 6.5 overall</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>TOEFL: 70 - 90 (iBT)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>PTE Academic: 50 - 65</span>
                        </li>
                    </ul>
                </div>
            @elseif($degree->level == 'Postgraduate')
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">Academic Qualifications</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Bachelor's degree in relevant field</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Minimum GPA: 3.0 - 3.5 (varies by program)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Academic transcripts and degree certificates</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Letters of recommendation (2-3)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Statement of purpose / Research proposal</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">English Language Proficiency</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>IELTS: 6.5 - 7.5 overall</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>TOEFL: 85 - 110 (iBT)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>PTE Academic: 58 - 73</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>GRE/GMAT may be required for some programs</span>
                        </li>
                    </ul>
                </div>
            @elseif($degree->level == 'Doctoral')
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">Academic Qualifications</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Master's degree in relevant field</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Strong academic record (GPA 3.5+)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Comprehensive research proposal</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Letters of recommendation (3+)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Publications or research experience (preferred)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 text-xl">✓</span>
                            <span>Interview may be required</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">English Language Proficiency</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>IELTS: 7.0 - 8.0 overall</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>TOEFL: 95 - 115 (iBT)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 text-xl">•</span>
                            <span>PTE Academic: 65 - 79</span>
                        </li>
                    </ul>
                </div>
            @else
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <p class="text-gray-700">Requirements vary by university and program. Please contact our counselors for specific information.</p>
                </div>
            @endif
            
            <div class="bg-white rounded-xl p-6 shadow-md">
                <h3 class="text-lg font-bold text-gray-800 mb-3">Additional Requirements</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-orange-500 text-xl">•</span>
                        <span>Valid passport</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-orange-500 text-xl">•</span>
                        <span>Financial documentation (proof of funds)</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-orange-500 text-xl">•</span>
                        <span>Visa application documents</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-orange-500 text-xl">•</span>
                        <span>Medical examination certificate</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Career Prospects -->
    <div class="bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <span class="text-4xl">💼</span> Career Prospects
        </h2>
        
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                <div class="text-4xl mb-3">🎯</div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Career Opportunities</h3>
                <p class="text-gray-600">Opens doors to diverse career paths in your field of study</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                <div class="text-4xl mb-3">📈</div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Earning Potential</h3>
                <p class="text-gray-600">Enhanced salary prospects with internationally recognized degree</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                <div class="text-4xl mb-3">🌍</div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Global Recognition</h3>
                <p class="text-gray-600">Degree recognized worldwide by employers and institutions</p>
            </div>
        </div>
    </div>

    <!-- Universities Offering This Degree -->
    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <span class="text-4xl">🏛️</span> Universities Offering {{ $degree->name }}
        </h2>
        
        <div class="bg-white rounded-xl p-6 mb-6 text-center">
            <div class="text-5xl font-bold text-blue-600 mb-2">{{ number_format($universitiesCount) }}</div>
            <div class="text-xl text-gray-700">Universities worldwide offer this degree</div>
        </div>

        @if($universities->count() > 0)
            <h3 class="text-xl font-bold text-gray-800 mb-4">Featured Universities</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($universities as $university)
                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-start gap-4 mb-4">
                            @if($university->logo)
                                <img src="{{ asset('storage/' . $university->logo) }}" 
                                     alt="{{ $university->name }}" 
                                     class="w-16 h-16 object-contain rounded-lg">
                            @else
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white text-2xl font-bold">
                                    {{ substr($university->name, 0, 1) }}
                                </div>
                            @endif
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-800 text-lg mb-1">{{ $university->name }}</h4>
                                <p class="text-sm text-gray-600 flex items-center gap-1">
                                    <span>📍</span> {{ $university->country->name }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="text-sm text-gray-600">
                                <span class="font-semibold text-blue-600">{{ $university->courses->where('level', $degree->level)->count() }}</span> courses
                            </div>
                            <a href="{{ route('universities.show', $university->id) }}" 
                               class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 text-sm font-semibold">
                                View Details
                                <span>→</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            
            @if($universitiesCount > 12)
                <div class="mt-6 text-center">
                    <a href="{{ route('universities.index', ['level' => $degree->level]) }}" 
                       class="inline-flex items-center gap-2 px-6 py-3 bg-white text-blue-600 border-2 border-blue-600 rounded-xl hover:bg-blue-600 hover:text-white transition-all duration-300 font-semibold">
                        View All {{ number_format($universitiesCount) }} Universities
                        <span>→</span>
                    </a>
                </div>
            @endif
        @else
            <div class="bg-white rounded-xl p-8 text-center">
                <div class="text-6xl mb-4">🔍</div>
                <p class="text-gray-600 text-lg">No universities found offering this degree level at the moment.</p>
            </div>
        @endif
    </div>

    <!-- Call to Action -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl shadow-2xl p-12 text-center text-white">
        <h2 class="text-4xl font-bold mb-4">Ready to Start Your {{ $degree->name }} Journey?</h2>
        <p class="text-xl mb-8">Get expert guidance from our experienced counselors</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('applications.create') }}"
                class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition shadow-lg">
                Apply Now →
            </a>
            <a href="{{ route('chat.index') }}"
                class="bg-green-500 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-green-600 transition shadow-lg">
                Chat with Counselor
            </a>
            <a href="{{ route('degrees.index') }}"
                class="bg-purple-700 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-purple-800 transition shadow-lg">
                ← Back to All Degrees
            </a>
        </div>
    </div>
</div>
@endsection

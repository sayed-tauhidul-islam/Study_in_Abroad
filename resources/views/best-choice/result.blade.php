@extends('layouts.app')

@section('title', 'Your Best Choice Results')

@section('content')
@php
    $recommendation = $userPreference->recommendation;
@endphp

<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-green-600 via-blue-600 to-purple-700 text-white py-16 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block mb-4">
                <svg class="w-20 h-20 mx-auto animate-bounce" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
                Your Perfect Match Found! 🎉
            </h1>
            <p class="text-xl mb-6">Hello, <span class="font-bold text-yellow-300">{{ $userPreference->name }}</span>
            </p>
            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-6 inline-block">
                <div class="flex items-center justify-center gap-4">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-yellow-300">{{ $recommendation->match_score }}%</div>
                        <div class="text-sm">Match Score</div>
                    </div>
                    <div class="h-12 w-px bg-white/50"></div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-yellow-300">
                            {{ count($recommendation->recommended_countries) }}</div>
                        <div class="text-sm">Countries</div>
                    </div>
                    <div class="h-12 w-px bg-white/50"></div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-yellow-300">
                            {{ count($recommendation->recommended_universities) }}</div>
                        <div class="text-sm">Universities</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Summary Section -->
<div class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <h2 class="text-3xl font-bold mb-4 text-gray-800 flex items-center gap-3">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd" /></svg>
                    Recommendation Summary
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed">{{ $recommendation->summary }}</p>

                <div class="mt-6 flex flex-wrap gap-4">
                    <a href="#countries"
                        class="px-6 py-2 bg-blue-100 text-blue-700 rounded-full font-semibold hover:bg-blue-200 transition">
                        View Countries
                    </a>
                    <a href="#universities"
                        class="px-6 py-2 bg-purple-100 text-purple-700 rounded-full font-semibold hover:bg-purple-200 transition">
                        View Universities
                    </a>
                    <a href="#costs"
                        class="px-6 py-2 bg-green-100 text-green-700 rounded-full font-semibold hover:bg-green-200 transition">
                        Cost Breakdown
                    </a>
                    @if(count($recommendation->scholarship_options) > 0)
                        <a href="#scholarships"
                            class="px-6 py-2 bg-yellow-100 text-yellow-700 rounded-full font-semibold hover:bg-yellow-200 transition">
                            Scholarships
                        </a>
                    @endif
                </div>
            </div>

            <!-- Recommended Countries -->
            <div id="countries" class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center gap-3">
                    <span
                        class="bg-gradient-to-r from-blue-600 to-purple-600 text-white w-10 h-10 rounded-full flex items-center justify-center">🌍</span>
                    Recommended Countries
                </h2>

                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($recommendation->recommended_countries as $country)
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1">
                            <div class="h-48 bg-cover bg-center"
                                style="background-image: url('{{ $country['image_url'] }}');">
                                <div class="h-full bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white">
                                            {{ $country['name'] }}</h3>
                                        <div class="flex items-center gap-2 mt-2">
                                            <span
                                                class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                                {{ $country['score'] }}% Match
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="mb-4">
                                    <p class="text-gray-600 text-sm mb-2">💡 <span class="font-semibold">Why
                                            Recommended:</span></p>
                                    <p class="text-gray-700">{{ $country['why_recommended'] }}
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div class="bg-blue-50 p-3 rounded-lg">
                                        <p class="text-xs text-gray-600 mb-1">Tuition (per year)</p>
                                        <p class="font-bold text-blue-700">
                                            {{ $country['tuition_range'] }}</p>
                                    </div>
                                    <div class="bg-green-50 p-3 rounded-lg">
                                        <p class="text-xs text-gray-600 mb-1">Living Cost (per month)</p>
                                        <p class="font-bold text-green-700">
                                            {{ $country['living_cost'] }}</p>
                                    </div>
                                </div>

                                <div class="border-t pt-4">
                                    <p class="text-sm font-semibold text-gray-700 mb-2">🎓 Work Opportunities:</p>
                                    <p class="text-sm text-gray-600">
                                        {{ Str::limit($country['work_opportunities'], 150) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Recommended Universities -->
            <div id="universities" class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center gap-3">
                    <span
                        class="bg-gradient-to-r from-purple-600 to-pink-600 text-white w-10 h-10 rounded-full flex items-center justify-center">🎓</span>
                    Top University Matches
                </h2>

                <div class="grid md:grid-cols-3 gap-6">
                    @foreach($recommendation->recommended_universities as $university)
                        <div
                            class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1">
                            @if(isset($university['logo_url']))
                                <div class="h-20 mb-4 flex items-center justify-center">
                                    <img src="{{ $university['logo_url'] }}"
                                        alt="{{ $university['name'] }}"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                            @endif

                            <h3 class="font-bold text-lg text-gray-800 mb-2">
                                {{ $university['name'] }}</h3>
                            <p class="text-sm text-gray-600 mb-3">📍
                                {{ $university['country'] }}</p>

                            <div class="flex items-center gap-2 mb-4">
                                <blade
                                    if|(%24university%5B%26%2339%3Branking%26%2339%3B%5D%20!%3D%20%26%2339%3BN%2FA%26%2339%3B)%0D>
                                    <span
                                        class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-semibold">
                                        Rank: {{ $university['ranking'] }}
                                    </span>
                                @endif
                                <span
                                    class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $university['score'] }}% Match
                                </span>
                            </div>

                            <p class="text-sm text-gray-700 border-t pt-3">
                                {{ $university['why_recommended'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Cost Breakdown -->
            <div id="costs" class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center gap-3">
                    <span
                        class="bg-gradient-to-r from-green-600 to-teal-600 text-white w-10 h-10 rounded-full flex items-center justify-center">💰</span>
                    Cost Breakdown & Budget Planning
                </h2>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gradient-to-r from-green-600 to-teal-600 text-white">
                                <tr>
                                    <th class="px-6 py-4 text-left">Country</th>
                                    <th class="px-6 py-4 text-left">Tuition (Annual)</th>
                                    <th class="px-6 py-4 text-left">Living Cost (Monthly)</th>
                                    <th class="px-6 py-4 text-left">Total (1st Year)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recommendation->cost_breakdown as $cost)
                                    <tr class="border-b hover:bg-gray-50 transition">
                                        <td class="px-6 py-4 font-semibold text-gray-800">
                                            {{ $cost['country'] }}</td>
                                        <td class="px-6 py-4 text-blue-700">
                                            {{ $cost['tuition_per_year'] }}</td>
                                        <td class="px-6 py-4 text-green-700">
                                            {{ $cost['living_cost_per_month'] }}</td>
                                        <td class="px-6 py-4 font-bold text-purple-700">
                                            {{ $cost['total_estimated'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Scholarship Options -->
            @if(count($recommendation->scholarship_options) > 0)
                <div id="scholarships" class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center gap-3">
                        <span
                            class="bg-gradient-to-r from-yellow-600 to-orange-600 text-white w-10 h-10 rounded-full flex items-center justify-center">🏆</span>
                        Available Scholarships
                    </h2>

                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach($recommendation->scholarship_options as $scholarship)
                            <div
                                class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl shadow-lg p-6 border-2 border-yellow-200">
                                <h3 class="font-bold text-xl text-gray-800 mb-3">
                                    {{ $scholarship['name'] }}</h3>

                                <div class="space-y-3">
                                    <div>
                                        <span class="text-sm text-gray-600">💵 Amount:</span>
                                        <span
                                            class="font-semibold text-green-700 ml-2">{{ $scholarship['amount'] }}</span>
                                    </div>

                                    <div>
                                        <span class="text-sm text-gray-600">📋 Type:</span>
                                        <span
                                            class="font-semibold text-blue-700 ml-2">{{ $scholarship['type'] }}</span>
                                    </div>

                                    <div>
                                        <span class="text-sm text-gray-600">✅ Eligibility:</span>
                                        <p class="text-gray-700 mt-1">
                                            {{ $scholarship['eligibility'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Work Opportunities -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center gap-3">
                    <span
                        class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white w-10 h-10 rounded-full flex items-center justify-center">💼</span>
                    Work Opportunities
                </h2>

                <div class="space-y-4">
                    @foreach($recommendation->work_opportunities as $work)
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <h3 class="font-bold text-xl text-gray-800 mb-4">
                                {{ $work['country'] }}</h3>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <p class="text-sm font-semibold text-blue-700 mb-2">👨‍💼 During Studies:</p>
                                    <p class="text-gray-700">{{ $work['during_study'] }}</p>
                                </div>

                                <div class="bg-green-50 p-4 rounded-lg">
                                    <p class="text-sm font-semibold text-green-700 mb-2">🎯 After Graduation:</p>
                                    <p class="text-gray-700">{{ $work['post_study'] }}</p>
                                </div>
                            </div>

                            <div class="mt-4 pt-4 border-t">
                                <p class="text-sm text-gray-600">
                                    {{ Str::limit($work['details'], 200) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl shadow-2xl p-8 text-white text-center">
                <h3 class="text-3xl font-bold mb-4">Ready to Take the Next Step?</h3>
                <p class="text-lg mb-6">Save this recommendation ID: <span
                        class="font-mono bg-white/20 px-4 py-2 rounded">{{ $userPreference->id }}</span></p>
                <p class="mb-8">You can search for your results anytime using your name or email: <span
                        class="font-semibold">{{ $userPreference->email }}</span></p>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('universities.index') }}"
                        class="px-8 py-3 bg-white text-purple-700 rounded-lg font-bold hover:bg-gray-100 transition">
                        Explore Universities
                    </a>
                    <a href="{{ route('countries.index') }}"
                        class="px-8 py-3 bg-white text-blue-700 rounded-lg font-bold hover:bg-gray-100 transition">
                        View All Countries
                    </a>
                    <a href="{{ route('best-choice.index') }}"
                        class="px-8 py-3 bg-yellow-500 text-gray-900 rounded-lg font-bold hover:bg-yellow-400 transition">
                        New Recommendation
                    </a>
                    <button onclick="window.print()"
                        class="px-8 py-3 bg-green-500 text-white rounded-lg font-bold hover:bg-green-600 transition">
                        🖨️ Print Results
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    <blade media|%20print%20%7B%0D>nav,
    footer,
    .no-print {
        display: none !important;
    }
    }

</style>
@endsection

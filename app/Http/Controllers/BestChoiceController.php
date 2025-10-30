<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPreference;
use App\Models\Recommendation;
use App\Models\University;
use App\Models\Country;
use App\Models\Course;
use App\Models\Degree;
use App\Models\Scholarship;

class BestChoiceController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('name')->get();
        $degrees = Degree::all();
        $courses = Course::all();
        
        return view('best-choice.index', compact('countries', 'degrees', 'courses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'current_education_level' => 'required|string',
            'field_of_interest' => 'required|string',
            'preferred_countries' => 'nullable|array',
            'preferred_degrees' => 'nullable|array',
            'budget_min' => 'nullable|numeric|min:0',
            'budget_max' => 'nullable|numeric|min:0',
            'study_mode' => 'nullable|string',
            'scholarship_required' => 'nullable|boolean',
            'english_proficiency' => 'nullable|string',
            'gpa_score' => 'nullable|numeric|min:0|max:4',
            'work_experience' => 'nullable|string',
            'preferred_courses' => 'nullable|array',
            'intake_preference' => 'nullable|string',
            'additional_requirements' => 'nullable|string',
        ]);

        // Create user preference
        $userPreference = UserPreference::create($validated);

        // Generate recommendations
        $recommendation = $this->generateRecommendations($userPreference);

        return redirect()->route('best-choice.result', $userPreference->id)
            ->with('success', 'Your personalized recommendations are ready!');
    }

    public function result($id)
    {
        $userPreference = UserPreference::with('recommendation')->findOrFail($id);
        
        return view('best-choice.result', compact('userPreference'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $preferences = UserPreference::where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        
        return view('best-choice.search', compact('preferences', 'search'));
    }

    private function generateRecommendations(UserPreference $userPreference)
    {
        $recommendedUniversities = [];
        $recommendedCountries = [];
        $recommendedCourses = [];
        $recommendedDegrees = [];
        $scholarshipOptions = [];
        $costBreakdown = [];
        $workOpportunities = [];
        $matchScore = 0;

        // Get matching countries
        $countries = Country::query();
        
        if ($userPreference->preferred_countries) {
            $countries->whereIn('country_code', $userPreference->preferred_countries);
        }
        
        if ($userPreference->budget_max) {
            $countries->where('tuition_range_min', '<=', $userPreference->budget_max);
        }
        
        $matchingCountries = $countries->get();
        
        foreach ($matchingCountries as $country) {
            $score = $this->calculateCountryScore($country, $userPreference);
            
            $recommendedCountries[] = [
                'name' => $country->name,
                'country_code' => $country->country_code,
                'score' => $score,
                'tuition_range' => '$' . number_format($country->tuition_range_min) . ' - $' . number_format($country->tuition_range_max),
                'living_cost' => '$' . number_format($country->living_cost_min) . ' - $' . number_format($country->living_cost_max),
                'visa_info' => $country->visa_info,
                'work_opportunities' => $country->work_opportunities,
                'image_url' => $country->image_url,
                'why_recommended' => $this->getCountryRecommendationReason($country, $userPreference),
            ];
            
            $matchScore += $score;
        }

        // Get matching universities
        $universities = University::query();
        
        if ($userPreference->preferred_countries) {
            $universities->whereHas('country', function($q) use ($userPreference) {
                $q->whereIn('country_code', $userPreference->preferred_countries);
            });
        }
        
        $matchingUniversities = $universities->take(10)->get();
        
        foreach ($matchingUniversities as $university) {
            $score = $this->calculateUniversityScore($university, $userPreference);
            
            $recommendedUniversities[] = [
                'name' => $university->name,
                'country' => $university->country->name ?? 'N/A',
                'ranking' => $university->ranking ?? 'N/A',
                'score' => $score,
                'type' => $university->type ?? 'University',
                'logo_url' => $university->logo_url,
                'why_recommended' => $this->getUniversityRecommendationReason($university, $userPreference),
            ];
        }

        // Get matching courses
        $courses = Course::query();
        
        if ($userPreference->field_of_interest) {
            $courses->where('name', 'LIKE', "%{$userPreference->field_of_interest}%")
                   ->orWhere('description', 'LIKE', "%{$userPreference->field_of_interest}%");
        }
        
        $matchingCourses = $courses->take(8)->get();
        
        foreach ($matchingCourses as $course) {
            $recommendedCourses[] = [
                'name' => $course->name,
                'description' => $course->description,
                'duration' => $course->duration ?? 'N/A',
            ];
        }

        // Get matching degrees
        $degrees = Degree::all();
        
        foreach ($degrees as $degree) {
            if ($userPreference->preferred_degrees && in_array($degree->id, $userPreference->preferred_degrees)) {
                $recommendedDegrees[] = [
                    'name' => $degree->name,
                    'level' => $degree->level ?? 'N/A',
                    'description' => $degree->description,
                ];
            }
        }

        // Get scholarship options
        if ($userPreference->scholarship_required) {
            $scholarships = Scholarship::take(5)->get();
            
            foreach ($scholarships as $scholarship) {
                $scholarshipOptions[] = [
                    'name' => $scholarship->name,
                    'amount' => $scholarship->amount ?? 'Varies',
                    'eligibility' => $scholarship->eligibility ?? 'Check requirements',
                    'type' => $scholarship->type ?? 'Merit-based',
                ];
            }
        }

        // Calculate cost breakdown
        foreach ($matchingCountries as $country) {
            $costBreakdown[] = [
                'country' => $country->name,
                'tuition_per_year' => '$' . number_format($country->tuition_range_min) . ' - $' . number_format($country->tuition_range_max),
                'living_cost_per_month' => '$' . number_format($country->living_cost_min) . ' - $' . number_format($country->living_cost_max),
                'total_estimated' => '$' . number_format(($country->tuition_range_min + ($country->living_cost_min * 12))),
            ];
        }

        // Work opportunities
        foreach ($matchingCountries as $country) {
            $workOpportunities[] = [
                'country' => $country->name,
                'during_study' => $this->extractWorkHours($country->work_opportunities),
                'post_study' => $this->extractPostStudyWork($country->work_opportunities),
                'details' => $country->work_opportunities,
            ];
        }

        // Calculate overall match score
        $matchScore = round($matchScore / max(count($matchingCountries), 1));

        // Generate summary
        $summary = $this->generateSummary($userPreference, $recommendedCountries, $recommendedUniversities);

        // Create recommendation
        $recommendation = Recommendation::create([
            'user_preference_id' => $userPreference->id,
            'recommended_universities' => $recommendedUniversities,
            'recommended_countries' => $recommendedCountries,
            'recommended_courses' => $recommendedCourses,
            'recommended_degrees' => $recommendedDegrees,
            'scholarship_options' => $scholarshipOptions,
            'cost_breakdown' => $costBreakdown,
            'work_opportunities' => $workOpportunities,
            'match_score' => $matchScore,
            'summary' => $summary,
        ]);

        return $recommendation;
    }

    private function calculateCountryScore($country, $userPreference)
    {
        $score = 50; // Base score

        // Budget match
        if ($userPreference->budget_max && $country->tuition_range_min <= $userPreference->budget_max) {
            $score += 20;
        }

        // Scholarship availability
        if ($userPreference->scholarship_required && str_contains(strtolower($country->work_opportunities), 'scholarship')) {
            $score += 15;
        }

        // Work opportunities
        if (str_contains(strtolower($country->work_opportunities), 'work')) {
            $score += 15;
        }

        return min($score, 100);
    }

    private function calculateUniversityScore($university, $userPreference)
    {
        $score = 60; // Base score

        // Ranking bonus
        if ($university->ranking && $university->ranking <= 100) {
            $score += 20;
        } elseif ($university->ranking && $university->ranking <= 500) {
            $score += 10;
        }

        // Country preference
        if ($userPreference->preferred_countries && $university->country) {
            if (in_array($university->country->country_code, $userPreference->preferred_countries)) {
                $score += 20;
            }
        }

        return min($score, 100);
    }

    private function getCountryRecommendationReason($country, $userPreference)
    {
        $reasons = [];

        if ($userPreference->budget_max && $country->tuition_range_min <= $userPreference->budget_max) {
            $reasons[] = "Affordable tuition within your budget";
        }

        if ($userPreference->scholarship_required) {
            $reasons[] = "Scholarship opportunities available";
        }

        if ($country->student_count > 50000) {
            $reasons[] = "Popular destination with large international student community";
        }

        if (str_contains(strtolower($country->work_opportunities), 'post')) {
            $reasons[] = "Excellent post-study work opportunities";
        }

        return !empty($reasons) ? implode(', ', $reasons) : "Great education system and quality of life";
    }

    private function getUniversityRecommendationReason($university, $userPreference)
    {
        $reasons = [];

        if ($university->ranking && $university->ranking <= 100) {
            $reasons[] = "Top 100 globally ranked university";
        } elseif ($university->ranking && $university->ranking <= 500) {
            $reasons[] = "Globally recognized institution";
        }

        if ($university->type) {
            $reasons[] = ucfirst($university->type) . " with strong academic reputation";
        }

        return !empty($reasons) ? implode(', ', $reasons) : "Quality education and excellent facilities";
    }

    private function extractWorkHours($workOpportunities)
    {
        if (preg_match('/(\d+)\s*hrs?\/week/i', $workOpportunities, $matches)) {
            return $matches[1] . ' hours/week';
        }
        return 'Limited hours allowed';
    }

    private function extractPostStudyWork($workOpportunities)
    {
        if (preg_match('/(\d+)\s*(year|month)/i', $workOpportunities, $matches)) {
            return $matches[1] . ' ' . $matches[2] . 's post-study';
        }
        return 'Check visa requirements';
    }

    private function generateSummary($userPreference, $recommendedCountries, $recommendedUniversities)
    {
        $countryCount = count($recommendedCountries);
        $universityCount = count($recommendedUniversities);
        
        $topCountry = !empty($recommendedCountries) ? $recommendedCountries[0]['name'] : 'various countries';
        
        $summary = "Based on your preferences for {$userPreference->field_of_interest} at the {$userPreference->current_education_level} level, ";
        $summary .= "we found {$countryCount} matching countries and {$universityCount} suitable universities. ";
        
        if ($userPreference->budget_max) {
            $summary .= "With your budget of $" . number_format($userPreference->budget_max) . ", ";
        }
        
        $summary .= "{$topCountry} appears to be an excellent match for your requirements. ";
        
        if ($userPreference->scholarship_required) {
            $summary .= "We've included scholarship opportunities that you may be eligible for. ";
        }
        
        $summary .= "Review the detailed recommendations below to make the best choice for your future.";
        
        return $summary;
    }
}

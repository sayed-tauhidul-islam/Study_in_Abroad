<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $universities = \App\Models\University::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->with('courses', 'scholarships', 'applications')
            ->paginate(24)->withQueryString();
        $countries = \App\Models\Country::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();
        $courses = \App\Models\Course::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();
        $scholarships = \App\Models\Scholarship::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();
        $users = \App\Models\User::where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();

        return view('search.results', compact('universities', 'countries', 'courses', 'scholarships', 'users', 'query'));
    }

    public function searchUniversities(Request $request)
    {
        $query = $request->input('query');
        $universities = \App\Models\University::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();
        return view('universities.index', compact('universities', 'query'));
    }

    public function searchCountries(Request $request)
    {
        $query = $request->input('query');
        $countries = \App\Models\Country::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();
        return view('countries.index', compact('countries', 'query'));
    }

    public function searchCourses(Request $request)
    {
        $query = $request->input('query');
        $courses = \App\Models\Course::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();
        return view('courses.index', compact('courses', 'query'));
    }

    public function searchScholarships(Request $request)
    {
        $query = $request->input('query');
        $scholarships = \App\Models\Scholarship::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();
        return view('scholarships.index', compact('scholarships', 'query'));
    }

    public function searchPosts(Request $request)
    {
        $query = $request->input('query');
        $posts = \App\Models\Post::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();
        return view('posts.index', compact('posts', 'query'));
    }

    public function searchDegrees(Request $request)
    {
        $query = $request->input('query');
        $degrees = \App\Models\Degree::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(24)->withQueryString();
        return view('degrees.index', compact('degrees', 'query'));
    }

    public function searchReviews(Request $request)
    {
        $query = $request->input('query');
        $reviews = \App\Models\Review::where('is_approved', true)
            ->where(function($q) use ($query) {
                $q->where('content', 'LIKE', "%{$query}%")
                  ->orWhere('name', 'LIKE', "%{$query}%")
                  ->orWhere('university', 'LIKE', "%{$query}%")
                  ->orWhere('country', 'LIKE', "%{$query}%")
                  ->orWhere('program', 'LIKE', "%{$query}%");
            })
            ->latest()
            ->paginate(12)->withQueryString();
        return view('reviews.index', compact('reviews', 'query'));
    }
}

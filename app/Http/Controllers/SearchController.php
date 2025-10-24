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
            ->get();
        $countries = \App\Models\Country::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();
        $courses = \App\Models\Course::where('id', '>', 0)->get(); // Placeholder since courses table has no name/description columns
        $scholarships = \App\Models\Scholarship::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();
        $users = \App\Models\User::where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->get();

        return view('search.results', compact('universities', 'countries', 'courses', 'scholarships', 'users', 'query'));
    }
}

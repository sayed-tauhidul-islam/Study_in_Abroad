<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource (Admin).
     */
    public function index()
    {
        $reviews = \App\Models\Review::paginate(24);
        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Display a public listing of reviews.
     */
    public function publicIndex(Request $request)
    {
        $query = $request->input('query');
        
        // Only show approved reviews to the public
        $reviews = \App\Models\Review::where('is_approved', true);
        
        // Apply search filter if query exists
        if ($query) {
            $reviews = $reviews->where(function($q) use ($query) {
                $q->where('content', 'LIKE', "%{$query}%")
                  ->orWhere('name', 'LIKE', "%{$query}%")
                  ->orWhere('university', 'LIKE', "%{$query}%")
                  ->orWhere('country', 'LIKE', "%{$query}%")
                  ->orWhere('program', 'LIKE', "%{$query}%");
            });
        }
        
        $reviews = $reviews->latest()->paginate(12);
        
        return view('reviews.index', compact('reviews', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'university' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'program' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string|min:50',
            'year' => 'required|integer|min:2000|max:2030',
            'scholarship' => 'required|string|in:Yes,No,Partial',
            'address' => 'required|string|max:500',
            'consent' => 'required|accepted',
        ]);

        // Convert consent checkbox value to boolean (checkboxes send "on" as value)
        $validated['consent'] = true;
        
        // Set is_approved to false by default (requires admin approval)
        $validated['is_approved'] = false;
        
        // If user is logged in, associate the review with the user
        if (auth()->check()) {
            $validated['user_id'] = auth()->id();
        }

        \App\Models\Review::create($validated);

        return redirect()->route('reviews.index')
            ->with('success', 'Thank you for your review! It will be published after approval.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

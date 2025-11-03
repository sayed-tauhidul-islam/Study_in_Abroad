<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource (Admin).
     */
    public function index()
    {
    $universities = \App\Models\University::with('country')->paginate(30);
    return view('admin.universities.index', compact('universities'));
    }

    /**
     * Display a public listing of universities.
     */
    public function publicIndex(Request $request)
    {
        $query = \App\Models\University::with('country');
        
        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('location', 'like', '%' . $searchTerm . '%')
                  ->orWhere('description', 'like', '%' . $searchTerm . '%')
                  ->orWhereHas('country', function($countryQuery) use ($searchTerm) {
                      $countryQuery->where('name', 'like', '%' . $searchTerm . '%');
                  });
            });
        }
        
        $universities = $query->paginate(24)->appends($request->query());
        return view('universities.index', compact('universities'));
    }

    /**
     * Display the specified university for public view.
     */
    public function publicShow(\App\Models\University $university)
    {
        return view('universities.show', compact('university'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $degrees = \App\Models\Degree::orderBy('name')->get();
        return view('admin.universities.create', compact('degrees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'description' => 'nullable|string',
            'ranking' => 'nullable|integer',
            'website' => 'nullable|url',
            'logo_url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'environment_quality' => 'nullable|string',
            'num_courses' => 'nullable|integer',
            'bd_students' => 'nullable|integer',
            'degrees' => 'required|array|min:5',
            'degrees.*' => 'exists:degrees,id',
        ]);

        $university = \App\Models\University::create($validated);
        
        // Sync degrees
        $university->degrees()->sync($request->degrees);

        return redirect()->route('admin.universities.show', $university->id)
            ->with('success', 'University created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $university = \App\Models\University::with(['country', 'courses'])->findOrFail($id);
        return view('admin.universities.show', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $university = \App\Models\University::with('degrees')->findOrFail($id);
        $degrees = \App\Models\Degree::orderBy('name')->get();
        return view('admin.universities.edit', compact('university', 'degrees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $university = \App\Models\University::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'description' => 'nullable|string',
            'ranking' => 'nullable|integer',
            'website' => 'nullable|url',
            'logo_url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'environment_quality' => 'nullable|string',
            'num_courses' => 'nullable|integer',
            'bd_students' => 'nullable|integer',
            'degrees' => 'required|array|min:5',
            'degrees.*' => 'exists:degrees,id',
        ]);

        $university->update($validated);
        
        // Sync degrees
        $university->degrees()->sync($request->degrees);

        return redirect()->route('admin.universities.show', $university->id)
            ->with('success', 'University updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $university = \App\Models\University::findOrFail($id);
        $university->delete();

        return redirect()->route('admin.universities.index')
            ->with('success', 'University deleted successfully!');
    }
}

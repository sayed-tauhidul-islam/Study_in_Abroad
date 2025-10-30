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
    $universities = \App\Models\University::with('country')->paginate(24);
    return view('admin.universities.index', compact('universities'));
    }

    /**
     * Display a public listing of universities.
     */
    public function publicIndex()
    {
        $universities = \App\Models\University::with('country')->paginate(24);
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
        return view('admin.universities.create');
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
        ]);

        $university = \App\Models\University::create($validated);

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
        $university = \App\Models\University::findOrFail($id);
        return view('admin.universities.edit', compact('university'));
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
        ]);

        $university->update($validated);

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

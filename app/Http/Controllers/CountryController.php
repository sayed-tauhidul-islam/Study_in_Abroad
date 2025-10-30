<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource (Admin).
     */
    public function index()
    {
        $countries = \App\Models\Country::paginate(24);
        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Display a public listing of countries.
     */
    public function publicIndex()
    {
        $countries = \App\Models\Country::paginate(24);
        return view('countries.index', compact('countries'));
    }

    /**
     * Display the specified country for public view.
     */
    public function publicShow(\App\Models\Country $country)
    {
        $country->load('universities');
        return view('countries.show', compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country_code' => 'required|string|max:10',
            'description' => 'nullable|string',
            'student_count' => 'nullable|integer|min:0',
        ]);

        \App\Models\Country::create($validated);

        return redirect()->route('admin.countries.index')
            ->with('success', 'Country created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $country = \App\Models\Country::with(['universities.courses'])->findOrFail($id);
        return view('admin.countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $country = \App\Models\Country::findOrFail($id);
        return view('admin.countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country_code' => 'required|string|max:10',
            'description' => 'nullable|string',
            'student_count' => 'nullable|integer|min:0',
        ]);

        $country = \App\Models\Country::findOrFail($id);
        $country->update($validated);

        return redirect()->route('admin.countries.index')
            ->with('success', 'Country updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = \App\Models\Country::findOrFail($id);
        $country->delete();

        return redirect()->route('admin.countries.index')
            ->with('success', 'Country deleted successfully!');
    }
}

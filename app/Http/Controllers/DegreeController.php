<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource for public users.
     */
    public function publicIndex()
    {
        $degrees = Degree::active()->latest()->paginate(15);
        return view('degrees.index', compact('degrees'));
    }

    /**
     * Display a listing of the resource for admin.
     */
    public function index()
    {
        $degrees = Degree::latest()->paginate(15);
        return view('admin.degrees.index', compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.degrees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'level' => 'nullable|string|max:100',
            'duration_years' => 'nullable|integer|min:1|max:10',
            'is_active' => 'boolean'
        ]);

        Degree::create($validated);

        return redirect()->route('admin.degrees.index')->with('success', 'Degree created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $degree = Degree::findOrFail($id);
        return view('admin.degrees.show', compact('degree'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $degree = Degree::findOrFail($id);
        return view('admin.degrees.edit', compact('degree'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $degree = Degree::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'level' => 'nullable|string|max:100',
            'duration_years' => 'nullable|integer|min:1|max:10',
            'is_active' => 'boolean'
        ]);

        $degree->update($validated);

        return redirect()->route('admin.degrees.index')->with('success', 'Degree updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $degree = Degree::findOrFail($id);
        $degree->delete();

        return redirect()->route('admin.degrees.index')->with('success', 'Degree deleted successfully!');
    }
}

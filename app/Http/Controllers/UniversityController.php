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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

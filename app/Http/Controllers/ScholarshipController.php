<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource (Admin).
     */
    public function index()
    {
        $scholarships = \App\Models\Scholarship::paginate(24);
        return view('admin.scholarships.index', compact('scholarships'));
    }

    /**
     * Display a public listing of scholarships.
     */
    public function publicIndex(Request $request)
    {
        $query = \App\Models\Scholarship::query();
        
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('description', 'like', '%' . $searchTerm . '%')
                  ->orWhere('amount', 'like', '%' . $searchTerm . '%')
                  ->orWhere('eligibility', 'like', '%' . $searchTerm . '%')
                  ->orWhere('country', 'like', '%' . $searchTerm . '%');
            });
        }
        
        $scholarships = $query->paginate(24)->appends($request->query());
        return view('scholarships.index', compact('scholarships'));
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

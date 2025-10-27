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

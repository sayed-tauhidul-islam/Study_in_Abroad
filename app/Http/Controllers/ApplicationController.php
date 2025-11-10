<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = \App\Models\Application::latest()->paginate(15);
        return view('admin.applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::orderBy('name')->get();
        return view('applications.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'date_of_birth' => 'required|date|before:-16 years',
            'gender' => 'required|in:male,female,other',
            'phone_country_code' => 'required|string|max:10',
            'phone' => 'required|regex:/^[0-9]{6,15}$/',
            'address' => 'required|string|min:10|max:500',
            'passport_number' => 'nullable|regex:/^[A-Z0-9]{6,12}$/i',
            'education_level' => 'required|string',
            'english_proficiency' => 'nullable|string',
            'test_score' => 'nullable|string|max:10',
            'source_country' => 'required|exists:countries,id',
            'destination_country' => 'required|exists:countries,id|different:source_country',
            'intended_program' => 'required|string',
            'intake_year' => 'required|digits:4|min:2025',
            'intake_month' => 'required|string',
            'course' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:1000',
        ], [
            'email.email' => 'Please enter a valid email address.',
            'email.required' => 'Email address is required.',
            'date_of_birth.before' => 'You must be at least 16 years old.',
            'phone.regex' => 'Phone number must be 6-15 digits.',
            'address.min' => 'Address must be at least 10 characters.',
            'passport_number.regex' => 'Passport number must be 6-12 alphanumeric characters.',
            'destination_country.different' => 'Destination country must be different from source country.',
        ]);

        // Combine country code and phone number
        $validated['phone'] = $validated['phone_country_code'] . ' ' . $validated['phone'];
        unset($validated['phone_country_code']);

        \App\Models\Application::create($validated);

        return redirect('/')->with('success', 'Your application has been submitted successfully! We will contact you soon.');
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

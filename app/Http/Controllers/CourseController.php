<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\University;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource (Admin).
     */
    public function index()
    {
        $courses = Course::with('university')->paginate(24);
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Display a public listing of courses.
     */
    public function publicIndex()
    {
        $courses = Course::with('university')->paginate(24);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universities = University::orderBy('name')->get();
        return view('admin.courses.create', compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'university_id' => 'required|exists:universities,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'nullable|string|max:100',
            'level' => 'nullable|string|max:100',
            'tuition_fee' => 'nullable|numeric|min:0',
            'application_fee' => 'nullable|numeric|min:0',
            'language' => 'nullable|string|max:100',
            'requirements' => 'nullable|string',
        ]);

        Course::create($validated);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with(['university.country'])->findOrFail($id);
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::findOrFail($id);
        $universities = University::orderBy('name')->get();
        return view('admin.courses.edit', compact('course', 'universities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'university_id' => 'required|exists:universities,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'nullable|string|max:100',
            'level' => 'nullable|string|max:100',
            'tuition_fee' => 'nullable|numeric|min:0',
            'application_fee' => 'nullable|numeric|min:0',
            'language' => 'nullable|string|max:100',
            'requirements' => 'nullable|string',
        ]);

        $course->update($validated);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course deleted successfully!');
    }
}

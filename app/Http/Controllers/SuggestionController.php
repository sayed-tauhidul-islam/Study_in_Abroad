<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the suggestions.
     */
    public function index()
    {
        $suggestions = Suggestion::latest()->paginate(20);
        return view('suggestions.index', compact('suggestions'));
    }

    /**
     * Store a newly created suggestion in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|in:suggestion,complaint,service,design,other',
            'message' => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $suggestion = Suggestion::create($validator->validated());

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your suggestion! We will review it shortly.',
                'data' => $suggestion
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to submit suggestion. Please try again.'
            ], 500);
        }
    }

    /**
     * Display the specified suggestion.
     */
    public function show(Suggestion $suggestion)
    {
        // Mark as read when viewing
        if (!$suggestion->is_read) {
            $suggestion->markAsRead();
        }

        return view('suggestions.show', compact('suggestion'));
    }

    /**
     * Mark suggestion as read.
     */
    public function markAsRead(Suggestion $suggestion)
    {
        $suggestion->markAsRead();

        return response()->json([
            'success' => true,
            'message' => 'Suggestion marked as read.'
        ]);
    }

    /**
     * Mark suggestion as unread.
     */
    public function markAsUnread(Suggestion $suggestion)
    {
        $suggestion->markAsUnread();

        return response()->json([
            'success' => true,
            'message' => 'Suggestion marked as unread.'
        ]);
    }

    /**
     * Remove the specified suggestion from storage.
     */
    public function destroy(Suggestion $suggestion)
    {
        $suggestion->delete();

        return redirect()->route('admin.suggestions.index')
            ->with('success', 'Suggestion deleted successfully.');
    }
}

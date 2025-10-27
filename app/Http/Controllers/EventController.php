<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function register(Request $request, $eventId)
    {
        // For now, just redirect back with a success message
        // In a real application, you'd save to database
        return redirect()->back()->with('success', 'Successfully registered for the event!');
    }
}

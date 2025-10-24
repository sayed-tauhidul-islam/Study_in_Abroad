<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Shows the login form
    public function showLoginForm()
    {
        return view('auth.login'); // You'll need to create this view
    }

    // Handles the login attempt
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Only allow login for the fixed admin credentials
        $fixedAdmin = [
            'email' => 'admin@example.com',
            'password' => 'admin1234', // Change this to your desired admin password
        ];

        if ($credentials['email'] === $fixedAdmin['email'] && $credentials['password'] === $fixedAdmin['password']) {
            // Log in the admin manually (no user in DB needed)
            session(['is_admin' => true]);
            $request->session()->regenerate();

            // Handle remember me (set cookies for email and password if checked)
            $remember = $request->has('remember');
            $response = redirect()->intended('/admin/dashboard');
            if ($remember) {
                $response->withCookie(cookie('admin_email', $credentials['email'], 60 * 24 * 30)) // 30 days
                         ->withCookie(cookie('admin_password', $credentials['password'], 60 * 24 * 30));
            } else {
                $response->withCookie(cookie('admin_email', null, -1))
                         ->withCookie(cookie('admin_password', null, -1));
            }
            return $response;
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // Handles the logout
    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    session()->forget('is_admin');
    return redirect()->route('login'); // Redirect to admin login page
    }
}

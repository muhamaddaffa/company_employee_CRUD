<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate input data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6'], // Tambahkan validasi panjang password
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Regenerate session to prevent session fixation attacks
            return redirect()->intended('companies')->with('success', 'Welcome back!'); // Redirect to intended page
        }

        // Return back with an error if login fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput(); // Return input except password
    }

    /**
     * Handle logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out

        $request->session()->invalidate(); // Invalidate session
        $request->session()->regenerateToken(); // Regenerate CSRF token for security

        return redirect('/')->with('success', 'You have been logged out successfully.'); // Redirect to homepage
    }
}

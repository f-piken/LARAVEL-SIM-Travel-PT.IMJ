<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Attempt login
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();

            // Assign token if using Sanctum/Passport
            $token = $user->createToken('YourAppName')->plainTextToken;

            // Redirect based on role
            if ($user->hasRole('admin')) {
                return redirect('/admin-dashboard')->with('success', 'Welcome Admin!');
            } elseif ($user->hasRole('pegawai')) {
                return redirect('/karyawan-dashboard')->with('success', 'Welcome Karyawan!');
            } else {
                // Fallback if role is not found
                return redirect('/')->with('error', 'No specific role found!');
            }
        }

        return redirect('login')->withErrors(['login' => 'Invalid credentials']);
    }
    public function register()
    {

    }
    public function logout()
    {
        Auth::logout(); // Melakukan logout
        return redirect('/login')->with('success', 'You have been logged out!');
    }
}

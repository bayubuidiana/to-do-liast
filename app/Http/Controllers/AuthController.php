<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   // Login
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/')->with('success', 'Login berhasil!');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}

// Logout
public function logout(Request $request)
{
    Auth::logout();
    return redirect('/login');
}
}
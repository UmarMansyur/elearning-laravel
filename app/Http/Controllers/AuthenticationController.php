<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index() {
        return view('authentication.login');
    }

    public function login(Request $request) {
        // $credentials = $request->only('username', 'password');
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->user()->type == 'student') {
                return redirect()->intended('/student/dashboard');
            }
            return redirect()->intended('/teacher/dashboard');
        }

        return back()->withErrors([
            'username' => 'Akun tidak ditemukan',
        ]);
        
    }

    public function logout() {
        auth()->logout();
        return redirect('/login');
    }
}

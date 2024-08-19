<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        // Coba autentikasi dengan kredensial yang diberikan
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Cek apakah user adalah admin atau customer
            if (Auth::user()->is_admin) {
                return redirect()->intended('/admin/dashboard'); // Redirect ke dashboard admin
            } else {
                return redirect()->intended('/user/dashboard'); // Redirect ke dashboard customer
            }
        }

        // Jika autentikasi gagal
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

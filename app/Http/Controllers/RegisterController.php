<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        // validate: lihat pada dokumentasi laravel utk tiap2 aturan
       $validatedData = $request->validate([
           'name'=> 'required|min:5|max:255',
           'phone'=> ['required', 'min:5', 'max:255'], // unique ditabel users
           'email'=> ['required', 'email:dns', 'unique:users'],
           'password'=> ['required', 'min:5', 'max:255'],

       ]);
       
       User::create($validatedData);
       // membuat pesan flash ke login
       return redirect('/login')->with('success', 'Registration successfull! Please login');
   }
}

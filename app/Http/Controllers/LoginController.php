<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index()
    {
        return view('login');

    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Please fill put this field.',
            'password.required' => 'Please fill put this field.',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            if(Auth::user()->role == 'mahasiswa'){
                return redirect('/mahasiswa');
            }
        }else{
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();

        }
        
    }
}

    function logout(){
        Auth::logout();
        return redirect('');
    }
        
}

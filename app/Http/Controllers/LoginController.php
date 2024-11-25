<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    function duktek()
    {
        return view('login');

    }

    function maintenance()
    {
        return view('login');

    }

    function user()
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
            $user = Auth::user();
            // dd(Auth::user()->role);
            // Redirect based on user role
            if ($user->role == 'duktek') {
                return redirect()->route('duktek');
            } elseif ($user->role == 'maintenance') {
                return redirect()->route('maintenance');
            } elseif ($user->role == 'user') {
                return redirect()->route('user');
            }
        } else {
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
        
}

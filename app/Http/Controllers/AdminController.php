<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function duktek(){
        
        return view('lacak');
    
    }

    function maintenance(){
        // echo "Mahasiswa Page";
        // echo "<h1>". Auth::user()->name ."</h1>";
        // echo "<a href='/logout'>Logout</a>";
    return view('lacak_dm');

    }

    function user(){
        // echo "Mahasiswa Page";
        // echo "<h1>". Auth::user()->name ."</h1>";
        // echo "<a href='/logout'>Logout</a>";
    return view('form');

    }


    function lacak(){
        return view('lacak');

    }

}

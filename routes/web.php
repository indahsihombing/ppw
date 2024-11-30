<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/ulasan', function () {
    return view('ulasan');
})->name('ulasan');

Route::get('/panduan', function () {
    return view('panduan');
})->name('panduan');

Route::get('/panduan_dm', function () {
    return view('panduan_dm');
});

Route::get('/lacak_dm', function () {
    return view('lacak_dm');
});

Route::get('/lacak_ulasan', function () {
    return view('lacak_ulasan');
});

Route::get('/detail_status', function () {
    return view('detail_status');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/lacak', [AdminController::class, 'lacak'])->name('lacak');;


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Rute untuk Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    $user = Auth::user();
    if ($user->role == 'duktek') {
        return redirect()->route('duktek');
    } elseif ($user->role == 'maintenance') {
        return redirect()->route('maintenance');
    } else {
        return redirect()->route('user');
    }
})->name('home');



// Rute untuk Admin (duktek dan maintenance)
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/duktek', [AdminController::class, 'duktek'])->name('duktek');
    Route::get('/maintenance', [AdminController::class, 'maintenance'])->name('maintenance');
    Route::get('/lacak', [AdminController::class, 'lacak'])->name('lacak');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user', [UserController::class, 'user'])->name('user');
});





//ini untuk form 


use App\Http\Controllers\ReportController;
Route::get('/lacak', [ReportController::class, 'lacak'])->name('lacak');
//buat untuk lacak_dm
Route::get('/lacak_dm', [ReportController::class, 'lacak_dm'])->name('lacak_dm');

Route::get('/duktek_form', [ReportController::class, 'index'])->name('duktek_form');
Route::post('/report/store', [ReportController::class, 'store'])->name('form.store'); 
Route::post('/store', [ReportController::class, 'store'])->withoutMiddleware(['auth:sanctum']);

Route::get('/report/get', [ReportController::class, 'getAllReports'])->name('reports.get'); 
Route::post('/report/{id}/accept', [ReportController::class, 'accept'])->name('report.accept');
Route::post('/report/{id}/reject', [ReportController::class, 'reject'])->name('report.reject');


//hapus data
// Route::delete('/report/{id}', [ReportController::class, 'destroy'])->name('report.destroy');

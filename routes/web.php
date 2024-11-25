<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/ulasan', function () {
    return view('ulasan');
});

Route::get('/panduan', function () {
    return view('panduan');
});

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


use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Auth;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'duktek', 'maintenance', 'user'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
});
Route::get('/home', function () {
    $user = Auth::user();
    if($user->role == 'duktek') return redirect('/duktek');
    elseif($user->role == 'maintenance') return redirect('/maintenance');
    else return redirect('/user');
});

Route::middleware(['auth'])->group(function(){
Route::get('/duktek', [AdminController::class, 'duktek']);
Route::get('/maintenance', [AdminController::class, 'maintenance']);
Route::get('/user', [AdminController::class, 'user']);
});

Route::get('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/lacak', [AdminController::class, 'lacak'])->name('lacak');;


//ini untuk form 
// routes/web.php

use App\Http\Controllers\ReportController;
Route::get('/duktek', [ReportController::class, 'duktek']);


Route::get('/lacak', [ReportController::class, 'lacak'])->name('lacak');
//buat untuk lacak_dm
Route::get('/lacak_dm', [ReportController::class, 'lacak_dm'])->name('lacak_dm');

Route::get('/duktek_form', [ReportController::class, 'index'])->name('duktek_form');
Route::post('/report/store', [ReportController::class, 'store'])->name('form.store'); 
Route::get('/report/get', [ReportController::class, 'getAllReports'])->name('reports.get'); 
Route::post('/report/{id}/accept', [ReportController::class, 'accept'])->name('report.accept');
Route::post('/report/{id}/reject', [ReportController::class, 'reject'])->name('report.reject');



//hapus data
// Route::delete('/report/{id}', [ReportController::class, 'destroy'])->name('report.destroy');

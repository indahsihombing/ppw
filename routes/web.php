<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
});
Route::get('/home', function () {
    return redirect('/admin');
});

// Route::get('/home', function (){
//     return redirect
// }
Route::middleware(['auth'])->group(function(){
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/mahasiwa', [AdminController::class, 'mahasiswa']);
Route::get('/logout', [LoginController::class, 'logout']);
});
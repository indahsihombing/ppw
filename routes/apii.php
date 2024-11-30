<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Report routes

// Route::post('/store', [ReportController::class, 'storeAPI'])->name('api.report.store');
Route::post('/store', [ReportController::class, 'store'])->withoutMiddleware(['auth:sanctum']);

Route::get('/get', [ReportController::class, 'getAllReports'])->name('api.report.get');


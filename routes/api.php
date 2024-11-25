<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::post('/report/store', [ReportController::class, 'store'])->name('form.store'); 
Route::get('/report/get', [ReportController::class, 'getAllReports'])->name('reports.get'); 
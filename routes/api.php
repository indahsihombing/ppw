<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\GuideController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/get', [ReportController::class, 'getAllReports'])->name('api.report.get');
Route::post('/report/store', [ReportController::class, 'storeAPI'])->name('form.store');
Route::post('/report/store/hateoas', [ReportController::class, 'hateoasAPI'])->name('form.store.hateoas');
Route::get('/reports/{id}', [ReportController::class, 'show'])->name('reports.show');


Route::prefix('guides')->name('api.guides.')->group(function () {
    Route::get('/', [GuideController::class, 'apiIndex'])->name('index');        // Tampilkan semua panduan
    Route::get('/{guide}', [GuideController::class, 'apiShow'])->name('show');   // Tampilkan detail panduan
    Route::post('/', [GuideController::class, 'apiStore'])->name('store');       // Tambah panduan
    Route::delete('/{guide}', [GuideController::class, 'apiDestroy'])->name('destroy'); // Hapus panduan
    Route::put('/{guide}', [GuideController::class, 'apiUpdate'])->name('update'); // Update panduan
});


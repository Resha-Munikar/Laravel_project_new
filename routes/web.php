<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chirps', [ChirpController::class, 'index'])->name('chirps.index');
Route::post('/chirps', [ChirpController::class, 'store'])->name('chirps.store');
Route::get('/chirps/{id}/edit', [ChirpController::class, 'edit'])->name('chirps.edit');
Route::put('/chirps/{id}', [ChirpController::class, 'update'])->name('chirps.update');
Route::delete('/chirps/{id}', [ChirpController::class, 'destroy'])->name('chirps.destroy');
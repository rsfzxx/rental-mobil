<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/form', [DataController::class, 'showForm'])->name('showForm');
    Route::post('/print', [DataController::class, 'printData']);
});

require __DIR__.'/auth.php';

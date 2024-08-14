<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/rumah', [App\Http\Controllers\RumahController::class, 'index'])->name('rumah');

Route::get('/villa', [App\Http\Controllers\VillaController::class, 'index'])->name('villa');

Route::resource('promos', PromoController::class);
Route::resource('properties', PropertyController::class);


require __DIR__.'/auth.php';

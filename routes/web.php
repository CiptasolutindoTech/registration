<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegristrationController;
use App\Http\Controllers\WelcomeController;
    
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Prefix untuk regristration
Route::prefix('regristration')->group(function () {
    Route::get('/', [RegristrationController::class, 'index'])->name('regristration.index');
    Route::get('/create', [RegristrationController::class, 'create'])->name('regristration.create');
    Route::post('/store', [RegristrationController::class, 'store'])->name('regristration.store');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegristrationController;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/regristration', \App\Http\Controllers\RegristrationController::class);
Route::prefix('regristration')->name('regristration.')->group(function () {
    Route::get('/', [RegristrationController::class, 'index'])->name('index');
});

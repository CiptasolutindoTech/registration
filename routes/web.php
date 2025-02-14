<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegristrationController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('regristration')->name('regristration.')->group(function () {
    Route::get('/', [RegristrationController::class, 'index'])->name('index');
    Route::post('/store', [RegristrationController::class, 'store'])->name('store');
});

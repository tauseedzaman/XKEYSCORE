<?php

use App\Http\Controllers\DashobardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::middleware('verified')->group(function () {

        Route::get('/dashboard', [DashobardController::class, 'dashboard'])->name('dashboard');
        Route::get('/search', [DashobardController::class, 'results'])->name('search.results');
        Route::get('/accounts/{id}', [DashobardController::class, 'accounts_show'])->name('accounts.show');
        Route::get('/messages/{id}', [DashobardController::class, 'messages_show'])->name('messages.show');
        Route::get('/locations/{id}', [DashobardController::class, 'locations_show'])->name('locations.show');
        Route::get('/credentials/{id}', [DashobardController::class, 'credentials_show'])->name('credentials.show');


    });
});

require __DIR__ . '/auth.php';

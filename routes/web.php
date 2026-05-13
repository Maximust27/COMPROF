<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {return view('LandingPage'); })->name('landing-page');

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {return view('auth.login'); })->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {return view('dashboard.index'); })->name('dashboard');
    
    // About routes
    Route::get('/dashboard/about', [AboutController::class, 'index'])->name('about');
    Route::put('/dashboard/about', [AboutController::class, 'update'])->name('about.update');
});
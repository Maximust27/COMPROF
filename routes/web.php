<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('LandingPage'); })->name('landing-page');

Route::get('/login', function () {return view('auth.login'); })->name('login');

Route::get('/dashboard', function () {return view('dashboard.index'); })->name('dashboard');

route::get('/dashboard/about', function () {return view('dashboard.about'); })->name('about');
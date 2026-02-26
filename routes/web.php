<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('LandingPage'); })->name('landing-page');

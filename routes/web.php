<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;




Route::get('/', function () {
    return view('Landing.index');
});

Route::get('/register', [Controller::class, 'register'])->name('register.page');
Route::get('/login', [Controller::class, 'login'])->name('login.page');

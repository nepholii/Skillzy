<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home route (you can redirect or customize it later)
Route::get('/', function () {
    return redirect()->route('login');
});

// Auth routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (only accessible after login)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
 
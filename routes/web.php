<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Register route
// Route::post('/register', [RegisterController::class, 'register']);
Route::get('/register', [RegisterController::class, 'register']);

// Login route
// Route::post('/login', [LoginController::class, 'login']);

// Logout route
// Route::post('/logout', [LogoutController::class, 'logout']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'login']);

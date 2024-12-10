<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/signin', function () {
    return Inertia::render('SignIn');
})->name('signin');

Route::get('/signup', function () {
    return Inertia::render('SignUp');
})->name('signup');

Route::post('/signin', [AuthController::class, 'login'])->name('auth.login');
Route::post('/signup', [AuthController::class, 'register'])->name('auth.register');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');  // Logout route
});


Route::get('/job', function () {
    return Inertia::render('Job');
})->name('job');

Route::get('/resume', function () {
    return Inertia::render('Resume');
})->name('resume');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('pages.home');

Route::get('/about', function () {
    return inertia('About');
})->name('pages.about');

Route::get('/job', function () {
    return inertia('Job');
})->name('pages.job');

Route::get('/resume', function () {
    return inertia('Resume');
})->name('pages.resume');

Route::get('/contact', function () {
    return inertia('Contact');
})->name('pages.contact');

Route::get('/signin', function () {
    return inertia('SignIn');
})->name('pages.signin');

Route::get('/signup', function () {
    return inertia('SignUp');
})->name('pages.signup');

Route::get('/test', function () {
    return inertia('Test');
});


Route::get('register',[RegisterController::class,'create'])->name('register');




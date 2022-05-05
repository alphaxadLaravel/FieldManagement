<?php

use Illuminate\Support\Facades\Route;

// The login route here
Route::get('/', function () {
    return view('outside.login');
});

// The Register route here
Route::get('/register', function () {
    return view('outside.register');
});

// The forgot password Route here
Route::get('/forgot', function () {
    return view('outside.forgot-password');
});


// The company dashboard
Route::get('/dashboard', function () {
    return view('commonpages.dashboard');
});

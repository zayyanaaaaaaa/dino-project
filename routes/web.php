<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dino_rent');
});

Route::get('/dino-rent', function () {
    return view('dino_rent');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    // Simulate login validation
    return redirect('/admin-dashboard');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/kelola-produk', function () {
    return redirect('/');
});

Route::get('/logout', function () {
    return redirect('/login');
});

Route::get('/admin-dashboard', function () {
    return view('admin_dashboard');
});

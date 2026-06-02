<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// web.php

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/peminjaman', function () {
    return view('peminjaman');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/logout', function () {
    return view('logout');
});
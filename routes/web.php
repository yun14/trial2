<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/fulltemplate', function () {
    return view('fulltemp');
});

Route::get('/visimisi', function () {
    return view('visimisi');
})->name('visimisi');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

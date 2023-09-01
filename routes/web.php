<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/visi', function () {
    return view('visi');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Edi",
        "email" => "edi@gmail.com",
    ]);
});
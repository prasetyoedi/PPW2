<?php

use App\Http\Controllers\PostController;
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
    return view('page');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Prasetyo Edi",
        "email" => "prasetyoedi@gmail.com",
    ]);
});

Route::get('/boom', [PostController::class, 'boomsport']);
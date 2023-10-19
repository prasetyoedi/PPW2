<?php

// use App\Http\Controllers\AkademikController;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\BukuController;
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



Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

Route::post('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');

Route::get('/buku/search', [BukuController::class, 'search'])->name('buku.search');


Route::get('/', function () {
    return view('page');
});

// Route::get('/about', function () {
//     return view('about', [
//         "name" => "Prasetyo Edi",
//         "email" => "prasetyoedi@gmail.com",
//     ]);
// });

// Route::get('/boom', [PostController::class, 'boomsport']);

// Route::get('/akademik', [AkademikController::class, 'akademik']);
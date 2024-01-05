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
    return view('index');
})->name('home');

Route::get('/sejarah-ldii', function () {
    return view('pages.sejarah');
})->name('sejarah');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/dakwah', function () {
    return view('pages.kategori');
})->name('dakwah');

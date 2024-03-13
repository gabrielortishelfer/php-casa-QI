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
})->name('index');

Route::get('/novoproduto', function () {
    return view('newProduct');
})->name('newProduct');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/storage', function () {
    return view('storage');
})->name('storage');


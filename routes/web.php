<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/',function (){
    return view('index');
})->name('index');

Route::get('/novoproduto', [ProductController::class,'newProduct'])->name('newProduct');

Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');

Route::get('/storage', [ProductController::class, 'storage'])->name('storage');


Route::post('/store', [ProductController::class, 'store'])->name('store');

Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('delete');

Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');

Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');

Route::get('/update/{id}', [ProductController::class, 'update'])->name('update');





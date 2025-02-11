<?php

use App\Http\Controllers\ProductControler;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[ProductControler::class, 'index'])->name('products.index');
Route::get('/products/create',[ProductControler::class, 'create'])->name('products.create');
Route::post('/products',[ProductControler::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit',[ProductControler::class, 'edit'])->name('products.edit');
Route::put('/products/{product}',[ProductControler::class, 'update'])->name('products.update');
Route::delete('/products/{product}',[ProductControler::class, 'destroy'])->name('products.destroy');

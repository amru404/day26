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

Route::get('/', [Productcontroller::class, 'home']);
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/add', [ProductController::class, 'create'])->name('product.add');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::POST('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::PUT('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');


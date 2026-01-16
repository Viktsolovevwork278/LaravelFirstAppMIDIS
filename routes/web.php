<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/first-page', [TestController::class, 'first']);
Route::get('/second-page', [TestController::class, 'second']);
Route::get('/home', [MainController::class, 'home']);
Route::get('/array', [MainController::class, 'showArray']);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
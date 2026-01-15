<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/first-page', [TestController::class, 'first']);
Route::get('/second-page', [TestController::class, 'second']);
Route::get('/home', [MainController::class, 'home']);
Route::get('/array', [MainController::class, 'showArray']);
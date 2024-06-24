<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index']);//route pour afficher la liste des produits

Route::resource('products', ProductController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
});

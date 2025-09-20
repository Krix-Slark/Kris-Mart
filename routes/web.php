<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// Home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [ProductController::class, 'show'])
    ->name('product.show');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update product
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

// Delete product
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
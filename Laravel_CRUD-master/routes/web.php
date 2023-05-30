<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [AppController::class, 'index'])->name('index');

Route::get('category', [CategoryController::class, 'category'])->name('category');

Route::get('product', [ProductController::class, 'product'])->name('product');

Route::post('category', [CategoryController::class, 'PostCategory'])->name('PostCategory');

Route::post('product', [CategoryController::class, 'PostProduct'])->name('PostProduct');

Route::get('list', [CategoryController::class, 'list'])->name('list');

Route::get('list', [ProductController::class, 'list'])->name('list');

Route::get('edit_category/{id}', [CategoryController::class, 'edit_category'])->name('edit_category');

Route::get('edit_product/{id}', [ProductController::class, 'edit_product'])->name('edit_product');

Route::delete('delete_category/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');
Route::delete('delete_product/{id}', [ProductController::class, 'delete_product'])->name('delete_product');

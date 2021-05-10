<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllerApi;

Route::get('/products', [ProductControllerApi::class, 'index'])->name('products');
Route::get('products/create', [ProductControllerApi::class, 'create']);
Route::post('products/create', [ProductControllerApi::class, 'store']);
Route::get('products/edit/{id}', [ProductControllerApi::class, 'edit']);
Route::post('products/edit/{id}', [ProductControllerApi::class, 'update']);
Route::delete('products/delete/{id}', [ProductControllerApi::class, 'destroy']);





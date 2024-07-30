<?php

use Illuminate\Support\Facades\Route;
use MyCrud\Http\Controllers\CategoryController;
use MyCrud\Http\Controllers\ProductController;

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

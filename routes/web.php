<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/admin')->group(function(){
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('book', BookController::class);
});




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BorrowController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/admin')->group(function(){
    Route::apiResource('borrow', BorrowController::class);
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('book', BookController::class);
});




<?php

use App\Http\Controllers\BatchSixController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getProductByQuery', [ProductController::class, 'getProductByQuery']);

Route::get('/getProductByModel', [ProductController::class,'getProductByModel']);

Route::get('/getFromNahidTest', [ProductController::class,'getFromNahidTest']);

Route::get('/getStudent',[BatchSixController::class,'getStudent']);

// Route::get('/dataInsert',[ProductController::class,'dataInsert']);

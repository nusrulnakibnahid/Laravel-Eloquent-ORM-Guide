<?php

use App\Http\Controllers\BatchSixController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/dataInsert', [ProductController::class, 'dataInsert']);

Route::post('/dataInsertByCreate', [ProductController::class, 'dataInsertByCreate']);

Route::post('/dataInsertByCreateReqAll', [ProductController::class, 'dataInsertByCreateReqAll']);

Route::get('/dataInsertByInsert', [BatchSixController::class, 'dataInsertByInsert']);

Route::post('/dataUpdate/{id}', [ProductController::class, 'dataUpdate']);

Route::post('/updatedUsingSave/{id}', [ProductController::class, 'updatedUsingSave']);


Route::delete('/deleteUsingFind/{id}', [ProductController::class, 'deleteUsingFind']);


Route::delete('/deleteUsingDestroyById/{id}', [ProductController::class, 'deleteUsingDestroyById']);


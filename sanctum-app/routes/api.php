<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/products', [ProductController::class, 'index']);
Route::middleware('auth:sanctum')->post('/products', [ProductController::class, 'store']);
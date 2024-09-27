<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('users', [UserController::class, 'index']);

Route::get('/planets', 'PlanetController@index');
Route::get('/planets/{planet}', 'PlanetController@show');

Route::get('/', function () {
    return view('welcome');
});

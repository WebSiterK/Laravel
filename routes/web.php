<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/planets', function () {
    return ["Uranus", "Jupiter", "Mars", "Earth", "Saturn", "Pluto", "Neptune", "Venus"];
});

<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



/*
Route::get('libros/crear', function () {
    return view("nuevoLibro");
});
*/


Route::get('libros/crear',[LibroController::class,"index"]);
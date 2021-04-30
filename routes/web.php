<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
  //  return view('welcome');
//});



Route::get('/', function () {
    return view("login");
});

Route::get('libros/crear',[LibroController::class,"index"]);
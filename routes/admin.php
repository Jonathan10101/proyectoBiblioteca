<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




//Route::get('admin', [HomeController::class,'index']);

//Route::get('libros/crear',[LibroController::class,"index"])->name("libros.crear");


//Route::get('admin', function () {
  //  return "hola admin";
//});



//Route::get('admin', [LibroController::class,'index']);


//Route::get('admin/create', [LibroController::class,'create']);



//Route::get('admin', [LibroController::class,'index']);
//Route::get('admin/create', [LibroController::class,'create']);


Route::resource('books', LibroController::class);
Route::resource('admin', AdminController::class);

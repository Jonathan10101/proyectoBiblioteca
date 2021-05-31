<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
  //  return view('welcome');
//});



Route::get('/', function () {
    return view("welcome");
});

Route::get('libros/crear',[LibroController::class,"index"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

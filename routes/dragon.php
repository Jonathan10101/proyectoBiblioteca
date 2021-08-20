<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\ColeccionController;
use App\Http\Controllers\CoordinadorController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\EstanteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LibroController2;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\SearchController;
use App\Models\Autor;
use App\Models\Coordinador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::resource('books', LibroController::class);
Route::resource('autores', AutorController::class);
Route::resource('admin', AdminController::class);
Route::resource('books2', LibroController2::class);
Route::resource('coordinadores', CoordinadorController::class);
Route::resource('editoriales', EditorialController::class);
Route::resource('colecciones', ColeccionController::class);
Route::resource('lugares', LugarController::class);
Route::resource('estantes', EstanteController::class);

<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\Lugar;
use App\Models\Editorial;
use App\Models\Coordinador;
use App\Models\Ubicacion;
use App\Models\Coleccion;

class LibroController2 extends Controller
{
  
    public function index()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $book = Libro::find($id);
        $autores = Autor::all();
        $lugares = Lugar::all();
        $editoriales = Editorial::all();
        $coordinadores = Coordinador::all();
        $ubicaciones = Ubicacion::all();
        $colecciones = Coleccion::all();    
        
        
        
        return view("books/show2",compact("autores","lugares","editoriales","coordinadores","ubicaciones","colecciones","book"));
        //return view("books/show2",compact("book"));
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}

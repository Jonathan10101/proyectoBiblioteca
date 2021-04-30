<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Coleccion;
use App\Models\Coordinador;
use App\Models\Editorial;
use App\Models\Lugares;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class LibroController extends Controller
{

    public function index()
    {
        $autores = Autor::all();
        $lugares = Lugares::all();
        $editoriales = Editorial::all();
        $coordinadores = Coordinador::all();
        $ubicaciones = Ubicacion::all();
        $colecciones = Coleccion::all();
        
        
        return view("nuevoLibro",compact("autores","lugares","editoriales","coordinadores","ubicaciones","colecciones"));
    }

    public function store(Request $request)
    {
        require 'nuevoLibro';
    }

    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}

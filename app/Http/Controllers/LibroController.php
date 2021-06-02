<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Coleccion;
use App\Models\Coordinador;
use App\Models\Editorial;
use App\Models\Libro;
use App\Models\Lugares;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class LibroController extends Controller
{

    public function index()
    {
        return view("books/index");
    }

    public function store(Request $request)
    {
        $modelo = $request->tipoBusqueda;
        
        switch($modelo){
            case 'titulo':
                $tituloLibro = $request->libro;
                $books = Libro::where("titulo","like","%$tituloLibro%")->get();
            break;
            case 'autor':
                
            break;
            case 'coordinador':
                
            break;
            case 'editorial':
                
            break;
            case 'coleccion':
                
            break;
        }

        



/*        
        $tituloLibro = $request->libro;
        $books = Libro::where("titulo","like","%$tituloLibro%")->get();
        
        return view("books/books",compact("books"));
*/        
        return view("books/books",compact("books"));
    }

    public function show($id)
    {
        $book = Libro::find($id);
        return view("books/show",compact("book"));
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }


    public function create(){
        $autores = Autor::all();
        $lugares = Lugares::all();
        $editoriales = Editorial::all();
        $coordinadores = Coordinador::all();
        $ubicaciones = Ubicacion::all();
        $colecciones = Coleccion::all();
        
        
        return view("nuevoLibro",compact("autores","lugares","editoriales","coordinadores","ubicaciones","colecciones"));
    }


  
}

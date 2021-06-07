<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Coleccion;
use App\Models\Coordinador;
use App\Models\Editorial;
use App\Models\Libro;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(Request $request)
    {        
        $tipoBusqueda = $request->tipoBusqueda;                
        
     
        $books = Libro::where("titulo","LIKE","%$request->libro%")->paginate(1);                
        return view("admin/index",compact("books"));
                

        
    }

    public function store(Request $request)
    {   
        /*
        $tipoBusqueda = $request->tipoBusqueda;
        
        switch($tipoBusqueda){
            case "titulo":
                $books = Libro::where("titulo","LIKE","%$request->libro%")->paginate(1);                
                return view("books/books",compact("books"));
            break;
            case "autor":
                $autores = Autor::where("nombre1","LIKE","%$request->libro%")->get();                
                return view("author/autoresSearch",compact("autores"));
            break;
            case "coordinador":
                $coordinadores = Coordinador::where("nombre1","LIKE","%$request->libro%")->get();                
                return view("coordinador/coordinadorSearch",compact("coordinadores"));
            break;    
            case "editorial":
                $editoriales = Editorial::where("nombre","LIKE","%$request->libro%")->get();                
                return view("editorial/editorialSearch",compact("editoriales"));
            break;  
            case "coleccion":
                $colecciones = Coleccion::where("nombre","LIKE","%$request->libro%")->get();                
                return view("coleccion/coleccionSearch",compact("colecciones"));
            break;
        }


        return view("admin/index");
        */
        
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

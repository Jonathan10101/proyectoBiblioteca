<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Coordinador;
use App\Models\Libro;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin/index');
    }

    public function store(Request $request)
    {   
        $tipoBusqueda = $request->tipoBusqueda;
        
        switch($tipoBusqueda){
            case "titulo":
                $books = Libro::where("titulo","LIKE","%$request->libro%")->get();
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
        }
        
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

<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;

class AutorController extends Controller
{

    public function index()
    {
        $autores = Autor::paginate(8);        
        
        return view("author/index",compact("autores"));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            "nombre1"=>"required|min:4|max:20"
        ]);

        

        $registrado = Autor::create($request->all());

        //return $registrado;
        if($registrado){
            //echo '<script type="text/javascript">alert("'."Autor registrado".'");</script>';            
            $mensajeR = "Autor(es) Registrados";
            return view("author/create",compact("mensajeR"));
        }

        //return redirect()->route("autores.create");
        
    }

   
    public function show($id)
    {
        $autor = Autor::find($id);
        return view("author/show",compact("autor"));
    }
    
   
    public function update(Request $request, $id)
    {
        $autor = Autor::find($id);
        $request->validate([
            "nombre1"=>"required|min:4|max:20"
        ]);
        $autor->update($request->all());
        
        return redirect()->route("autores.index");
        
    }

    public function destroy($id)
    {
        $autor = Autor::find($id);        
        $autor->delete();
        return redirect()->route("autores.index");
    }


    public function create(){
        return view("author/create");
    }

    public function edit($id){
        $autor = Autor::find($id);
        return view("author/edit",compact("autor"));
    }

    public function search(){
        return "search";
    }

}

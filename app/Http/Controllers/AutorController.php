<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            "nombre1"=>"required|min:1|max:20"
        ]);

        $nombre1 = $request->nombre1;
        $nombre2 = $request->nombre2;
        $apellido1 = $request->apellido1;
        $apellido2 = $request->apellido2;

        $duplicado = DB::table('autores')
                                ->where([
                                    ['nombre1' ,'=', $nombre1],
                                    ['nombre2', '=' , $nombre2],
                                    ['apellido1', '=' , $apellido1],
                                    ['apellido2', '=' , $apellido2],
                                ])->first();

        
        if($duplicado == null){            
            Autor::create($request->all()); 
            return redirect()->route("autores.index")->with("statusr","Autor registrado con exito"); 
        }else{
            return redirect()->route("autores.create")->with("status1","El Autor que quieres registrar ya existe");
        }

      
        
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
            "nombre1"=>"required|min:1|max:20"
        ]);
       
        $nombre1 = $request->nombre1;
        $nombre2 = $request->nombre2;
        $apellido1 = $request->apellido1;
        $apellido2 = $request->apellido2;
        $nombre1 = strtoupper($nombre1);
        $nombre2 = strtoupper($nombre2);
        $apellido1 = strtoupper($apellido1);
        $apellido2 = strtoupper($apellido2);

        $duplicado = DB::table('autores')
                                ->where([
                                    ['nombre1' ,'=', $nombre1],
                                    ['nombre2', '=' , $nombre2],
                                    ['apellido1', '=' , $apellido1],
                                    ['apellido2', '=' , $apellido2],
                                ])->first();
        

        if($duplicado == null){            
            $autor->update($request->all());        
            return redirect()->route("autores.index")->with("status2","Autor actualizado");
        }else{
            return redirect()->route("autores.edit",$id)->with("status1","El Autor que quieres registrar ({$request->nombre1}) ya existe");
        }
                                                                    





    }

    public function destroy($id)
    {
        $autor = Autor::find($id);        
        $autor->delete();
        return redirect()->route("autores.index")->with("status","Autor eliminado");
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

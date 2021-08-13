<?php

namespace App\Http\Controllers;

use App\Models\Coleccion;
use Illuminate\Http\Request;

class ColeccionController extends Controller
{

    public function index()
    {
        $colecciones = Coleccion::paginate(9);        
        return view("coleccion/index",compact("colecciones"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nombre"=>"required|min:1|max:80"
        ]);


        $duplicado = Coleccion::where('nombre',$request->nombre)->first();
        if($duplicado){
            
            return redirect()->route("colecciones.create")->with("status1","La coleccion que quieres registrar ya existe");
        }else{
            Coleccion::create($request->all()); 
            return redirect()->route("colecciones.index")->with("statusr","Coleccion registrada con exito"); 
        }
        /*
        Coleccion::create($request->all());
        return redirect()->route("colecciones.create");
        */
    }
    
    public function show($id)
    {
        $coleccion = Coleccion::find($id);
        return view("coleccion/show",compact("coleccion"));
    }
    
    public function update(Request $request, $id)
    {
        $coleccion = Coleccion::find($id);
        $request->validate([
            "nombre"=>"required|min:1|max:80"
        ]);
        $coleccion->update($request->all());
        
        
        return redirect()->route("colecciones.index")->with("status2","Coleccion actualizada");
        //return redirect()->route("colecciones.index");
    }

    public function destroy($id)
    {
        $coleccion = Coleccion::find($id);        
        $coleccion->delete();
        
        return redirect()->route("colecciones.index")->with("status","Coleccion eliminada");;

        //return redirect()->route("colecciones.index");
    }

    public function create(){
        return view("coleccion/create");
    }

    public function edit($id){
        $coleccion = Coleccion::find($id);        
        return view("coleccion/edit",compact("coleccion"));
    }
}

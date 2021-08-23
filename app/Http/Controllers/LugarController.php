<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    
    public function index()
    {
        $lugares = Lugar::paginate(9);        
        return view("lugar/index",compact("lugares"));   
    }
    
    public function store(Request $request)
    {
        $request->validate([
            "ciudad"=>"required|min:2|max:80"
        ]);
       


        $duplicado = Lugar::where('ciudad',$request->ciudad)->first();
        if($duplicado){  
            return redirect()->route("lugares.create")->with("status1","El lugar que quieres registrar ya existe");
        }else{
            
            Lugar::create(($request->all())); 
            return redirect()->route("lugares.index")->with("statusr","Lugar registrado con exito"); 
        }
                                    
        //Lugar::create($request->all());
        //return redirect()->route("lugares.create");
        
    }

    public function show($id)
    {
        $lugar = Lugar::find($id);
        return view("lugar/show",compact("lugar"));
    }
    
    public function update(Request $request, $id)
    {
        $lugar = Lugar::find($id);
        $request->validate([
            "ciudad"=>"required|min:2|max:80"
        ]);

        $duplicado = Lugar::where('ciudad',$request->ciudad)->first();


        if($duplicado){            
            return redirect()->route("lugares.edit",$id)->with("status1","El lugar que quieres registrar ({$request->ciudad}) ya existe");
        }else{            
            $lugar->update($request->all());
            return redirect()->route("lugares.index")->with("status2","Lugar actualizado");            
        }




        
        
        //return redirect()->route("lugares.index");
        
    }
    
    public function destroy($id)
    {
        $lugar = Lugar::find($id);        
        $lugar->delete();
        //return redirect()->route("lugares.index");
        return redirect()->route("lugares.index")->with("status","Lugar eliminado");;
    }

    public function create(){
        return view("lugar/create");
    }

    public function edit($id){
        $lugar = Lugar::find($id);        
        return view("lugar/edit",compact("lugar"));
    }

}

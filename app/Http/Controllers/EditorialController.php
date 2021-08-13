<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    
    public function index()
    {
        $editoriales = Editorial::paginate(9);        
        return view("editorial/index",compact("editoriales"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nombre"=>"required|min:1|max:80"
        ]);

        $duplicado = Editorial::where('nombre',$request->nombre)->first();
        if($duplicado){
            
            return redirect()->route("editoriales.create")->with("status1","La editorial que quieres registrar ya existe");
        }else{
            Editorial::create($request->all()); 
            return redirect()->route("editoriales.index")->with("statusr","Editorial registrada con exito"); 
        }

    }
    
    public function show($id)
    {
        $editorial = Editorial::find($id);
        return view("editorial/show",compact("editorial"));
    }

    public function update(Request $request, $id)
    {
        $editorial = Editorial::find($id);
        $request->validate([
            "nombre"=>"required|min:1|max:80"
        ]);
        $editorial->update($request->all());
        
        return redirect()->route("editoriales.index")->with("status2","Lugar actualizado");;;        
    }
    
    public function destroy($id)
    {
        $editorial = Editorial::find($id);        
        $editorial->delete();        
        return redirect()->route("editoriales.index")->with("status","Lugar eliminado");;
    }

    public function create(){
        return view("editorial/create");
    }

    public function edit($id){
        $editorial = Editorial::find($id);        
        return view("editorial/edit",compact("editorial"));
    }
}

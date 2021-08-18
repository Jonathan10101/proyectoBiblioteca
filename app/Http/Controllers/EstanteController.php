<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstanteController extends Controller
{
    
    public function index()
    {
        //$estantes = Ubicacion::paginate(9);        
        $estantes =  DB::table('ubicaciones')->orderBy('id', 'asc')->paginate(9);
        return view("estante/index",compact("estantes"));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            "estante"=>"required|min:1|max:80"
        ]);
        
        $duplicado = Ubicacion::where('estante',$request->estante)->first();
        if($duplicado){
            
            return redirect()->route("estantes.create")->with("status1","El estante que quieres registrar ya existe");
        }else{
            Ubicacion::create($request->all()); 
            return redirect()->route("estantes.index")->with("statusr","Estante registrado con exito"); 
        }
                    
    }
    
    public function show($id)
    {
        $estante = Ubicacion::find($id);
        return view("estante/show",compact("estante"));
    }
     
    public function update(Request $request, $id)
    {
        $estante = Ubicacion::find($id);
        $request->validate([
            "estante"=>"required|min:1|max:80"
        ]);
        $estante->update($request->all());
        
        return redirect()->route("estantes.index")->with("status2","Estante actualizado");
    }

    public function destroy($id)
    {
        $estante = Ubicacion::find($id);        
        $estante->delete();
        return redirect()->route("estantes.index")->with("status","Estante eliminado");
    }

    public function create(){
        return view("estante/create");
    }

    public function edit($id){
        $estante = Ubicacion::find($id);        
        return view("estante/edit",compact("estante"));
    }
}

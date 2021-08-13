<?php

namespace App\Http\Controllers;

use App\Models\Coordinador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoordinadorController extends Controller
{

    public function index()
    {
        $coordinadores = Coordinador::paginate(8);
        return view("coordinador/index",compact("coordinadores"));
        
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

        $duplicado = DB::table('coordinadores')
                                ->where([
                                    ['nombre1' ,'=', $nombre1],
                                    ['nombre2', '=' , $nombre2],
                                    ['apellido1', '=' , $apellido1],
                                    ['apellido2', '=' , $apellido2],
                                ])->first();

        
        if($duplicado == null){            
            Coordinador::create($request->all()); 
            return redirect()->route("coordinadores.index")->with("statusr","Coordinador registrado con exito"); 
        }else{
            return redirect()->route("coordinadores.create")->with("status1","El Coordinador que quieres registrar ya existe");
        }
        

    }
    
    public function show($id)
    {
        $coordinador = Coordinador::find($id);
        return view("coordinador/show",compact("coordinador"));
    }
    
    public function update(Request $request, $id)
    {
        $coordinador = Coordinador::find($id);
        $request->validate([
            "nombre1"=>"required|min:1|max:20"
        ]);
        $coordinador->update($request->all());
        
        return redirect()->route("coordinadores.index")->with("status2","Coordinador actualizado");
        //return redirect()->route("coordinadores.index");
    }
    
    public function destroy($id)
    {
        $coordinador = Coordinador::find($id);        
        $coordinador->delete();
        return redirect()->route("coordinadores.index")->with("status","Coordinador eliminado");
        //return redirect()->route("coordinadores.index");
    }

    public function create(){
        return view("coordinador/create");
    }

    public function edit($id){
        $coordinador = Coordinador::find($id);
        return view("coordinador/edit",compact("coordinador"));
    }
}


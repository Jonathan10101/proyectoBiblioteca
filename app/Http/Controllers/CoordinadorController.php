<?php

namespace App\Http\Controllers;

use App\Models\Coordinador;
use Illuminate\Http\Request;

class CoordinadorController extends Controller
{

    public function index()
    {
        $coordinadores = Coordinador::paginate(1);
        return view("coordinador/index",compact("coordinadores"));
        
    }

    public function store(Request $request)
    {
        $request->validate([
            "nombre1"=>"required|min:4|max:20"
        ]);
        Coordinador::create($request->all());
        return redirect()->route("coordinadores.create");
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
            "nombre1"=>"required|min:4|max:20"
        ]);
        $coordinador->update($request->all());
        
        return redirect()->route("coordinadores.index");
    }
    
    public function destroy($id)
    {
        $coordinador = Coordinador::find($id);        
        $coordinador->delete();
        return redirect()->route("coordinadores.index");
    }

    public function create(){
        return view("coordinador/create");
    }

    public function edit($id){
        $coordinador = Coordinador::find($id);
        return view("coordinador/edit",compact("coordinador"));
    }
}


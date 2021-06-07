<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;

class EstanteController extends Controller
{
    
    public function index()
    {
        $estantes = Ubicacion::paginate(9);        
        return view("estante/index",compact("estantes"));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            "estante"=>"required|min:2|max:80"
        ]);
        Ubicacion::create($request->all());
        return redirect()->route("estantes.create");
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
            "estante"=>"required|min:2|max:80"
        ]);
        $estante->update($request->all());
        
        return redirect()->route("estantes.index");
    }

    public function destroy($id)
    {
        $estante = Ubicacion::find($id);        
        $estante->delete();
        return redirect()->route("estantes.index");
    }

    public function create(){
        return view("estante/create");
    }

    public function edit($id){
        $estante = Ubicacion::find($id);        
        return view("estante/edit",compact("estante"));
    }
}

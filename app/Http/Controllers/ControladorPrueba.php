<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class ControladorPrueba extends Controller
{

    public function index()
    {
        echo "jalando";
    }


    public function store(Request $request)
    {
        echo $request;
    }


    public function show($id)
    {
        $lugar = Lugar::find($id);
       echo $lugar;
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        $lugar = Lugar::find($id);
        $lugar->delete();   

        echo response([
            "respuesta" => "Lugar eliminado"
        ],200);

    }
    
}

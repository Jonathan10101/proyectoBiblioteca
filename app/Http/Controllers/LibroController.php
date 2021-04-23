<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class LibroController extends Controller
{

    public function index()
    {
        $autores = Autor::all();
        
        
        return view("nuevoLibro",compact("autores"));
    }

    public function store(Request $request)
    {
        require 'nuevoLibro';
    }

    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}

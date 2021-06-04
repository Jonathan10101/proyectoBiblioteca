<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin/index');
    }

    public function store(Request $request)
    {   
        $books = Libro::where("titulo","LIKE","%$request->libro%")->get();
        return view("books/books",compact("books"));
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

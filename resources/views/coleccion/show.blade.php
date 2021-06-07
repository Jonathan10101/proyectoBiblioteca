@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1 class="bg-dark">Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Bienvenido al Sistema del Instituto de Investigaciones Historicas</p>--> 
    
<div class="">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Detalles de la Coleccion</h1>
        </div>
        

        <div class="col-12 mt-4">
            <table class="table inline-flex">       
              <thead class="thead-light">
                <tr class="">
                    <th class="text-center">Nombre</th>              
                </tr>
              </thead>     
                
              <tbody>
                <tr>
                    <td class="text-center">{{$coleccion->nombre}}</td>                    
                </tr>
              <tbody>
            </table>
        </div>
        
        <div class="col-12 mt-2 d-flex justify-content-end">
      
            <form action="" method="POST">
                @csrf
                @method("delete")

                <button type="submit" class="btn btn-outline-dark fas fa-trash-alt"> Borrar</button>
            </form>        

            <a href="{{route('colecciones.edit',$coleccion->id)}}" class="btn btn-outline-dark fas fa-edit ml-2"> Editar</a>
        </div>


        


        @php
            $nLibrosEscritos = sizeof($coleccion->libro);            
        @endphp
            
        <div class="col-12 mt-5">
            <h1 class="text-center">Libros escritos</h1>
        </div>
        
        <div class="col-12 mt-4">
            <table class="table inline-flex">       
              <thead class="thead-light">
                <tr class="">
                    <th class="text-center">#</th>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Año de publicacion</th>
                    <th class="text-center">Observacion</th>
                    <th class="text-center">Detalles</th>                    
                </tr>
              </thead>     
              
              <tbody>
                @for($i=0;$i<$nLibrosEscritos;$i++)
                <tr>
                    <td class="text-center">{{$i+1}}</td>
                    <td class="text-center">{{$coleccion->libro[$i]['titulo']}}</td>
                    <td class="text-center">{{$coleccion->libro[$i]['year']}}</td>
                    <td class="text-center">{{$coleccion->libro[$i]['observacion']}}</td>
                    <td class="text-center"><a href="{{route('books.show',$coleccion->libro[$i]['id'])}}">Ver</a></td>
                </tr>
                @endfor
              <tbody>
            </table>
        </div>



    </div> 
</div>


@stop

@section('css')
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">    
    <link rel="stylesheet" href="{{ asset('estilos1.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
@stop
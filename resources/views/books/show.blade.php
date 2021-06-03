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
            <h1 class="text-center">Detalles de Libro</h1>
        </div>

        <div class="col-12 mt-4">
            <table class="table inline-flex">       
              <thead>
                <tr class="thead-dark">
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Año</th>
                    <th class="text-center">Costo</th>
                    <th class="text-center">Stock</th>
                    <th class="text-center">Observaciones</th>
                    <th class="text-center">Editorial</th>
                    <th class="text-center">Lugar</th>                    
                    <th class="text-center">Colección</th>                    
                    <th class="text-center">Autor(es)</th>                
                    <th class="text-center">Coordinador(es)</th>
                    <th class="text-center">Ubicacion(es) estante</th>
                    
                </tr>
              </thead>     
                @php
                    $sizeUbi = sizeof($book->ubicacion);
                    $sizeAutores = sizeof($book->autor);
                    $sizeCoordinadores = sizeof($book->coordinador);
                @endphp
              <tbody>
                <tr>
                    <td>{{$book->titulo}}</td>                
                    <td>{{$book->year}}</td>                
                    <td>{{$book->costo}}</td>
                    <td>{{$book->stock}}</td>
                    <td>{{$book->observacion}}</td>
                    <td>{{$book->editorial["nombre"]}}</td>
                    <td>{{$book->lugar["ciudad"]}}</td>                    
                    <td>{{$book->coleccion["nombre"]}}</td>                    
                    <td>                    
                        @for ($i = 0; $i < $sizeAutores; $i++)                        
                            -{{$book->autor[$i]["nombre1"]}}                            
                            {{$book->autor[$i]["nombre2"]}}                            
                            {{$book->autor[$i]["apellido1"]}}
                            {{$book->autor[$i]["apellido2"]}}                               
                        @endfor                    
                    </td>
                    
                    <td>                    
                        @for ($i = 0; $i < $sizeCoordinadores; $i++)                        
                            -{{$book->coordinador[$i]["nombre1"]}}                            
                            {{$book->coordinador[$i]["nombre2"]}}                            
                            {{$book->coordinador[$i]["apellido1"]}}
                            {{$book->coordinador[$i]["apellido2"]}} 
                        @endfor                    
                    <td>                    
                    <td>
                       @for ($i = 0; $i < $sizeUbi; $i++)                        
                            {{$book->ubicacion[$i]["estante"]}}                        
                        @endfor
                    <td>                                     
                </tr>
              <tbody>
            </table>
        </div>

        <div class="col-12 mt-2 d-flex justify-content-end">
            <form action="{{route('books.destroy',$book->id)}}" method="POST">
                @csrf
                @method("delete")

                <button type="submit" class="btn btn-outline-danger fas fa-trash-alt">Borrar</button>
            </form>        

            <a href="{{route('books2.show',$book->id)}}" class="btn btn-outline-info fas fa-edit ml-2">Editar</a>
        </div>


    </div> 
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('estilos1.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
@stop
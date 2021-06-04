@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1 class="bg-dark">Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Bienvenido al Sistema del Instituto de Investigaciones Historicas</p>-->  
    <!--
        <div class="col-12 mt-4">
            <table class="table inline-flex">       
              <thead class="thead-light">
                <tr>
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
                    <th scope="row">{{$book->titulo}}</th>                
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
                    </td>                    
                    <td>
                       @for ($i = 0; $i < $sizeUbi; $i++)                        
                            {{$book->ubicacion[$i]["estante"]}}                        
                        @endfor
                    </td>                                     
                </tr>
              <tbody>
            </table>
        </div>
-->   
@php    
    $sizeAutores = sizeof($book->autor);    
@endphp

<div class="container-fluid">
  <div class="row">
    
    <div class="col-12 d-flex justify-content-center">
      <div class="col-5">

        <div class="col-12">
            <h1 class="text-center mt-5 mb-5">Editar Libro</h1>
        </div>
  
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputTitulo"  name="titulo" placeholder="" value="{{$book->titulo}}">
            <label for="floatingInputTitulo">Titulo</label>
        </div>

                                                                                 <!--AUTORES-->
        <div class="col-12  d-flex mt-5">
            <div class="col-6">
              <label for="autores" class="mb-3">Autor(es)</label>
            </div>  
          
            <div class="col-6">
              <div class="col-12 d-flex justify-content-end">    
                <label class="switch">
                  <input type="checkbox" id="switch7" onclick="displayForm7(this)" value="1">
                  <span class="slider round"></span>
                </label> 
              </div>
            </div>
        </div> 
        
        <div style="display:block" id="requestForm7">            
            <div id="padreShow2" >
                @for ($i = 0; $i < $sizeAutores; $i++)
                    <select name="" id="selectAutor{{$i+1}}" class="form-select mt-4 clasePadreShow2">
                        <option value="">{{$book->autor[$i]["nombre1"]}} {{$book->autor[$i]["nombre2"]}} {{$book->autor[$i]["apellido1"]}} {{$book->autor[$i]["apellido2"]}}</option>
                    </select>                    
                @endfor                    
                
                     
                

            </div>

            <div class="col-12 d-flex justify-content-end mt-3">  
              <button type="button" class="btn btn-danger btn-circle btn-xl" id="btnEliminarAutores2">-<i class="fa fa-times"></i></button>
              <button type="button" class="btn btn-primary btn-circle btn-xl" id="btnAgregarAutores2">+<i class="fa fa-times"></i></button>
            </div>                                    
        </div>     


        <div style="display:none" id="memberForm7" class="mt-4">
                    
                    <input type="text" placeholder="Nombre (OBLIGATORIO)" class="form-control mt-3" id="nombre1">
                    <input type="text" placeholder="Segundo nombre" class="form-control mt-3" id="nombre2">
                    <input type="text" placeholder="Primer apellido" class="form-control mt-3" id="apellido1">
                    <input type="text" placeholder="Segundo apellido" class="form-control mt-3" id="apellido2">
                    <div class="col-12 d-flex justify-content-center">
                        <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-4" id="btnRegistrarAutor">Registrar Autor</button>
                    </div>
    
        </div>


        <div class="col-12 mt-2 d-flex justify-content-end">
            <form action="{{route('books.update',$book->id)}}" method="POST" class="col-12">
                @csrf
                @method("put")

                <button type="submit" class="btn btn-outline-primary far fa-edit col-12 mt-3">Actualizar</button>
            </form>        
        </div>

      </div>
    </div>
  </div> 
</div>

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('estilos1.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    
@stop

@section('js')    
    <script type='text/javascript' src="{{asset('script1.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>    
@stop
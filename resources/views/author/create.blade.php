@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1 class="bg-dark">Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Bienvenido al Sistema del Instituto de Investigaciones Historicas</p>-->  



<div class="container-fluid mt-2">    

    <div class="row mt-2">
        <div class="col">
            <h1 class="text-center">REGISTRAR AUTOR</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <form action="{{route('autores.store')}}" method="post">
                @csrf
                
                <div class="col d-flex justify-content-center">
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Primer Nombre (Obligatorio)" name="nombre1" required>                                    
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="col-5 mt-1 text-center  bg-danger">
                        @error("nombre1")
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Segundo Nombre" name="nombre2">
                </div>
                <div class="col d-flex justify-content-center">
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Primer Apellido" name="apellido1">
                </div>
                <div class="col d-flex justify-content-center">    
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Primer Apellido" name="apellido2">
                </div>
                <div class="col d-flex justify-content-center">
                    <input type="submit" value="REGISTRAR" class="col-2 mt-3 btn btn-warning">
                </div>
                
            </form>     
        </div>    
    </div>     
       
   
    
    
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('estilos1.css') }}">
    <style>
        a{
            text-decoration: none;
        }
    </style>
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
@stop
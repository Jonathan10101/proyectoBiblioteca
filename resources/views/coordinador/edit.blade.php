@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1 class="bg-dark">Dashboard</h1>-->
@stop

@section('content')
@if(session("status1")) 
    <div class="row">
        <div class="col">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p class="text-left mb-0">{{session("status1")}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>       
        </div>           
    </div>                                                                                 
@endif    
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Editar Coordinador</h1>
        </div>

    <div class="row">
        <div class="col">
            <form action="{{route('coordinadores.update',$coordinador->id)}}" method="post">                
                @csrf
                @method("PUT")
                
                <div class="col d-flex justify-content-center">
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Primer Nombre (Obligatorio)" name="nombre1" required value="{{$coordinador->nombre1}}">                                    
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="col-5 mt-1 text-center  bg-danger">
                        @error("nombre1")
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Segundo Nombre" value="{{$coordinador->nombre2}}" name="nombre2">
                </div>
                <div class="col d-flex justify-content-center">
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Primer Apellido" value="{{$coordinador->apellido1}}" name="apellido1">
                </div>
                <div class="col d-flex justify-content-center">    
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Primer Apellido" value="{{$coordinador->apellido2}}" name="apellido2">
                </div>
                <div class="col d-flex justify-content-center">
                    <input type="submit" value="ACEPTAR" class="col-2 mt-3 btn btn-warning">
                </div>
                
            </form>     
        </div>    
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
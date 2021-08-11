@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1 class="bg-dark">Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Bienvenido al Sistema del Instituto de Investigaciones Historicas</p>-->  
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Editar Lugar</h1>
        </div>

    <div class="row">
        <div class="col">
            <form action="{{route('lugares.update',$lugar->id)}}" method="post">                
                @csrf
                @method("PUT")
                
                <div class="col d-flex justify-content-center">
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Ciudad (Obligatorio)" name="ciudad" required value="{{$lugar->ciudad}}">                                    
                </div>
                <div class="col d-flex justify-content-center">
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Estado" name="estado" value="{{$lugar->estado}}">                                    
                </div>
                <div class="col d-flex justify-content-center">
                    <input type="text" class="col-5 mt-3 form-control" placeholder="Pais" name="pais" value="{{$lugar->pais}}">                                    
                </div>

                <div class="col d-flex justify-content-center">
                    <div class="col-5 mt-1 text-center  bg-danger">
                        @error("nombre")
                            {{$message}}
                        @enderror
                    </div>
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
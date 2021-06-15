@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1 class="bg-dark">Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Bienvenido al Sistema del Instituto de Investigaciones Historicas</p>-->  
<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <h3 class="col">Resultados de la busqueda (Autores)</h3>
        
        <a href="{{route('admin.index')}}" class="btn btn-primary"><i class="fas fa-arrow-left" class="mt-2"></i> Volver a Buscar</a>
        
    </div>
    
    <div class="row mt-4">        
        <div class="col-1"></div>
        <div class="col">                    
            @if(empty($autores[0]))
                <p class="text-secondary">No se encontraron resultados</p>
            @endif
            @foreach ($autores as $autor)
                <a href="{{route('autores.show',$autor->id)}}" class="text-capitalize">{{$autor->nombre1}} {{$autor->nombre2}} {{$autor->apellido1}} {{$autor->apellido2}}</a><br>
            @endforeach
        </div>        
    </div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
    
@stop
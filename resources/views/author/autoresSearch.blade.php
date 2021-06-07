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
        <h1 class="col">Resultados de la busqueda (autores)</h1>
        <a href="{{route('admin.index')}}" class="btn-btn danger">Volver a Buscar</a>
    </div>
    
    <div class="row mt-4">        
        <div class="col-1"></div>
        <div class="col">
            @foreach ($autores as $autor)
                <a href="{{route('autores.show',$autor->id)}}">{{$autor->nombre1}} {{$autor->nombre2}} {{$autor->apellido1}} {{$autor->apellido2}}</a><br>
            @endforeach
        </div>        
    </div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
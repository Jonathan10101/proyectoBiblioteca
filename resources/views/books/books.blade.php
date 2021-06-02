@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1 class="bg-dark">Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Bienvenido al Sistema del Instituto de Investigaciones Historicas</p>-->  
<div class="container-fluid">
    <div class="row">
        <h1 class="col">Resultados de la busqueda</h1>
        <a href="{{route('books.index')}}" class="btn-btn danger">Volver a Buscar</a>
    </div>
    
    <div class="row mt-4">        
        <div class="col">
            @foreach ($books as $book)
                <a href="{{route('books.show',$book->id)}}">{{$book->titulo}}</a><br>
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
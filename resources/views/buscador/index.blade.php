@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1 class="bg-dark">Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Bienvenido al Sistema del Instituto de Investigaciones Historicas</p>-->  
<div class="container-fluid mt-5">
    
    <div class="row">
        <h1 class="col text-center display-4">IIE SOFT</h1>
    </div>
    
    <div class="row mt-4">        
        
            <form action="{{route('books.store')}}" class="col-12" method="POST">
                @csrf
                <div class="row">
                    <div class="col d-flex justify-content-center">                        
                            <input type="text" name="libro" class="form-control col-6" placeholder="Buscar Libro" required>                                            
                            <input type="submit" value="Buscar" class="btn btn-primary">                        
                    </div>
                </div>

                <div class="row">
                    <div class="col d-flex justify-content-around">
                        <fieldset>
                            <legend class="text-center mt-2">Elige una forma de busqueda</legend>
                                <label class="mr-3">
                                    <input type="radio" name="tipoBusqueda" value="titulo" class="mr-2" checked>Titulo
                                </label>
                                <label class="mr-3">
                                    <input type="radio" name="tipoBusqueda" value="autor" class="mr-2">Autor
                                </label>
                                <label class="mr-3">
                                    <input type="radio" name="tipoBusqueda" value="coordinador" class="mr-2">Coordinador
                                </label>
                                <label class="mr-3">
                                    <input type="radio" name="tipoBusqueda" value="editorial" class="mr-2">Editorial
                                </label>
                                <label class="mr-3">
                                    <input type="radio" name="tipoBusqueda" value="coleccion" class="mr-2">Colección
                                </label>
                        </fieldset>
                    </div>
                </div>
                
            </form>
        </div>        
    

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1 class="bg-dark">Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Bienvenido al Sistema del Instituto de Investigaciones Historicas</p>-->  
    <!--<h1 class="display-2 text-center font-weight-bold">IIE Soft</h1>-->
    <div class="container-fluid mt-5">
    
    <div class="row">
        <h1 class="col text-center display-4">IIE SOFT</h1>
    </div>
    
    <div class="row mt-4">        
        
            <form action="{{route('admin.index')}}" class="col-12" method="GET">
                
                <div class="row">
                    <div class="col d-flex justify-content-center">                        
                        <input type="text" name="libro" class="form-control col-6" placeholder="Buscar" required>                                            
                        <!--<input type="submit" value="" class="btn btn-primary fas fa-search">-->
                        <button type="input" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                             
                    </div>
                </div>


                <div class="row">
                    <div class="col d-flex justify-content-around mt-2">
                        <fieldset>
                            <legend class="text-center mt-2">Elige lo que estas buscando</legend>
                                <label class="mr-3">
                                    <input type="radio" name="tipoBusqueda" value="titulo" class="mr-2" checked>Libro
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

    <div class="row mt-4">    
        @if(isset($books) && count($books)>0)
            @forEach($books as $book)
                <a href="">{{$book->titulo}}</a>
            @endforeach

            {{$books->links()}}
        @endif

    </div>
    

    </div>
</div>
    
@stop

@section('css')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
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


<!--
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

                                                                                 
        <div class="col-12  d-flex mt-5">
            <div class="col-6">
              <label for="autores" class="mb-3">Autor(es)</label>
            </div>  
          
            <div class="col-6">
              <div class="col-12 d-flex justify-content-end">    
                <label class="switch">
                  <input type="checkbox" id="switch1" onclick="displayForm(this)" value="1">
                  <span class="slider round"></span>
                </label> 
              </div>
            </div>
        </div> 
        
        <div style="display:block" id="requestForm">            
            <div id="padre" >
                @for ($i = 0; $i < $sizeAutores; $i++)
                    <select name="" id="selectAutor{{$i+1}}" class="form-select mt-4 clasePadre">
                        <option value="{{$book->autor[$i]['pivot']['autor_id']}}">{{$book->autor[$i]["nombre1"]}} {{$book->autor[$i]["nombre2"]}} {{$book->autor[$i]["apellido1"]}} {{$book->autor[$i]["apellido2"]}}</option>
                    </select>                    
                    
                @endfor                    
                
            </div>

            <div class="col-12 d-flex justify-content-end mt-3">  
              <button type="button" class="btn btn-danger btn-circle btn-xl" id="btnEliminarAutores2">-<i class="fa fa-times"></i></button>
              <button type="button" class="btn btn-primary btn-circle btn-xl" id="btnAgregarAutores2">+<i class="fa fa-times"></i></button>
            </div>                                    
        </div>     


        <div style="display:none" id="memberForm" class="mt-4">
                    
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
-->

@php    
    $sizeAutores = sizeof($book->autor);  
    $sizeCoordinadores = sizeof($book->coordinador);
    $sizeUbicaciones = sizeof($book->ubicacion);
@endphp

<div class="container-fluid">

<div class="row">
  <div class="col-12 d-flex justify-content-center">
    <lottie-player id="update" src="https://assets6.lottiefiles.com/packages/lf20_r96HD4.json"  background="transparent"  speed="1"  style="width: 900px; height: 900px;"  loop autoplay></lottie-player>
  </div>
</div>
    
      <div class="col-12 mt-5">
        <h1 class="text-center">ACTUALIZAR LIBRO</h1>
      </div>

      <div class="col-12 d-flex justify-content-center">
    
        <form action="" class="col-5 mt-5">
                      
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputTitulo"  name="titulo" placeholder="" value="{{$book->titulo}}">
            <label for="floatingInputTitulo">Titulo</label>
          </div>

          <input type="hidden" value="{{$book['id']}}" id="id_libro">
        
                                                                        <!--AUTORES-->
          <div class="col-12  d-flex mt-5">
            <div class="col-6">
              <label for="autores" class="mb-3">Autor(es)</label>
            </div>  
          
            <div class="col-6">
              <div class="col-12 d-flex justify-content-end">    
                <label class="switch">
                  <input type="checkbox" id="switch1" onclick="displayForm(this)" value="1">
                  <span class="slider round"></span>
                </label> 
              </div>
            </div>
          </div>                                                                        


        
          <div style="display:block" id="requestForm">
            
            
            <div id="padre">
            
            
              @for ($i = 0; $i < $sizeAutores; $i++)         
                <select name="" id="selectAutor{{$i+1}}" class="form-select mt-4 clasePadre">                                                              
                    <option value="{{$book->autor[$i]['pivot']['autor_id']}}" select="select">{{$book->autor[$i]["nombre1"]}} {{$book->autor[$i]["nombre2"]}} {{$book->autor[$i]["apellido1"]}} {{$book->autor[$i]["apellido2"]}}</option>                        
                    @foreach ($autores as $autor)                                                                      
                      <option value="{{$autor->id}}">{{$autor->nombre1}} {{$autor->nombre2}} {{$autor->apellido1}} {{$autor->apellido2}}</option>                                                                                                  
                    @endforeach                                        
                </select>                                        
              @endfor    

            </div>

            <div class="col-12 d-flex justify-content-end mt-3">  
              <button type="button" class="btn btn-danger btn-circle btn-xl" id="btnEliminarAutores">-<i class="fa fa-times"></i></button>
              <button type="button" class="btn btn-primary btn-circle btn-xl" id="btnAgregarAutores">+<i class="fa fa-times"></i></button>
            </div>                        
            
          </div>

          <div style="display:none" id="memberForm" class="mt-4">
                    
                <input type="text" placeholder="Nombre (OBLIGATORIO)" class="form-control mt-3" id="nombre1">
                <input type="text" placeholder="Segundo nombre" class="form-control mt-3" id="nombre2">
                <input type="text" placeholder="Primer apellido" class="form-control mt-3" id="apellido1">
                <input type="text" placeholder="Segundo apellido" class="form-control mt-3" id="apellido2">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-4" id="btnRegistrarAutor">Registrar Autor</button>
                </div>

          </div>

          

                                                                          <!--LUGAR-->
          <!--                                                                          
          <label for="lugar" class="mt-5 mb-3">Lugar</label>
          <div class="col-12 d-flex justify-content-between">
            <button  type="button" value="1" name="formselector" onClick="displayForm2(this)" class="btn btn-primary col-2">BUSCAR</button>
            <button value="2" type="button" name="formselector" onClick="displayForm2(this)"  class="btn btn-primary col-2">REGISTRAR</button>
          </div>
          -->
          <div class="col-12  d-flex mt-5">
            <div class="col-6">
              <label for="lugar" class="mb-3">Lugar</label>
            </div>  
          
            <div class="col-6">
              <div class="col-12 d-flex justify-content-end">    
                <label class="switch">
                  <input type="checkbox" id="switch2" onclick="displayForm2(this)" value="1">
                  <span class="slider round"></span>
                </label> 
              </div>
            </div>
          </div>                                                                        



        
          <div style="display:block" id="requestForm2">
            
            <div id="padre2">                    
            
            <select name="" id="selectLugar" class="form-select mt-4 clasePadre2">
                <option value="{{$book->lugar['id']}}"  select="select">{{$book->lugar["ciudad"]}}  {{$book->lugar["estado"]}}  {{$book->lugar["pais"]}}</option>                
                @foreach ($lugares as $lugar)                
                  <option value="{{$lugar->id}}">{{$lugar->ciudad}}  {{$lugar->estado}} {{$lugar->pais}}</option>
                @endforeach
            </select>
                  
            </div>
            

          </div>

          <div style="display:none" id="memberForm2" class="mt-4">
                    
                <input type="text" placeholder="Ciudad (OBLIGATORIO)" class="form-control mt-3" id="ciudad">
                <input type="text" placeholder="Estado" class="form-control mt-3" id="estado">
                <input type="text" placeholder="Pais" class="form-control mt-3" id="pais">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-4" id="btnRegistrarLugar">Registrar Lugar</button>
                </div>

          </div>                                                                          



                                                                            <!--EDITORIAL-->
          <!--                                                                            
          <label for="editorial" class="mb-3 mt-5">Editorial</label>
          <div class="col-12 d-flex justify-content-between">
            <button  type="button" value="1" name="formselector" onClick="displayForm3(this)" class="btn btn-primary col-5">BUSCAR</button>
            <button value="2" type="button" name="formselector" onClick="displayForm3(this)"  class="btn btn-primary col-5">REGISTRAR</button>
          </div>
          -->
          <div class="col-12  d-flex mt-5">
            <div class="col-6">
              <label for="editorial" class="mb-3">Editorial</label>
            </div>  
          
            <div class="col-6">
              <div class="col-12 d-flex justify-content-end">    
                <label class="switch">
                  <input type="checkbox" id="switch3" onclick="displayForm3(this)" value="1">
                  <span class="slider round"></span>
                </label> 
              </div>
            </div>
          </div>                                                                        

        
          <div style="display:block" id="requestForm3">
            
            
            <div id="padre3" >
            <select name="" id="selectEditorial" class="form-select mt-4 clasePadre3">
                <option value="{{$book->editorial['id']}}" select="select">{{$book->editorial["nombre"]}}</option>
                @foreach ($editoriales as $editorial)                  
                  <option value="{{$editorial->id}}">{{$editorial->nombre}}</option>                  
                @endforeach
            </select>
            </div>

            
            
          </div>

          <div style="display:none" id="memberForm3" class="mt-4">
                    
                <input type="text" placeholder="Nombre Editorial" class="form-control mt-3" id="nombreEditorial">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-4" id="btnRegistrarEditorial">Registrar Editorial</button>
                </div>

          </div>            



          
                                                                            <!--AÑO AND STOCK-->
          <div class="col-12 d-flex">

            <div class="col-6">
              <label for="editorial" class="mt-5 mb-2">Año de publicación</label>
              <div id="padre4" class="clasePadre4">
                  @if($book['year']=="-1")
                    <input type="number" class="form-control" id="yearPublicacion" placeholder="Dejar en blanco si no sabes el dato"  min="0" pattern="^[0-9]+" onpaste="return false;" onDrop="return false;" autocomplete=off>                
                  @else
                    <input type="number" class="form-control" id="yearPublicacion" placeholder="Dejar en blanco si no sabes el dato"  min="0" pattern="^[0-9]+" onpaste="return false;" onDrop="return false;" autocomplete=off value="{{$book['year']}}">                
                  @endIf                                    
              </div>             
            </div>  
            

            <div class="col-6">
              <label for="editorial" class="mt-5 mb-2">Stock</label>
                  @if($book['stock']=="-1")
                    <input type="number" class="form-control" id="stock" placeholder="Dejar en blanco si no sabes el dato" min="0" pattern="^[0-9]+" onpaste="return false;" onDrop="return false;" autocomplete=off>
                  @else
                    <input type="number" class="form-control" id="stock" placeholder="Dejar en blanco si no sabes el dato" min="0" pattern="^[0-9]+" onpaste="return false;" onDrop="return false;" autocomplete=off value="{{$book['stock']}}">
                  @endIf                                    
              <!--<input type="number" class="form-control" id="stock" placeholder="Dejar en blanco si no sabes el dato" min="0" pattern="^[0-9]+" onpaste="return false;" onDrop="return false;" autocomplete=off value="{{$book['stock']}}">-->
              <!--<input type="number" class="form-control" id="stock" placeholder="Dejar en blanco si no sabes el dato" min="0" pattern="^[0-9]+" onpaste="return false;" onDrop="return false;" autocomplete=off>-->
            </div>

          </div>

















                                                                 <!--COORDINADORES-->
          <!-- 
          <label for="coordinadores" class="mb-3 mt-5">Coordinador(es)</label>
          <div class="col-12 d-flex justify-content-between">
            <button  type="button" value="1" name="formselector" onClick="displayForm4(this)" class="btn btn-primary col-2">BUSCAR</button>
            <button value="2" type="button" name="formselector" onClick="displayForm4(this)"  class="btn btn-primary col-2">REGISTRAR</button>
          </div>
          -->
          <div class="col-12  d-flex mt-5">
            <div class="col-6">
              <label for="coordinadores" class="mb-3">Coordinador(es)</label>
            </div>  
          
            <div class="col-6">
              <div class="col-12 d-flex justify-content-end">    
                <label class="switch">
                  <input type="checkbox" id="switch4" onclick="displayForm4(this)" value="1">
                  <span class="slider round"></span>
                </label> 
              </div>
            </div>
          </div>                                                                        

        
          <div style="display:block" id="requestForm4">
            
            
            <div id="padre5" >

              @for ($i = 0; $i < $sizeCoordinadores; $i++)         
                <select name="" id="selectCoordinadores{{$i+1}}" class="form-select mt-4 clasePadre5">
                    <option value="{{$book->coordinador[$i]['pivot']['coordinador_id']}}" select="select">{{$book->coordinador[$i]["nombre1"]}} {{$book->coordinador[$i]["nombre2"]}} {{$book->coordinador[$i]["apellido1"]}} {{$book->coordinador[$i]["apellido2"]}}</option>                        
                  @foreach ($coordinadores as $coordinador)
                    <option value="{{$coordinador->id}}">{{$coordinador->nombre1}} {{$coordinador->nombre2}} {{$coordinador->apellido1}} {{$coordinador->apellido2}}</option>
                  @endforeach
                </select>
              @endfor

            </div>

            
            <div class="col-12 d-flex justify-content-end mt-3">
              <button type="button" class="btn btn-danger btn-circle btn-xl" id="btnEliminarCoordinadores">-<i class="fa fa-times"></i></button>
              <button type="button" class="btn btn-primary btn-circle btn-xl" id="btnAgregarCoordinadores">+<i class="fa fa-times"></i></button>
            </div>
            
          </div>

          <div style="display:none" id="memberForm4" class="mt-4">
                    
                <input type="text" placeholder="Nombre (OBLIGATORIO)" class="form-control mt-3" id="nombre1Coordinador">
                <input type="text" placeholder="Segundo nombre" class="form-control mt-3" id="nombre2Coordinador">
                <input type="text" placeholder="Primer apellido" class="form-control mt-3" id="apellido1Coordinador">
                <input type="text" placeholder="Segundo apellido" class="form-control mt-3" id="apellido2Coordinador">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-4" id="btnRegistrarCoordinador">Registrar Coordinador</button>
                </div>

          </div>







                                                                         <!--UBICACION(ES) ESTANTE-->
          <!--                                                                         
          <label for="ubicaciones" class="mb-3 mt-5">Ubicacion(es)</label>
          <div class="col-12 d-flex justify-content-between">
            <button  type="button" value="1" name="formselector" onClick="displayForm5(this)" class="btn btn-primary col-2">BUSCAR</button>
            <button value="2" type="button" name="formselector" onClick="displayForm5(this)"  class="btn btn-primary col-2">REGISTRAR</button>
          </div>
          -->
          <div class="col-12  d-flex mt-5">
            <div class="col-6">
              <label for="ubicaione" class="mb-3">Ubicacion en Estante</label>
            </div>  
            
          
            <div class="col-6">
              <div class="col-12 d-flex justify-content-end">    
                <label class="switch">
                  <input type="checkbox" id="switch5" onclick="displayForm5(this)" value="1">
                  <span class="slider round"></span>
                </label> 
              </div>
            </div>
          </div>                                                                        

        
          <div style="display:block" id="requestForm5">
          
            <div id="padreUbicaciones" >
            
            
            @for ($i = 0; $i < $sizeUbicaciones; $i++)         
                <select name="" id="selectUbicacionEstante{{$i+1}}" class="form-select mt-4 clasePadreUbicaciones">                                                                                  
                      <option value="{{$book->ubicacion[0]['pivot']['ubicacion_id']}}" select="select">{{$book->ubicacion[$i]['estante']}}</option>                                                                                    
                    
                    @foreach ($ubicaciones as $ubicacion)         
                                          
                        <option value="{{$ubicacion->id}}">{{$ubicacion->estante}}</option>
                                                                                    
                    @endforeach                                        
                </select>                                        
              @endfor             
<!--            
            @for ($i = 0; $i < $sizeUbicaciones; $i++)     
            <select name="" id="selectUbicacionEstante{{$i+1}}" class="form-select mt-4 clasePadreUbicaciones">                              
                @foreach ($ubicaciones as $ubicacion)
                  <option value="{{$ubicacion->id}}">{{$ubicacion->estante}}</option>
                @endforeach
            </select>
            @endfor
-->            
            </div>


            <div class="col-12 d-flex justify-content-end mt-3">  
              <button type="button" class="btn btn-danger btn-circle btn-xl" id="btnEliminarUbicaciones">-<i class="fa fa-times"></i></button>
              <button type="button" class="btn btn-primary btn-circle btn-xl" id="btnAgregarUbicaciones">+<i class="fa fa-times"></i></button>
            </div>                        
         
          </div>

          
          <div style="display:none" id="memberForm5" class="mt-4">
                    
                <input type="text" placeholder="Ubicacion estante" class="form-control mt-3" id="ubicacionEstante">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-4" id="btnRegistrarUbicacion">Registrar Ubicacion</button>
                </div>

          </div>            





                                                                                      <!--COSTO-->
          <div class="col-12">
            <label for="costo" class="mt-5">Costo</label>            
                  @if($book['costo']=="-1")
                    <input type="number" class="form-control" id="costo" placeholder="Dejar en blanco si no sabes el dato" step="0.10" min="0">
                  @else
                    <input type="number" class="form-control" id="costo" placeholder="Dejar en blanco si no sabes el dato" step="0.10" min="0" value="{{$book->costo}}">
                  @endIf                                    
            <!--<input type="number" class="form-control" id="costo" placeholder="Dejar en blanco si no sabes el dato" step="0.10" min="0" value="{{$book->costo}}">-->
            <!--<input type="number" class="form-control" id="costo" placeholder="Dejar en blanco si no sabes el dato" step="0.10" min="0">-->
          </div>                                                                                      








                                                                                      <!--COLECCION-->

          <div class="col-12  d-flex mt-5">
            <div class="col-6">
              <label for="coleccion" class="mb-3">Colección</label>
            </div>  
          
            <div class="col-6">
              <div class="col-12 d-flex justify-content-end">    
                <label class="switch">
                  <input type="checkbox" id="switch6" onclick="displayForm6(this)" value="1">
                  <span class="slider round"></span>
                </label> 
              </div>
            </div>
          </div>                                                                        

        
          <div style="display:block" id="requestForm6">
            
            <div id="padre6" >
            
            <select name="" id="selectColeccion" class="form-select mt-4 clasePadre6">                
                  <option value="{{$book->coleccion['id']}}">{{$book->coleccion["nombre"]}}</option>
                @foreach ($colecciones as $coleccion)
                  <option value="{{$coleccion->id}}">{{$coleccion->nombre}}</option>
                @endforeach
            </select>

            </div>
         
          </div>

          
          <div style="display:none" id="memberForm6" class="mt-4">
                    
                <input type="text" placeholder="Coleccion" class="form-control mt-3" id="coleccion">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-4" id="btnRegistrarColeccion">Registrar Coleccion</button>
                </div>

          </div>       







                                                                                        <!--OBSERVACIONES-->
          <div class="col-12 mt-5">
            <label for="observaciones" class="mb-3">Observaciones</label>
            <textarea name="" id="observacionesTextArea" cols="30" rows="10" class="form-control">SIN OBSERVACIONES</textarea><br><br>
          </div>


          @if($book->fondo == 1)
            <label><input type="checkbox" id="fondoAntiguo" value="1" checked> Pertenece al Fondo Antiguo</label><br><br>
          @else
            <label><input type="checkbox" id="fondoAntiguo" value="0"> Pertenece al Fondo Antiguo</label><br><br>
          @endIf
          

           <div class="col-12">
              <button class="btn col-12 mt-4 mb-5" style="resize:none;" id="btnRegistrarLibroButton">ACEPTAR</button>
           </div> 

      </div>

  </div>

</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">    
    <link rel="stylesheet" href="{{asset('estilos1.css')}}">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    
    <style>
      #update{
        display: none;          
      }
    </style>
@stop

@section('js')    
    <script type='text/javascript' src="{{asset('script2.js')}}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>    
@stop
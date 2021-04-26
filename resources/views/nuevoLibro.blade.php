<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIH-Registrar Libro</title>
    <link rel="icon" type="image/png" href="{{ asset('logo IIE.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('estilos1.css') }}">
</head>
<body>

<div class="container-fluid">

    <div class="row">
    
      <div class="col-12 mt-5">
        <h1 class="text-center">REGISTRAR LIBRO</h1>
      </div>



      <div class="col-12 d-flex justify-content-center">
    
        <form action="" class="col-5 mt-5">
                      
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput"  name="titulo" placeholder="name@example.com">
            <label for="floatingInput">Titulo</label>
          </div>
        
                                                                        <!--AUTORES-->
          <label for="autores" class="mb-3">Autor(es)</label>
          <div class="col-12 d-flex justify-content-between">
            <button  type="button" value="1" name="formselector" onClick="displayForm(this)" class="btn btn-primary col-5">BUSCAR</button>
            <button value="2" type="button" name="formselector" onClick="displayForm(this)"  class="btn btn-primary col-5">REGISTRAR</button>
          </div>
        
          <div style="display:block" id="requestForm">
            
            
            <div id="padre" class="clasePadre">
            <select name="" id="selectAutor" class="form-select mt-4">
                @foreach ($autores as $autor)
                  <option value="{{$autor->id}}">{{$autor->nombre}} {{$autor->primerApellido}} {{$autor->segundoApellido}}</option>
                @endforeach
            </select>
            </div>

            
            <div class="col-12 d-flex justify-content-end mt-3">
              <button class="btn btn-danger" id="btnEliminarAutores" >-</button>
              <button class="btn btn-success" id="btnAgregarAutores" >+</button>
            </div>
            
          </div>

          <div style="display:none" id="memberForm" class="mt-4">
                    
                <input type="text" placeholder="Nombre" class="form-control mt-3" id="primerNombre">
                <input type="text" placeholder="Segundo nombre (opcional)" class="form-control mt-3" id="segundoNombre">
                <input type="text" placeholder="Primer apellido" class="form-control mt-3" id="primerApellido">
                <input type="text" placeholder="Segundo apellido" class="form-control mt-3" id="segundoApellido">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-3" id="btnRegistrarAutor">Registrar Autor</button>
                </div>

          </div>

                                                                          <!--LUGAR-->
          <label for="lugar" class="mt-5 mb-3">Lugar</label>
          <div class="col-12 d-flex justify-content-between">
            <button  type="button" value="1" name="formselector" onClick="displayForm2(this)" class="btn btn-primary col-5">BUSCAR</button>
            <button value="2" type="button" name="formselector" onClick="displayForm2(this)"  class="btn btn-primary col-5">REGISTRAR</button>
          </div>
        
          <div style="display:block" id="requestForm2">
            
            
            <div id="padre" class="clasePadre">
            <select name="" id="selectAutor" class="form-select mt-4">
                @foreach ($lugares as $lugar)
                  <option value="{{$lugar->id}}">{{$lugar->ciudad}} </option>
                @endforeach
            </select>
            </div>

          </div>

          <div style="display:none" id="memberForm2" class="mt-4">
                    
                <input type="text" placeholder="Ciudad" class="form-control mt-3" id="primerNombre">
                <input type="text" placeholder="Estado" class="form-control mt-3" id="segundoNombre">
                <input type="text" placeholder="Pais" class="form-control mt-3" id="primerApellido">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-3" id="btnRegistrarAutor">Registrar Lugar</button>
                </div>

          </div>                                                                          


                                                                            <!--EDITORIAL-->
          <label for="editorial" class="mt-4 mb-2">Editorial</label>
          <div id="padre" class="clasePadre">
            <select name="" id="selectAutor" class="form-select mt-1">
                @foreach ($editoriales as $editorial)
                  <option value="{{$editorial->id}}">{{$editorial->nombre}} </option>
                @endforeach
            </select>
          </div>


                                                                            <!--AÑO AND STOCK-->
          <div class="col-12 d-flex">

            <div class="col-6">
              <label for="editorial" class="mt-4 mb-2">Año de publicación</label>
              <div id="padre" class="clasePadre">
                <input type="number" class="form-control">
              </div>             
            </div>  

            <div class="col-6">
              <label for="editorial" class="mt-4 mb-2">Stock</label>
              <input type="number" class="form-control">
            </div>

          </div>


                  
                                                                        <!--COORDINADORES-->
          <label for="coordinadores" class="mt-5 mb-3">Coordinador(es)</label>
          <div class="col-12 d-flex justify-content-between">
            <button  type="button" value="1" name="formselector" onClick="displayForm3(this)" class="btn btn-primary col-5">BUSCAR</button>
            <button value="2" type="button" name="formselector" onClick="displayForm3(this)"  class="btn btn-primary col-5">REGISTRAR</button>
          </div>
        
          <div style="display:block" id="requestForm3">
            
            
            <div id="padre" class="clasePadre">
            <select name="" id="selectAutor" class="form-select mt-4">
                @foreach ($autores as $autor)
                  <option value="{{$autor->id}}">{{$autor->nombre}} {{$autor->primerApellido}} {{$autor->segundoApellido}}</option>
                @endforeach
            </select>
            </div>

            
            <div class="col-12 d-flex justify-content-end mt-3">
              <button class="btn btn-danger" id="btnEliminarAutores" >-</button>
              <button class="btn btn-success" id="btnAgregarAutores" >+</button>
            </div>
            
          </div>

          <div style="display:none" id="memberForm3" class="mt-4">
                    
                <input type="text" placeholder="Nombre" class="form-control mt-3" id="primerNombre">
                <input type="text" placeholder="Segundo nombre (opcional)" class="form-control mt-3" id="segundoNombre">
                <input type="text" placeholder="Primer apellido" class="form-control mt-3" id="primerApellido">
                <input type="text" placeholder="Segundo apellido" class="form-control mt-3" id="segundoApellido">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-3" id="btnRegistrarAutor">Registrar Coordinador</button>
                </div>

          </div>
          



                                                                                      <!--UBICACION AND COSTO-->
          <div class="col-12 d-flex">

            <div class="col-6">
              <label for="editorial" class="mt-4 mb-2">Ubicacion en bodega</label>
              <div id="padre" class="clasePadre">
                <input type="text" class="form-control">
              </div>             
            </div>  

            <div class="col-6">
              <label for="editorial" class="mt-4 mb-2">Costo</label>
              <input type="number" class="form-control">
            </div>

          </div>



          <div class="col-12 mt-4">
            <label for="observaciones" class="mb-3">Observaciones</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>



           <div class="col-12">
              <button class="btn btn-danger col-12 mt-4 mb-5" style="resize:none;">REGISTRAR LIBRO</button>
           </div> 



   
    </div>

</div>

    <script type='text/javascript' src="{{ asset('script1.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
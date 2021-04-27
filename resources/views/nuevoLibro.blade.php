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
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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

          <!--
          <div class="col-12 d-flex justify-content-between">
            <button  type="button" value="1" name="formselector" onClick="displayForm(this)" class="btn btn-primary col-2">BUSCAR</button>
            <button value="2" type="button" name="formselector" onClick="displayForm(this)"  class="btn btn-primary col-2">REGISTRAR</button>
          </div>
          -->
        
          <div style="display:block" id="requestForm">
            
            
            <div id="padre" >
            <select name="" id="selectAutor" class="form-select mt-4 clasePadre">
                @foreach ($autores as $autor)
                  <option value="{{$autor->id}}">{{$autor->nombre1}} {{$autor->nombre2}} {{$autor->apellido1}} {{$autor->apellido2}}</option>
                @endforeach
            </select>
            </div>

            
            <div class="col-12 d-flex justify-content-end mt-3">
              <button class="btn btn-danger" id="btnEliminarAutores" >-</button>
              <button class="btn btn-success" id="btnAgregarAutores" >+</button>
            </div>
            
          </div>

          <div style="display:none" id="memberForm" class="mt-4">
                    
                <input type="text" placeholder="Nombre" class="form-control mt-3" id="nombre1">
                <input type="text" placeholder="Segundo nombre (opcional)" class="form-control mt-3" id="nombre2">
                <input type="text" placeholder="Primer apellido" class="form-control mt-3" id="apellido1">
                <input type="text" placeholder="Segundo apellido" class="form-control mt-3" id="apellido2">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-3" id="btnRegistrarAutor">Registrar Autor</button>
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
                @foreach ($lugares as $lugar)
                  <option value="{{$lugar->id}}">{{$lugar->ciudad}}  {{$lugar->estado}} {{$lugar->pais}}</option>
                @endforeach
            </select>
                  
            </div>
            

          </div>

          <div style="display:none" id="memberForm2" class="mt-4">
                    
                <input type="text" placeholder="Ciudad" class="form-control mt-3" id="ciudad">
                <input type="text" placeholder="Estado" class="form-control mt-3" id="estado">
                <input type="text" placeholder="Pais" class="form-control mt-3" id="pais">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-3" id="btnRegistrarLugar">Registrar Lugar</button>
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
                @foreach ($editoriales as $editorial)
                  <option value="{{$autor->id}}">{{$editorial->nombre}}</option>
                @endforeach
            </select>
            </div>

            
            
          </div>

          <div style="display:none" id="memberForm3" class="mt-4">
                    
                <input type="text" placeholder="Nombre Editorial" class="form-control mt-3" id="nombreEditorial">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-3" id="btnRegistrarEditorial">Registrar Editorial</button>
                </div>

          </div>            



          
                                                                            <!--AÑO AND STOCK-->
          <div class="col-12 d-flex">

            <div class="col-6">
              <label for="editorial" class="mt-5 mb-2">Año de publicación</label>
              <div id="padre4" class="clasePadre4">
                <input type="number" class="form-control">
              </div>             
            </div>  

            <div class="col-6">
              <label for="editorial" class="mt-5 mb-2">Stock</label>
              <input type="number" class="form-control">
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
            <select name="" id="selectCoordinadores" class="form-select mt-4 clasePadre5">
                @foreach ($coordinadores as $coordinador)
                  <option value="{{$autor->id}}">{{$coordinador->nombre1}} {{$coordinador->nombre2}} {{$coordinador->apellido1}} {{$coordinador->apellido2}}</option>
                @endforeach
            </select>
            </div>

            
            <div class="col-12 d-flex justify-content-end mt-3">
              <button class="btn btn-danger" id="btnEliminarCoordinadores" >-</button>
              <button class="btn btn-success" id="btnAgregarCoordinadores" >+</button>
            </div>
            
          </div>

          <div style="display:none" id="memberForm4" class="mt-4">
                    
                <input type="text" placeholder="Nombre" class="form-control mt-3" id="nombre1Coordinador">
                <input type="text" placeholder="Segundo nombre (opcional)" class="form-control mt-3" id="nombre2Coordinador">
                <input type="text" placeholder="Primer apellido" class="form-control mt-3" id="apellido1Coordinador">
                <input type="text" placeholder="Segundo apellido" class="form-control mt-3" id="apellido2Coordinador">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-3" id="btnRegistrarCoordinador">Registrar Coordinador</button>
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
              <label for="ubicaione" class="mb-3">Ubicacion</label>
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
            
            <div id="padre6" >
            <select name="" id="selectUbicacionEstante" class="form-select mt-4 clasePadre6">
                @foreach ($autores as $autor)
                  <option value="{{$autor->id}}">{{$autor->nombre1}} {{$autor->nombre2}} {{$autor->apellido1}} {{$autor->apellido2}}</option>
                @endforeach
            </select>
            </div>
         
          </div>

          
          <div style="display:none" id="memberForm5" class="mt-4">
                    
                <input type="text" placeholder="Ubicacion estante" class="form-control mt-3" id="ubicacionEstante">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-3" id="btnRegistrarUbicacion">Registrar Ubicacion</button>
                </div>

          </div>            





                                                                                      <!--COSTO-->
          <div class="col-12">
            <label for="costo" class="mt-5">Costo</label>
            <input type="text" class="form-control">
          </div>                                                                                      








                                                                                        <!--OBSERVACIONES-->
          <div class="col-12 mt-5">
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






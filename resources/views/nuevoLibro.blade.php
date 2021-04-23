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
   
    </div>

</div>

    <script type='text/javascript' src="{{ asset('script1.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
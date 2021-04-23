    var btnAgregarMasAutores = document.getElementById("btnAgregarAutores");
    var btnRegistrarAutor = document.getElementById("btnRegistrarAutor");
    var btnEliminarMasAutores = document.getElementById("btnEliminarAutores");
    var select = document.getElementById("selectAutor");
    var i = 1;
        
    function displayForm(c) {
        if (c.value == "2") {    
            jQuery('#memberForm').toggle('show');
            jQuery('#requestForm').hide();
        }
        if (c.value == "1") {
            jQuery('#requestForm').toggle('show');
            jQuery('#memberForm').hide();
        }
    };
    
    btnRegistrarAutor.addEventListener("click",function(){
        registrarAutor();
        setTimeout(actualizarSelect,2000);
    });

    btnEliminarMasAutores.addEventListener("click",function(e){
        e.preventDefault();
        eliminarAutoresMas();
        //alert("autor menos");
    })
    
    btnAgregarMasAutores.addEventListener("click",function(e){
        e.preventDefault();
        agregarAutoresMas();
        setTimeout(actualizarSelect,2000);
    })


    function registrarAutor(){
        var primerNombre = document.getElementById("primerNombre").value.toString();
        var segundoNombre = document.getElementById("segundoNombre").value.toString();
        var primerApellido = document.getElementById("primerApellido").value.toString();
        var segundoApellido = document.getElementById("segundoApellido").value.toString();
        var select = document.getElementById("selectAutor");
        
        
        //peticion.open("POST","{{ asset('libros.php') }}");
        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/libros.php");
        
        var parametros = "primerNombre="+primerNombre+"&segundoNombre="+segundoNombre+"&primerApellido="+primerApellido+"&segundoApellido="+segundoApellido;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        
        peticion.send(parametros);
        
    }

    function actualizarSelect(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/autores.php");
        select.innerHTML = "<option></option>";

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);



          var padre = document.getElementById("padre");        
          var selects = document.querySelectorAll("select");
          var nSelects = selects.length;

          
          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.innerHTML += datos[i].nombre+" ";                
            elemento.innerHTML += datos[i].primerApellido+" "; 
            elemento.innerHTML += datos[i].segundoApellido; 
            select.appendChild(elemento);
          }
          



        }

        peticion2.send();
    }

    function actualizarSelect2(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/autores.php");
        select.innerHTML = "<option></option>";

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);



          var padre = document.getElementById("padre");        
          var selects = document.querySelectorAll("select");
          var nSelects = selects.length;
          //console.log(selects.length);


          var div = document.getElementsByClassName('clasePadre')[0];
          if(div !== null){
              while (div.hasChildNodes()){
                  div.removeChild(div.lastChild);
              }
          }else{
              alert ("No existe la caja previamente creada.");
          }



          /*
          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.innerHTML += datos[i].nombre+" ";                
            elemento.innerHTML += datos[i].primerApellido+" "; 
            elemento.innerHTML += datos[i].segundoApellido; 
            select.appendChild(elemento);
          }
          */



        }

        peticion2.send();
    }

    

    function agregarAutoresMas(){
        var padre = document.getElementById("padre");
        var select = document.createElement("select");
        select.className ="form-select mt-4";
        select.id = i
        var option = document.createElement("option");


        var peticion2 = new XMLHttpRequest();
        peticion2.open("GET","http://localhost/base/proyecto/public/autores.php");
        

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);
  
          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.innerHTML += datos[i].nombre+" ";                
            elemento.innerHTML += datos[i].primerApellido+" "; 
            elemento.innerHTML += datos[i].segundoApellido; 
            select.appendChild(elemento);
          }

        }

        peticion2.send();

        padre.appendChild(select);
        i++;
    }

    function eliminarAutoresMas(){
        var padre = document.getElementById("padre");        
        var parrafos = document.querySelectorAll("select");
        var ultimoSelect = parrafos[parrafos.length-1];

        padre.removeChild(ultimoSelect);
    }
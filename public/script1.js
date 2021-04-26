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

    function displayForm2(c) {
        if (c.value == "2") {    
            jQuery('#memberForm2').toggle('show');
            jQuery('#requestForm2').hide();
        }
        if (c.value == "1") {
            jQuery('#requestForm2').toggle('show');
            jQuery('#memberForm2').hide();
        }
    };

    function displayForm3(c) {
        if (c.value == "2") {    
            jQuery('#memberForm3').toggle('show');
            jQuery('#requestForm3').hide();
        }
        if (c.value == "1") {
            jQuery('#requestForm3').toggle('show');
            jQuery('#memberForm3').hide();
        }
    };

    btnEliminarMasAutores.addEventListener("click",function(e){
        e.preventDefault();
        eliminarAutoresMas();
    })
    
    btnAgregarMasAutores.addEventListener("click",function(e){
        e.preventDefault();
        agregarAutoresMas();
        setTimeout(actualizarSelect,2000);
    })

    btnRegistrarAutor.addEventListener("click",function(){
        registrarAutor();
        setTimeout(actualizarSelectPrueba,2000);
    });

    function agregarAutoresMas(){
        var padre = document.getElementById("padre");
        var select = document.createElement("select");
        select.className ="form-select mt-4";
        select.id = i

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

    function registrarAutor(){
        var primerNombre = document.getElementById("primerNombre").value.toString();
        var segundoNombre = document.getElementById("segundoNombre").value.toString();
        var primerApellido = document.getElementById("primerApellido").value.toString();
        var segundoApellido = document.getElementById("segundoApellido").value.toString();
        
        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/libros.php");
        
        var parametros = "primerNombre="+primerNombre+"&segundoNombre="+segundoNombre+"&primerApellido="+primerApellido+"&segundoApellido="+segundoApellido;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        
        peticion.send(parametros);
    }

    function actualizarSelectPrueba(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/autores.php");    
        var padre = document.getElementById("padre");

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);
          var selects = document.querySelectorAll("select");
          var nSelects = selects.length;

          //Borro todos los selects
          var x = 0;
          while(x<nSelects){
            var padre = document.getElementById("padre");        
            var parrafos = document.querySelectorAll("select");
            var ultimoSelect = parrafos[parrafos.length-1];
    
            padre.removeChild(ultimoSelect);

            x++;
          } 

        }
          
        peticion2.send();
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
































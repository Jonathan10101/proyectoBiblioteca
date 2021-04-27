    var btnAgregarMasAutores = document.getElementById("btnAgregarAutores");
    var btnRegistrarAutor = document.getElementById("btnRegistrarAutor");
    var btnEliminarMasAutores = document.getElementById("btnEliminarAutores");
    var btnRegistrarLugar = document.getElementById("btnRegistrarLugar");
    var btnRegistrarEditorial = document.getElementById("btnRegistrarEditorial");
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

    btnRegistrarLugar.addEventListener("click",function(){
        registrarLugar();
        setTimeout(actualizarSelectPrueba2,2000);
    });

    btnRegistrarEditorial.addEventListener("click",function(){
        registrarEditorial();
        setTimeout(actualizarSelectPrueba3,2000);
    });

    function agregarAutoresMas(){
        var padre = document.getElementById("padre");
        var select = document.createElement("select");
        select.className ="form-select mt-4 clasePadre";
        select.id = i

        var peticion2 = new XMLHttpRequest();
        peticion2.open("GET","http://localhost/base/proyecto/public/autores.php");
        

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);

          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.innerHTML += datos[i].nombre1+" ";                
            elemento.innerHTML += datos[i].nombre2+" ";                
            elemento.innerHTML += datos[i].apellido1+" "; 
            elemento.innerHTML += datos[i].apellido2; 
            select.appendChild(elemento);
          }

        }

        peticion2.send();
        padre.appendChild(select);
        i++;
    }

    function eliminarAutoresMas(){
        var padre = document.getElementById("padre");        
        
        var parrafos = document.querySelectorAll(".clasePadre");
        var ultimoSelect = parrafos[parrafos.length-1];

        padre.removeChild(ultimoSelect);
    }

    function registrarAutor(){
        var nombre1 = document.getElementById("nombre1").value.toString();
        var nombre2 = document.getElementById("nombre2").value.toString();
        var apellido1 = document.getElementById("apellido1").value.toString();
        var apellido2 = document.getElementById("apellido2").value.toString();
        
        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/libros.php");
        
        var parametros = "nombre1="+nombre1+"&nombre2="+nombre2+"&apellido1="+apellido1+"&apellido2="+apellido2;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        
        peticion.send(parametros);
    }


    function registrarLugar(){
        var ciudad = document.getElementById("ciudad").value.toString();
        var estado = document.getElementById("estado").value.toString();
        var pais = document.getElementById("pais").value.toString();
        
        
        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/lugar.php");
        
        var parametros = "ciudad="+ciudad+"&estado="+estado+"&pais="+pais;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        
        peticion.send(parametros);
    }


    
    function registrarEditorial(){
        var nombreEditorial = document.getElementById("nombreEditorial").value.toString();

        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/registrarEditorial.php");
        
        var parametros = "nombreEditorial="+nombreEditorial;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        
        peticion.send(parametros);

    }

    function actualizarSelectPrueba(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/autores.php");    
        var padre = document.getElementById("padre");

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);
          var selects = document.querySelectorAll(".clasePadre");
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


    function actualizarSelectPrueba2(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/lugaresSelect.php");
        select.innerHTML = "<option></option>";

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);

          
          
          var select = document.getElementById("selectLugar");
          select.innerHTML = "";
          
          
          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.innerHTML += datos[i].pais+" ";                
            elemento.innerHTML += datos[i].estado+" ";
            elemento.innerHTML += datos[i].ciudad+" "; 
            select.appendChild(elemento);
          }
          
         console.log(select);
          
    
        }

        peticion2.send();
    }


    function actualizarSelectPrueba3(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/selectEditoriales.php");
        select.innerHTML = "<option></option>";

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);

          
          
          var select = document.getElementById("selectEditorial");
          select.innerHTML = "";
          
          
          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.innerHTML += datos[i].nombreEditorial+" ";                
            
            select.appendChild(elemento);
          }
          
         console.log(select);
          
    
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
            elemento.innerHTML += datos[i].nombre1+" ";                
            elemento.innerHTML += datos[i].nombre2+" ";
            elemento.innerHTML += datos[i].apellido1+" "; 
            elemento.innerHTML += datos[i].apellido2; 
            select.appendChild(elemento);
          }
          
        }

        peticion2.send();
    }
































    var btnRegistrarLibroButton = document.getElementById("btnRegistrarLibroButton");
    var btnAgregarMasAutores = document.getElementById("btnAgregarAutores");
    var btnRegistrarAutor = document.getElementById("btnRegistrarAutor");
    var btnEliminarMasAutores = document.getElementById("btnEliminarAutores");
    var btnRegistrarLugar = document.getElementById("btnRegistrarLugar");
    var btnRegistrarEditorial = document.getElementById("btnRegistrarEditorial");
    
    var btnAgregarCoordinadores= document.getElementById("btnAgregarCoordinadores");
    var btnEliminarCoordinadores = document.getElementById("btnEliminarCoordinadores");
    var btnRegistrarCoordinador = document.getElementById("btnRegistrarCoordinador");
    var btnRegistrarColeccion = document.getElementById("btnRegistrarColeccion");
    var btnRegistrarUbicacion = document.getElementById("btnRegistrarUbicacion");
    var btnRegistrarColeccion = document.getElementById("btnRegistrarColeccion");

    var btnEliminarUbicacionesSelectMenos = document.getElementById("btnEliminarUbicaciones");
    var btnAgregarUbicacionesSelectMas = document.getElementById("btnAgregarUbicaciones");



    var switch1 = document.getElementById("switch1");
    var i = 2;
    var z = 2;
    var w = 2;
    var q = 2;
    var autorBoleano = false;
    var coordinadorBoleano = false;
    var ubicacionEstanteBoleano = false;
    
   
    //Evitar enviar decimal
    const campoNumerico = document.getElementById('yearPublicacion');

    campoNumerico.addEventListener('keydown', function(evento) {
        const teclaPresionada = evento.key;
        const teclaPresionadaEsUnNumero =
        Number.isInteger(parseInt(teclaPresionada));

        const sePresionoUnaTeclaNoAdmitida = 
        teclaPresionada != 'ArrowDown' &&
        teclaPresionada != 'ArrowUp' &&
        teclaPresionada != 'ArrowLeft' &&
        teclaPresionada != 'ArrowRight' &&
        teclaPresionada != 'Backspace' &&
        teclaPresionada != 'Delete' &&
        teclaPresionada != 'Enter' &&
        !teclaPresionadaEsUnNumero;
        const comienzaPorCero = 
        campoNumerico.value.length === 1 &&
        teclaPresionada == 1;

        if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
            evento.preventDefault(); 
        }

    });

    //Evitar enviar decimal
    const campoNumerico2 = document.getElementById('stock');

    campoNumerico2.addEventListener('keydown', function(evento) {
            const teclaPresionada = evento.key;
            const teclaPresionadaEsUnNumero =
            Number.isInteger(parseInt(teclaPresionada));
    
            const sePresionoUnaTeclaNoAdmitida = 
            teclaPresionada != 'ArrowDown' &&
            teclaPresionada != 'ArrowUp' &&
            teclaPresionada != 'ArrowLeft' &&
            teclaPresionada != 'ArrowRight' &&
            teclaPresionada != 'Backspace' &&
            teclaPresionada != 'Delete' &&
            teclaPresionada != 'Enter' &&
            !teclaPresionadaEsUnNumero;
            const comienzaPorCero = 
            campoNumerico.value.length === 0 &&
            teclaPresionada == 0;
    
            if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
                evento.preventDefault(); 
            }
    
    });


    btnRegistrarLibroButton.addEventListener("click",function(e){
        e.preventDefault();
        registrarLibro();
    })
      
    function displayForm(c) {
        
        if(switch1.checked==true){
           c.value = 2;
        }else{
            c.value = 1;
        }
        
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

        if(switch2.checked==true){
            c.value = 2;
        }else{
             c.value = 1;
        }

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

        if(switch3.checked==true){
            c.value = 2;
        }else{
             c.value = 1;
        }

        if (c.value == "2") {    
            jQuery('#memberForm3').toggle('show');
            jQuery('#requestForm3').hide();
        }
        if (c.value == "1") {
            jQuery('#requestForm3').toggle('show');
            jQuery('#memberForm3').hide();
        }
    };

    function displayForm4(c) {

        if(switch4.checked==true){
            c.value = 2;
        }else{
             c.value = 1;
        }

        if (c.value == "2") {    
            jQuery('#memberForm4').toggle('show');
            jQuery('#requestForm4').hide();
        }
        if (c.value == "1") {
            jQuery('#requestForm4').toggle('show');
            jQuery('#memberForm4').hide();
        }
    };
    
    function displayForm5(c) {

        if(switch5.checked==true){
            c.value = 2;
        }else{
             c.value = 1;
        }

        if (c.value == "2") {    
            jQuery('#memberForm5').toggle('show');
            jQuery('#requestForm5').hide();
        }
        if (c.value == "1") {
            jQuery('#requestForm5').toggle('show');
            jQuery('#memberForm5').hide();
        }
    };
        
    function displayForm6(c) {

        if(switch6.checked==true){
            c.value = 2;
        }else{
             c.value = 1;
        }

        if (c.value == "2") {    
            jQuery('#memberForm6').toggle('show');
            jQuery('#requestForm6').hide();
        }
        if (c.value == "1") {
            jQuery('#requestForm6').toggle('show');
            jQuery('#memberForm6').hide();
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

 

    
    btnEliminarCoordinadores.addEventListener("click",function(e){
        e.preventDefault();
        eliminarCoordinadoresMas();
    })
    

    btnAgregarCoordinadores.addEventListener("click",function(e){
        e.preventDefault();
        agergarCoordinadoresMas();
    })

    btnAgregarUbicacionesSelectMas.addEventListener("click",function(e){
        e.preventDefault();
        agregarUbicacionesMas();
        //alert("+ ubicaciones");
    })
    

    btnEliminarUbicacionesSelectMenos.addEventListener("click",function(e){
        e.preventDefault();
        eliminarUbicacionesMas();
    })

    btnRegistrarAutor.addEventListener("click",function(){
        registrarAutor();
        autorBoleano = true;
        setTimeout(actualizarSelectBorrarAutor,2000);
    });

    btnRegistrarLugar.addEventListener("click",function(){
        registrarLugar();
        setTimeout(actualizarSelectPrueba2,2000);
    });

    btnRegistrarEditorial.addEventListener("click",function(){
        registrarEditorial();
        setTimeout(actualizarSelectPrueba3,2000);
    });

    btnRegistrarUbicacion.addEventListener("click",function(){
        registrarUbicacion();
        ubicacionEstanteBoleano = true;
        setTimeout(actualizarSelectPrueba5,2000);
    })

    btnRegistrarColeccion.addEventListener("click",function(){
        registrarColeccion();
        setTimeout(actualizarSelectPrueba6,2000);
    })
    
    btnRegistrarCoordinador.addEventListener("click",function(){
        registrarCoordinador();
        coordinadorBoleano  = true;
        setTimeout(actualizarSelectBorrar,2000);
    });

    function actualizarSelectBorrar(){
        var padre = document.getElementById("padre5");
        var selects = document.getElementsByClassName("clasePadre5");
        var nSelects = selects.length;

        var x = 0;
        while(x<nSelects){
            padre.removeChild(selects[selects.length-1]);
            x++;
        }

    }

    function actualizarSelectBorrarAutor(){
        var padre = document.getElementById("padre");
        var selects = document.getElementsByClassName("clasePadre");
        var nSelects = selects.length;

        var x = 0;
        while(x<nSelects){
            padre.removeChild(selects[selects.length-1]);
            x++;
        }
    }

    function agregarAutoresMas(){
        
        var padre = document.getElementById("padre");
        var select = document.createElement("select");
        select.className ="form-select mt-4 clasePadre";

//NEW                
        var selects = document.querySelectorAll(".clasePadre");
        var ultimoSelect = selects[selects.length-1];
        var nSelects = selects.length+1;                
//
        if(autorBoleano){
            i = 1;
            autorBoleano = false;
        }else{
            i = nSelects;
        }
        
        select.id = "selectAutor"+i;

        var peticion2 = new XMLHttpRequest();
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/selectAutores.php");
        

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);

          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.value = datos[i].id;
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

    function agergarCoordinadoresMas(){
        var padre = document.getElementById("padre5");
        var select = document.createElement("select");
        select.className ="form-select mt-4 clasePadre5";
//NEW                
        var selects = document.querySelectorAll(".clasePadre5");
        var ultimoSelect = selects[selects.length-1];
        var nSelects = selects.length+1;                
//




        if(coordinadorBoleano){
            z = 1;
            coordinadorBoleano = false;
        }else{
            z = nSelects;
        }

        select.id = "selectCoordinadores"+z;

        var peticion2 = new XMLHttpRequest();
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/selectCoordinadores.php");
        

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);

          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.value = datos[i].id;
            elemento.innerHTML += datos[i].nombre1+" ";                
            elemento.innerHTML += datos[i].nombre2+" ";                
            elemento.innerHTML += datos[i].apellido1+" "; 
            elemento.innerHTML += datos[i].apellido2; 
            select.appendChild(elemento);
          }

        }

        peticion2.send();
        padre.appendChild(select);
        z++;
    }

    function agregarUbicacionesMas(){

        var padre = document.getElementById("padreUbicaciones");
        var select = document.createElement("select");
        select.className ="form-select mt-4 clasePadreUbicaciones";

        //NEW                
        var selects = document.querySelectorAll(".clasePadreUbicaciones");
        var ultimoSelect = selects[selects.length-1];
        var nSelects = selects.length+1;                
//


        if(ubicacionEstanteBoleano){
            q = 1;
            ubicacionEstanteBoleano = false;
        }else{
            q = nSelects;
        }
        select.id = "selectUbicacionEstante"+q;
        console.log("selectUbicacionEstante"+q);

        var peticion2 = new XMLHttpRequest();
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/selectUbicacion.php");
        

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);

          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.value = datos[i].id;
            elemento.innerHTML += datos[i].estante+" ";                
            select.appendChild(elemento);
          }

        }

        peticion2.send();
        padre.appendChild(select);
        q++;
    }

    function eliminarUbicacionesMas(){
        var padre = document.getElementById("padreUbicaciones");        
        
        var parrafos = document.querySelectorAll(".clasePadreUbicaciones");
        var ultimoSelect = parrafos[parrafos.length-1];

        padre.removeChild(ultimoSelect);
    }

    function eliminarAutoresMas(){
        var padre = document.getElementById("padre");        
        
        var parrafos = document.querySelectorAll(".clasePadre");
        var ultimoSelect = parrafos[parrafos.length-1];

        padre.removeChild(ultimoSelect);
    }

    function eliminarCoordinadoresMas(){
        var padre = document.getElementById("padre5");        
        
        var parrafos = document.querySelectorAll(".clasePadre5");
        var ultimoSelect = parrafos[parrafos.length-1];

        padre.removeChild(ultimoSelect);
    }

    function registrarAutor(){
        var nombre1 = document.getElementById("nombre1").value.toString();
        var nombre2 = document.getElementById("nombre2").value.toString();
        var apellido1 = document.getElementById("apellido1").value.toString();
        var apellido2 = document.getElementById("apellido2").value.toString();
        
        


        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/bd/autoresInsert.php");

        
        var parametros = "nombre1="+nombre1+"&nombre2="+nombre2+"&apellido1="+apellido1+"&apellido2="+apellido2;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");




        peticion.onload = function(){
            var datos = JSON.parse(peticion.responseText);
            alert(datos);
            
            if(datos=="Autor Registrado"){
                console.log("registra");
                document.getElementById("nombre1").value = "";
                document.getElementById("nombre2").value = "";
                document.getElementById("apellido1").value = "";
                document.getElementById("apellido2").value = "";
                
            }
            
        }
        
        



        
        peticion.send(parametros);
    }


    function registrarLugar(){
        var ciudad = document.getElementById("ciudad").value.toString();
        var estado = document.getElementById("estado").value.toString();
        var pais = document.getElementById("pais").value.toString();
        
        
        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/bd/lugarInsert.php");
        
        var parametros = "ciudad="+ciudad+"&estado="+estado+"&pais="+pais;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");


        peticion.onload = function(){
            var datos = JSON.parse(peticion.responseText);
            alert(datos);

            if(datos=="Lugar Registrado"){                
                document.getElementById("ciudad").value = "";
                document.getElementById("estado").value = "";
                document.getElementById("pais").value = "";                
            }
        }

        
        peticion.send(parametros);
    }


    
    function registrarEditorial(){
        var nombreEditorial = document.getElementById("nombreEditorial").value.toString();

        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/bd/editorialInsert.php");
        
        var parametros = "nombreEditorial="+nombreEditorial;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");



        peticion.onload = function(){
            var datos = JSON.parse(peticion.responseText);
            alert(datos);

            if(datos=="Editorial Registrado"){                
                document.getElementById("nombreEditorial").value = "";            
            }
        }

        
        peticion.send(parametros);

    }

    function registrarUbicacion(){
        var ubicacionEstante = document.getElementById("ubicacionEstante").value.toString();

        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/bd/ubicacionInsert.php");
        
        var parametros = "ubicacionEstante="+ubicacionEstante;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");


        peticion.onload = function(){
            var datos = JSON.parse(peticion.responseText);
            alert(datos);

            if(datos=="Ubicacion Registrada"){                
                document.getElementById("ubicacionEstante").value = "";            
            }
        }
        
        peticion.send(parametros);
    }


    function registrarColeccion(){
        var coleccion = document.getElementById("coleccion").value.toString();

        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/bd/coleccionInsert.php");
        var parametros = "coleccion="+coleccion;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");


        peticion.onload = function(){
            var datos = JSON.parse(peticion.responseText);
            alert(datos);

            if(datos=="Coleccion registrada"){                
                document.getElementById("coleccion").value = "";            
            }
        }



        
        peticion.send(parametros);
    }


    function registrarCoordinador(){
        var nombre1 = document.getElementById("nombre1Coordinador").value.toString();
        var nombre2 = document.getElementById("nombre2Coordinador").value.toString();
        var apellido1 = document.getElementById("apellido1Coordinador").value.toString();
        var apellido2 = document.getElementById("apellido2Coordinador").value.toString();
        
        var peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/bd/coordinadoresInsert.php");
        
        var parametros = "nombre1="+nombre1+"&nombre2="+nombre2+"&apellido1="+apellido1+"&apellido2="+apellido2;
        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");


        peticion.onload = function(){
            var datos = JSON.parse(peticion.responseText);
            alert(datos);
            
            if(datos=="Coordinador Registrado"){
                console.log("registra");
                document.getElementById("nombre1Coordinador").value = "";
                document.getElementById("nombre2Coordinador").value = "";
                document.getElementById("apellido1Coordinador").value = "";
                document.getElementById("apellido2Coordinador").value = "";
                
            }
            
        }
        
        
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
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/lugaresSelect.php");
        var select = document.getElementById("selectLugar");
        select.innerHTML = "";
        //select.innerHTML = "<option></option>";

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);

          
          
          
          select.innerHTML = "";
          
          
          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.value = datos[i].id;
            elemento.innerHTML += datos[i].pais+" ";                
            elemento.innerHTML += datos[i].estado+" ";
            elemento.innerHTML += datos[i].ciudad+" "; 
            select.appendChild(elemento);
          }
          
         //console.log(select);
          
    
        }

        peticion2.send();
    }


    function actualizarSelectPrueba3(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/selectEditoriales.php");
        //select.innerHTML = "<option></option>";
        var select = document.getElementById("selectEditorial");

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);

          
          
          
          select.innerHTML = "";
          
          
          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.value = datos[i].id;
            elemento.innerHTML += datos[i].nombreEditorial+" ";                
            
            select.appendChild(elemento);
          }
          
         console.log(select);
          
    
        }

        peticion2.send();
    }


    function actualizarSelectPrueba5(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/selectUbicacion.php");
       
        peticion2.onload = function(){
            var datos = JSON.parse(peticion2.responseText);
            var selects = document.querySelectorAll(".clasePadreUbicaciones");
            var nSelects = selects.length;
            var padre = document.getElementById("padreUbicaciones");    


            
            
            //Borro todos los selects

            var x = 0;
            while(x<=nSelects){
                
              
              var padre = document.getElementById("padreUbicaciones");        
              var selects = document.querySelectorAll(".clasePadreUbicaciones");
              var ultimoSelect = selects[selects.length-1];
              
      
              padre.removeChild(ultimoSelect);
               
               
              
              
  
  
              x++;
            } 


    
        }

        peticion2.send();
    }

    function actualizarSelectPrueba6(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/selectColeccion.php");
        //select.innerHTML = "<option></option>";
        var select = document.getElementById("selectColeccion");

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);

          
          
          
          select.innerHTML = "";
          
          
          for(var i=0;i<datos.length;i++){
            var elemento = document.createElement("option");
            elemento.value = datos[i].id;
            elemento.innerHTML += datos[i].nombre+" ";                
            
            select.appendChild(elemento);
          }
          
         //console.log(select);
          
    
        }

        peticion2.send();
    }


    
    function actualizarSelectPrueba4(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/selectEditoriales.php");    
        

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);
          var selects = document.querySelectorAll(".clasePadre5");
          var nSelects = selects.length;

          
          //Borro todos los selects
          
          var x = 0;
          while(x<nSelects){

            var padre = document.getElementById("padre5");        
            var parrafos = document.querySelectorAll("clasePadre5");
            var ultimoSelect = parrafos[parrafos.length-1];
            
    
            padre.removeChild(ultimoSelect);
          
            
            


            x++;
          } 

        }
          
        peticion2.send();

    }

    function actualizarSelect(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/selectAutoSres.php");
        //select.innerHTML = "<option></option>";
        var select = document.getElementById("selectAutor");
        

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


    function actualizarSelect2(){
        var peticion2 = new XMLHttpRequest();        
        peticion2.open("GET","http://localhost/base/proyecto/public/bd/selectAutores.php");
        //select.innerHTML = "<option></option>";
        select.innerHTML = "";

        peticion2.onload = function(){
          var datos = JSON.parse(peticion2.responseText);


          var padre = document.getElementById("padre5");        
          var selects = document.querySelectorAll("clasePadre5");
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


    function registrarLibro(){        
        var floatingInputTitulo = document.getElementById("floatingInputTitulo").value.toString();
        var selectLugar = document.getElementById("selectLugar").value;
        var selectEditorial = document.getElementById("selectEditorial").value.toString();
        var yearPublicacion = document.getElementById("yearPublicacion").value;
        var stock = document.getElementById("stock").value;
        //var selectUbicacionEstante = document.getElementById("selectUbicacionEstante").value;
        var costo = document.getElementById("costo").value;
        var selectColeccion = document.getElementById("selectColeccion").value;
        var observaciones = document.getElementById("observacionesTextArea").value.toString();
        var autores = document.getElementsByClassName("clasePadre");
        var nAutores = autores.length;
        var coordinadores = document.getElementsByClassName("clasePadre5");
        var nCoordinadores = coordinadores.length;
        var ubicacionesEstante = document.getElementsByClassName("clasePadreUbicaciones");
        var nUbicacionesEstante = ubicacionesEstante.length;

        
        if(floatingInputTitulo == "" || nAutores<1 || nCoordinadores<1 || nUbicacionesEstante<1){
            alert("Porfavor digita todos los campos");
            return false;
        }

        if(yearPublicacion == ""){
            yearPublicacion = -1;   
        }

        if(stock == ""){
            stock = -1;
        }

        if(costo == ""){
            costo = -1;
        }


        //AUTORES
        var selects = document.getElementsByClassName("clasePadre");
        var nSelects = selects.length;
        


        var x = 1;
        var arregloAutores = [];

        while(x<=nSelects){
            var id = "selectAutor"+x;
            var valor = document.getElementById(id).value.toString();
            arregloAutores.push(valor);
            x++;
        }

        console.log("autores"+arregloAutores);

        

        //COORDINADORES
        var selects = document.getElementsByClassName("clasePadre5");
        var nSelects = selects.length;
        //console.log(nSelects);
        
        var x = 1;
        var arregloCoordinadores = [];

        while(x<=nSelects){
            var id = "selectCoordinadores"+x;
            var valor = document.getElementById(id).value.toString();
            arregloCoordinadores.push(valor);
            x++;
        }

        
        console.log("coordinadores"+arregloCoordinadores);




        //UBICACIONES (ESTANTE)
        var selects = document.getElementsByClassName("clasePadreUbicaciones");
        var nSelects = selects.length;
        
        

        var x = 1;
        var arregloUbicaciones = [];

        while(x<=nSelects){
            var id = "selectUbicacionEstante"+x;
            var valor = document.getElementById(id).value.toString();
            arregloUbicaciones.push(valor);
            x++;
        }

        console.log("ubicaciones"+arregloUbicaciones);





        //ENVIAR DATOS PARA REGISTRAR LIBRO
        peticion = new XMLHttpRequest();
        peticion.open("POST","http://localhost/base/proyecto/public/bd/libroInsert.php");
        
        
        
        var parametros = "titulo="+floatingInputTitulo+"&costo="+costo+"&nEjemplares="+stock
                         +"&year="+yearPublicacion+"&lugar_id="+selectLugar+"&editorial_id="+selectEditorial
                         +"&coleccion_id="+selectColeccion+"&observaciones="+observaciones+"&arregloAutores="+arregloAutores
                         +"&arregloCoordinadores="+arregloCoordinadores+"&arregloUbicaciones="+arregloUbicaciones;
        
        
        console.log(parametros);

        peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        
        
        peticion.onload = function(){
            var respuesta = JSON.parse(peticion.responseText);
            alert(respuesta);
            //confirm(respuesta);
            if(respuesta=="Libro Registrado"){                
                document.getElementById("floatingInputTitulo").value = "";            
                document.getElementById("padre").innerHTML = "";
                document.getElementById("yearPublicacion").value = "";
                document.getElementById("stock").value = "";
                document.getElementById("padre5").innerHTML = "";
                document.getElementById("costo").value = "-";
                document.getElementById("padreUbicaciones").innerHTML = "";
                document.getElementById("observacionesTextArea").innerHTML = "SIN OBSERVACIONES";
                window.location = "http://www.mysite.com/books/create";
            }
        }
        
        


        peticion.send(parametros);

        
        

        
        
        
    }




























<?php 
require_once '../conexion/conexion.php';




$titulo = $_POST['titulo'];
$costo = $_POST['costo'];
$nEjemplares = $_POST['nEjemplares'];
$year = $_POST['year'];
$lugar_id = $_POST['lugar_id'];
$editorial_id = $_POST['editorial_id'];
$select_coleccion = $_POST['coleccion_id']; 
$observaciones = $_POST['observaciones'];
$arregloAutores = $_POST['arregloAutores'];
$arregloCoordinadores = $_POST['arregloCoordinadores'];
$arregloUbicaciones = $_POST['arregloUbicaciones'];



$conect = new Conexion();
$conexion = $conect->conectarse();





if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");    



    $sentencia = $conexion->prepare("INSERT INTO libros(titulo,year,costo,stock,observacion,editorial_id,lugar_id,coleccion_id) VALUES(?,?,?,?,?,?,?,?)");

    $sentencia->bind_param("sidisiii",$titulo,$year,$costo,$nEjemplares,$observaciones,$editorial_id,$lugar_id,$select_coleccion);
    $sentencia->execute();
    //echo json_encode("Libro registrado");

    $sentencia2 = $conexion->query("SELECT id FROM libros WHERE titulo LIKE '$titulo'");
    $idLibro = $sentencia2->fetch_row();
    //echo json_encode($idLibro);
    




    //Obtenemos los id de los autores que participaron en el libro
    $arregloAutores = explode(",",$arregloAutores);
    $size =  count($arregloAutores);
    $arregloAutoresEnviar = [];


    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->query("SELECT id FROM autores WHERE id = $arregloAutores[$i]");
        $id = $sentencia->fetch_row();
        array_push($arregloAutoresEnviar,$id);
    }


    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->prepare("INSERT INTO autores_libros(id,libro_id,autor_id) VALUES(NULL,?,?)");
        $autor_id = array_pop($arregloAutoresEnviar);

        $sentencia->bind_param("ii",$idLibro,$autor_id);
        $sentencia->execute();
    }
    
    


    //Obtenemos los id de los coordinadores que participaron en el libro
    $arregloCoordinadores = explode(",",$arregloCoordinadores);
    $size =  count($arregloCoordinadores);
    $arregloCoordinadoresEnviar = [];


    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->query("SELECT id FROM coordinadores WHERE id = $arregloCoordinadores[$i]");
        $id = $sentencia->fetch_row();
        array_push($arregloCoordinadoresEnviar,$id);
    }

    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->prepare("INSERT INTO coordinadores_libros(id,libro_id,coordinador_id) VALUES(NULL,?,?)");
        $coordinador_id = array_pop($arregloCoordinadoresEnviar);

        $sentencia->bind_param("ii",$idLibro,$coordinador_id);
        $sentencia->execute();
    }




    //Obtenemos los id de las ubicaciones que participaron en el libro
    $arregloUbicaciones = explode(",",$arregloUbicaciones);
    $size =  count($arregloUbicaciones);
    $arregloUbicacionesEnviar = [];


    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->query("SELECT id FROM ubicaciones WHERE id = $arregloUbicaciones[$i]");
        $id = $sentencia->fetch_row();
        array_push($arregloUbicacionesEnviar,$id);
    }

    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->prepare("INSERT INTO ubicaciones_libros(id,libro_id,ubicacion_id) VALUES(NULL,?,?)");
        $ubicacion_id = array_pop($arregloUbicacionesEnviar);

        $sentencia->bind_param("ii",$idLibro,$ubicacion_id);
        $sentencia->execute();
    }




    echo json_encode("Libro registrado");

    
}








?>


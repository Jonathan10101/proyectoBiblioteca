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
    $sentencia->close();
    //echo json_encode("Libro registrado");
    

    //Obtener el id del libro        
    $sentencia = $conexion->query("SELECT id FROM libros WHERE titulo LIKE '$titulo'");
    $id = $sentencia->fetch_row();
    $sentencia->close();
    

    $libro_id = (int)$id[0];
    



    //Obtenemos los id de los autores que participaron en el libro
    $arregloAutores = explode(",",$arregloAutores);
    $size = count($arregloAutores);       
    //$arregloLibros = [3,3];

    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->prepare("INSERT INTO autores_libros(libro_id,autor_id) VALUES(?,?)");        
        $autor_id = $arregloAutores[$i];

        $sentencia->bind_param("ii",$libro_id,$autor_id);
        $sentencia->execute();
    }
    




    //Obtenemos los id de los coordinadores que participaron en el libro
    $arregloCoordinadores = explode(",",$arregloCoordinadores);
    $size =  count($arregloCoordinadores);
  
    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->prepare("INSERT INTO coordinadores_libros(libro_id,coordinador_id) VALUES(?,?)");
        $coordinador_id = $arregloCoordinadores[$i];

        $sentencia->bind_param("ii",$libro_id,$coordinador_id);
        $sentencia->execute();
    }




    //Obtenemos los id de las ubicaciones que participaron en el libro
    $arregloUbicaciones = explode(",",$arregloUbicaciones);
    $size =  count($arregloUbicaciones);


    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->prepare("INSERT INTO ubicaciones_libros(libro_id,ubicacion_id) VALUES(?,?)");
        $ubicacion_id = $arregloUbicaciones[$i];

        $sentencia->bind_param("ii",$libro_id,$ubicacion_id);
        $sentencia->execute();
    }




    echo json_encode("Libro Registrado");


}








?>


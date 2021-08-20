<?php 
require_once '../conexion/conexion.php';
header('Access-Control-Allow-Origin: *');





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
$libro_id = $_POST['libro_id'];
$fondo = $_POST['fondo'];

$conect = new Conexion();
$conexion = $conect->conectarse();







if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");    



    //$sentencia = $conexion->prepare("INSERT INTO libros(titulo,year,costo,stock,observacion,editorial_id,lugar_id,coleccion_id) VALUES(?,?,?,?,?,?,?,?)");
    $sentencia = $conexion->prepare("UPDATE libros SET titulo = ?, year = ?, costo = ?, stock = ?, observacion = ?, editorial_id = ?, lugar_id = ?,coleccion_id = ?, fondo = ?  WHERE id = ?");

    $sentencia->bind_param("sidisiiiii",$titulo,$year,$costo,$nEjemplares,$observaciones,$editorial_id,$lugar_id,$select_coleccion,$fondo,$libro_id);
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

    $sentencia = $conexion->prepare("DELETE FROM autor_libro WHERE libro_id = ?");        
    $sentencia->bind_param("i",$libro_id);
    $sentencia->execute();

    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->prepare("INSERT INTO autor_libro(libro_id,autor_id) VALUES(?,?)");        
        $autor_id = $arregloAutores[$i];

        $sentencia->bind_param("ii",$libro_id,$autor_id);
        $sentencia->execute();
    }
    




    //Obtenemos los id de los coordinadores que participaron en el libro
    $arregloCoordinadores = explode(",",$arregloCoordinadores);
    $size =  count($arregloCoordinadores);

    $sentencia = $conexion->prepare("DELETE FROM coordinador_libro WHERE libro_id = ?");        
    $sentencia->bind_param("i",$libro_id);
    $sentencia->execute();
  
    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->prepare("INSERT INTO coordinador_libro(libro_id,coordinador_id) VALUES(?,?)");
        $coordinador_id = $arregloCoordinadores[$i];

        $sentencia->bind_param("ii",$libro_id,$coordinador_id);
        $sentencia->execute();
    }




    //Obtenemos los id de las ubicaciones que participaron en el libro
    $arregloUbicaciones = explode(",",$arregloUbicaciones);
    $size =  count($arregloUbicaciones);

    $sentencia = $conexion->prepare("DELETE FROM libro_ubicacion WHERE libro_id = ?");        
    $sentencia->bind_param("i",$libro_id);
    $sentencia->execute();

    for($i=0;$i<$size;$i++){        
        $sentencia = $conexion->prepare("INSERT INTO libro_ubicacion(libro_id,ubicacion_id) VALUES(?,?)");
        $ubicacion_id = $arregloUbicaciones[$i];

        $sentencia->bind_param("ii",$libro_id,$ubicacion_id);
        $sentencia->execute();
    }




    echo json_encode("Libro Actualizado");
    


}








?>


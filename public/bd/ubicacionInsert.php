<?php 

require_once '../conexion/conexion.php';

$conect = new Conexion();
$conexion = $conect->conectarse();



$ubicacionEstante = $_POST['ubicacionEstante'];






if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{

    if($ubicacionEstante == ""){    
        echo json_encode("El campo Ubicacion estante es obligatorio, si no tienes datos del lugar de publicacion puedes elegir la opcion SIN ESTANTE");
    }else{
        $conexion->set_charset("utf8");
        $sentencia = $conexion->prepare("INSERT INTO ubicaciones(estante) VALUES(?)");
        $sentencia->bind_param("s",$ubicacionEstante);
        $sentencia->execute();
        echo json_encode("Ubicacion Registrada");
    }
}











?>
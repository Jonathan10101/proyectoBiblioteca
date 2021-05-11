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
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO ubicaciones(estante) VALUES(?)");
    $sentencia->bind_param("s",$ubicacionEstante);
    $sentencia->execute();
    echo "Ubicacion de estante registrada";
}











?>
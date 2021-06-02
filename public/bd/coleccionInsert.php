<?php 
require_once '../conexion/conexion.php';
header('Access-Control-Allow-Origin: *');


$coleccion = $_POST['coleccion'];


$conect = new Conexion();
$conexion = $conect->conectarse();





$conexion = new mysqli("localhost","root","","basedatoshistoricoconmigraciones");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{

    if($coleccion==""){
        echo json_encode("El campo coleccion es obligatorio, si no tienes datos del autor puedes elegir la opcion SIN COLECCION");
    }else{
        $conexion->set_charset("utf8");
        $sentencia = $conexion->prepare("INSERT INTO colecciones(nombre) VALUES(?)");
        $sentencia->bind_param("s",$coleccion);
        $sentencia->execute();
        echo json_encode("Coleccion registrada");
    }
}











?>
<?php 
require_once '../conexion/conexion.php';



$coleccion = $_POST['coleccion'];


$conect = new Conexion();
$conexion = $conect->conectarse();





$conexion = new mysqli("localhost","root","","basedatoshistoricoconmigraciones");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO coleccion(nombre) VALUES(?)");
    $sentencia->bind_param("s",$coleccion);
    $sentencia->execute();
    echo json_encode("coleccion registrada");
}











?>
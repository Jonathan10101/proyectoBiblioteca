<?php 
require_once '../conexion/conexion.php';



$nombreEditorial = $_POST['nombreEditorial'];




$conect = new Conexion();
$conexion = $conect->conectarse();



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO editoriales(nombre) VALUES(?)");
    $sentencia->bind_param("s",$nombreEditorial);
    $sentencia->execute();
    echo "Editorial registrado";
}











?>
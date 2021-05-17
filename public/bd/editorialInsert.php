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
    
    if($nombreEditorial==""){
        echo json_encode("El campo Editorial es obligatorio, si no tienes datos puedes elegir la opcion SIN EDITORIAL");
    }else{
        $conexion->set_charset("utf8");
        $sentencia = $conexion->prepare("INSERT INTO editoriales(nombre) VALUES(?)");
        $sentencia->bind_param("s",$nombreEditorial);
        $sentencia->execute();
    
        echo json_encode("Editorial Registrado");
    }
}











?>
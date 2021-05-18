<?php 
require_once '../conexion/conexion.php';



$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];



$conect = new Conexion();
$conexion = $conect->conectarse();



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{


    if($ciudad==""){
        echo json_encode("El campo Ciudad es obligatorio, si no tienes datos del lugar de publicacion puedes elegir la opcion SIN LUGAR");
    }else{
        $conexion->set_charset("utf8");
        $sentencia = $conexion->prepare("INSERT INTO lugares(pais,estado,ciudad) VALUES(?,?,?)");
        $sentencia->bind_param("sss",$pais,$estado,$ciudad);
        $sentencia->execute();
        echo json_encode("Lugar Registrado");
    }
}











?>
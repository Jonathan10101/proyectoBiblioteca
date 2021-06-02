<?php 
require_once '../conexion/conexion.php';
header('Access-Control-Allow-Origin: *');

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];


$conect = new Conexion();
$conexion = $conect->conectarse();



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{

    if($nombre1==""){
        echo json_encode("El campo nombre es obligatorio, si no tienes datos del autor puedes elegir la opcion SIN AUTOR");
    }else{
        $conexion->set_charset("utf8");

        //$completo = $nombre1+$nombre2+$apellido1+$apellido2;
        


        $sentencia = $conexion->prepare("INSERT INTO autores(nombre1,nombre2,apellido1,apellido2) VALUES(?,?,?,?)");
        $sentencia->bind_param("ssss",$nombre1,$nombre2,$apellido1,$apellido2);
        $sentencia->execute();
        
        echo json_encode("Autor Registrado");
    }


    
}




?>

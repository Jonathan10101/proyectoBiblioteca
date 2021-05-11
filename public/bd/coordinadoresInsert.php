<?php 
require_once '../conexion/conexion.php';



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
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO coordinadores(nombre1,nombre2,apellido1,apellido2) VALUES(?,?,?,?)");
    $sentencia->bind_param("ssss",$nombre1,$nombre2,$apellido1,$apellido2);
    $sentencia->execute();
    echo "Coordinador registrado";
}



?>

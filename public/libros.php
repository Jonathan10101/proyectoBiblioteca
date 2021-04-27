<?php 



$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];



$conexion = new mysqli("localhost","root","","basedatoshistorico");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO autores(nombre1,nombre2,apellido1,apellido2) VALUES(?,?,?,?)");
    $sentencia->bind_param("ssss",$nombre1,$nombre2,$apellido1,$apellido2);
    $sentencia->execute();
    echo "Autor registrado";
}



?>

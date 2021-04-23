<?php 



$primerNombre = $_POST['primerNombre'];
$segundoNombre = $_POST['segundoNombre'];
$primerApellido = $_POST['primerApellido'];
$segundoApellido = $_POST['segundoApellido'];



$conexion = new mysqli("localhost","root","","basededatoshistorico");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO autores(nombre,primerApellido,segundoApellido) VALUES(?,?,?)");
    $sentencia->bind_param("sss",$primerNombre,$primerApellido,$segundoApellido);
    $sentencia->execute();
    echo "Autor registrado";
}



?>

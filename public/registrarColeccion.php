<?php 




$coleccion = $_POST['coleccion'];





$conexion = new mysqli("localhost","root","","basedatoshistorico");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO coleccion(nombre) VALUES(?)");
    $sentencia->bind_param("s",$coleccion);
    $sentencia->execute();
    echo "Coleccion registrada";
}











?>
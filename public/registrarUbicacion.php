<?php 




$ubicacionEstante = $_POST['ubicacionEstante'];





$conexion = new mysqli("localhost","root","","basedatoshistorico");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO ubicaciones(ubicacion) VALUES(?)");
    $sentencia->bind_param("s",$ubicacionEstante);
    $sentencia->execute();
    echo "Ubicacion de estante registrada";
}











?>
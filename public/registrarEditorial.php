<?php 




$nombreEditorial = $_POST['nombreEditorial'];





$conexion = new mysqli("localhost","root","","basedatoshistorico");



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
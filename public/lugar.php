<?php 




$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];




$conexion = new mysqli("localhost","root","","basedatoshistorico");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO lugares(pais,estado,ciudad) VALUES(?,?,?)");
    $sentencia->bind_param("sss",$pais,$estado,$ciudad);
    $sentencia->execute();
    echo "Lugar registrado";
}











?>
<?php 
require_once '../conexion/conexion.php';

$conect = new Conexion();
$conexion = $conect->conectarse();



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("SELECT * FROM autores");
    $sentencia->execute();
    $resultados = $sentencia->get_result();

    $respuesta = [];
    
    while($fila = $resultados->fetch_assoc()){
        $autor = [
            "id" => $fila["id"],
            "nombre1" => $fila["nombre1"],
            "nombre2" => $fila["nombre2"],
            "apellido1" => $fila["apellido1"],
            "apellido2" => $fila["apellido2"]
        ];
        array_push($respuesta,$autor);
    }
    echo json_encode($respuesta);
}
















?>
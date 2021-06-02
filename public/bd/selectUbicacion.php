<?php 

require_once '../conexion/conexion.php';
header('Access-Control-Allow-Origin: *');

$conect = new Conexion();
$conexion = $conect->conectarse();




if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("SELECT * FROM ubicaciones");
    $sentencia->execute();
    $resultados = $sentencia->get_result();

    $respuesta = [];
    
    while($fila = $resultados->fetch_assoc()){
        $ubicaciones = [
            "id" => $fila["id"],
            "estante" => $fila["estante"]
        ];
        array_push($respuesta,$ubicaciones);
    }
    echo json_encode($respuesta);
}
















?>
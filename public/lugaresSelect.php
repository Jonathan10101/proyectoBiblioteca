<?php 



$conexion = new mysqli("localhost","root","","basedatoshistorico");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("SELECT * FROM lugares");
    $sentencia->execute();
    $resultados = $sentencia->get_result();

    $respuesta = [];
    
    while($fila = $resultados->fetch_assoc()){
        $lugares = [
            "id" => $fila["id"],
            "pais" => $fila["pais"],
            "estado" => $fila["estado"],
            "ciudad" => $fila["ciudad"]
        ];
        array_push($respuesta,$lugares);
    }
    echo json_encode($respuesta);
}
















?>
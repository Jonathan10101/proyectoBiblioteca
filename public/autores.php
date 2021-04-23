<?php 



$conexion = new mysqli("localhost","root","","basededatoshistorico");



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
            "nombre" => $fila["nombre"],
            "primerApellido" => $fila["primerApellido"],
            "segundoApellido" => $fila["segundoApellido"]
        ];
        array_push($respuesta,$autor);
    }
    echo json_encode($respuesta);
}
















?>
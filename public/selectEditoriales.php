<?php 



$conexion = new mysqli("localhost","root","","basedatoshistorico");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("SELECT * FROM editoriales");
    $sentencia->execute();
    $resultados = $sentencia->get_result();

    $respuesta = [];
    
    while($fila = $resultados->fetch_assoc()){
        $editorial = [
            "id" => $fila["id"],
            "nombreEditorial" => $fila["nombre"]
        ];
        array_push($respuesta,$editorial);
    }
    echo json_encode($respuesta);
}
















?>
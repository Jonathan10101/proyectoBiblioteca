<?php 
require_once '../conexion/conexion.php';
header('Access-Control-Allow-Origin: *');


$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];



$conect = new Conexion();
$conexion = $conect->conectarse();



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{


    if($ciudad==""){
        echo json_encode("El campo Ciudad es obligatorio, si no tienes datos del lugar de publicacion puedes elegir la opcion SIN LUGAR");
    }else{
        $conexion->set_charset("utf8");
        $buscarLugar = "SELECT * from lugares WHERE ciudad = '$ciudad' AND estado = '$estado' AND pais = '$pais'";
        
        $resultado = $conexion->query($buscarLugar);
        $contador = mysqli_num_rows($resultado);
        
        if($contador >= 1) {           
           echo json_encode("!EL LUGAR QUE QUIERES REGISTRAR YA EXISTE!");
        } else {
            $sentencia = $conexion->prepare("INSERT INTO lugares(ciudad,estado,pais) VALUES(?,?,?)");
            $sentencia->bind_param("sss",$ciudad,$estado,$pais);
            $sentencia->execute();
    
            echo json_encode("Lugar Registrado");
        }



/*
        $conexion->set_charset("utf8");
        $sentencia = $conexion->prepare("INSERT INTO lugares(pais,estado,ciudad) VALUES(?,?,?)");
        $sentencia->bind_param("sss",$pais,$estado,$ciudad);
        $sentencia->execute();
        echo json_encode("Lugar Registrado");
*/


    }
}











?>
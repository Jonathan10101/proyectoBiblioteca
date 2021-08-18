<?php 
require_once '../conexion/conexion.php';
//require_once '../conexion/conexionBuscarRepetidos.php';
header('Access-Control-Allow-Origin: *');

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];


$conect = new Conexion();
$conexion = $conect->conectarse();



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{

    if($nombre1==""){
        echo json_encode("El campo nombre es obligatorio, si no tienes datos del autor puedes elegir la opcion SIN AUTOR");
    }else{                        
        $conexion->set_charset("utf8");

        $buscarAutor = "SELECT * from autores WHERE nombre1 = '$nombre1' AND nombre2 = '$nombre2' AND apellido1 = '$apellido1' AND apellido2 = '$apellido2'";
        
        $resultado = $conexion->query($buscarAutor);
        $contador = mysqli_num_rows($resultado);
        
        if($contador >= 1) {           
           echo json_encode("!EL AUTOR QUE QUIERES REGISTRAR YA EXISTE!");
        } else {
            $sentencia = $conexion->prepare("INSERT INTO autores(nombre1,nombre2,apellido1,apellido2) VALUES(?,?,?,?)");
            $sentencia->bind_param("ssss",$nombre1,$nombre2,$apellido1,$apellido2);
            $sentencia->execute();
    
            echo json_encode("Autor Registrado");
        }


    }


    
}




?>

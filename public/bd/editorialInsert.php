<?php 
require_once '../conexion/conexion.php';
header('Access-Control-Allow-Origin: *');


$nombreEditorial = $_POST['nombreEditorial'];




$conect = new Conexion();
$conexion = $conect->conectarse();



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    
    if($nombreEditorial==""){
        echo json_encode("El campo Editorial es obligatorio, si no tienes datos puedes elegir la opcion SIN EDITORIAL");
    }else{
        $conexion->set_charset("utf8");
        $buscarEditorial = "SELECT * from editoriales WHERE nombre = '$nombreEditorial'";
        
        $resultado = $conexion->query($buscarEditorial);
        $contador = mysqli_num_rows($resultado);
        
        if($contador >= 1) {           
           echo json_encode("!LA EDITORIAL QUE QUIERES REGISTRAR YA EXISTE!");
        } else {
            $sentencia = $conexion->prepare("INSERT INTO editoriales(nombre) VALUES(?)");
            $sentencia->bind_param("s",$nombreEditorial);
            $sentencia->execute();
    
            echo json_encode("Editorial Registrado");
        }




/*        
        $conexion->set_charset("utf8");
        $sentencia = $conexion->prepare("INSERT INTO editoriales(nombre) VALUES(?)");
        $sentencia->bind_param("s",$nombreEditorial);
        $sentencia->execute();
    
        echo json_encode("Editorial Registrado");
*/        
    }
}











?>
<?php 

require_once '../conexion/conexion.php';
header('Access-Control-Allow-Origin: *');

$conect = new Conexion();
$conexion = $conect->conectarse();



$ubicacionEstante = $_POST['ubicacionEstante'];






if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{

    if($ubicacionEstante == ""){    
        echo json_encode("El campo Ubicacion estante es obligatorio, si no tienes datos del lugar de publicacion puedes elegir la opcion SIN ESTANTE");
    }else{

        $conexion->set_charset("utf8");

        if (!is_numeric($ubicacionEstante)) {
            echo json_encode("POR FAVOR DIGITA SOLAMENTE NUMEROS");
        }else{

            $buscarEstante = "SELECT * from ubicaciones WHERE estante = '$ubicacionEstante'";
        
            $resultado = $conexion->query($buscarEstante);
            $contador = mysqli_num_rows($resultado);
        
            if($contador >= 1) {           
                echo json_encode("!EL LUGAR DE ESTANTE QUE QUIERES REGISTRAR YA EXISTE!");
            } else {
                $sentencia = $conexion->prepare("INSERT INTO ubicaciones(estante) VALUES(?)");
                $sentencia->bind_param("s",$ubicacionEstante);
                $sentencia->execute();    
                echo json_encode("Ubicacion de Estante Registrada");
            }
        }            


/*        
        $conexion->set_charset("utf8");
        $sentencia = $conexion->prepare("INSERT INTO ubicaciones(estante) VALUES(?)");
        $sentencia->bind_param("s",$ubicacionEstante);
        $sentencia->execute();
        echo json_encode("Ubicacion Registrada");
*/
    }
}











?>
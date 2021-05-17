<?php 
require_once '../conexion/conexion.php';



$titulo = $_POST['titulo'];
$costo = $_POST['costo'];
$nEjemplares = $_POST['nEjemplares'];
$year = $_POST['year'];
$lugar_id = $_POST['lugar_id'];
$editorial_id = $_POST['editorial_id'];
$select_coleccion = $_POST['coleccion_id']; 
$observaciones = $_POST['observaciones'];




$conect = new Conexion();
$conexion = $conect->conectarse();





if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    
    
    if($titulo == "" || $costo == 0 || $nEjemplares == 0 || $year == 0 || $lugar_id < 0 || $editorial_id < 0 || $select_coleccion < 0){
        echo json_encode("Por favor digita todos los datos");
    }else{
    
        $conexion->set_charset("utf8");    
    
        $sentencia = $conexion->prepare("INSERT INTO libros(titulo,year,costo,stock,observacion,editorial_id,lugar_id,coleccion_id) VALUES(?,?,?,?,?,?,?,?)");

        $sentencia->bind_param("sidisiii",$titulo,$year,$costo,$nEjemplares,$observaciones,$editorial_id,$lugar_id,$select_coleccion);
        $sentencia->execute();
        echo json_encode("Libro registrado");
    }

    
}








?>

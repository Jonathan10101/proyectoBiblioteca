<?php 




$titulo = $_POST['titulo'];
$costo = $_POST['costo'];
$nEjemplares = $_POST['nEjemplares'];
$year = $_POST['year'];
$lugar_id = $_POST['lugar_id'];
$editorial_id = $_POST['editorial_id'];
$select_coleccion = $_POST['coleccion_id']; 
$observaciones = $_POST['observaciones'];




$conexion = new mysqli("localhost","root","","basedatoshistorico");





if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    
    
    
    
    $conexion->set_charset("utf8");
    
    
    
    $sentencia = $conexion->prepare("INSERT INTO libros(titulo,costo,nEjemplares,year,lugar_id,editorial_id,coleccion_id,observacion) VALUES(?,?,?,?,?,?,?,?)");
    //echo json_encode("d");
    

    $sentencia->bind_param("sdiiiiis",$titulo,$costo,$nEjemplares,$year,$lugar_id,$editorial_id,$select_coleccion,$observaciones);
    $sentencia->execute();
    echo json_encode("Libro registrado");
    

    
}








?>

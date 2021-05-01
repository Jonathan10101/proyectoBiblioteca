<?php 









$titulo = $_POST['titulo'];
$costo = $_POST['costo'];
$nEjemplares = $_POST['nEjemplares'];
$year = $_POST['year'];
$selectLugar = $_POST['lugar_id'];
$editorial_id = $_POST['editorial_id'];
$selectColeccion = $_POST['coleccion_id']; 
$observaciones = $_POST['observaciones'];



//echo json_encode($observaciones);


$conexion = new mysqli("localhost","root","","basedatoshistorico");



if($conexion->connect_errno){
    $respuesta = [
        "error"=>true
    ];
}else{
    $conexion->set_charset("utf8");
    $sentencia = $conexion->prepare("INSERT INTO libros(titulo,costo,nEjemplares,years,lugar_id,editorial_id,coleccion_id,observacion) VALUES(?,?,?,?,?,?,?,?)");
    $sentencia->bind_param("sdiiiiis",$titulo,$costo,$nEjemplares,$year,$selectLugar,$editorial_id,$selectColeccion,$observaciones);
    $sentencia->execute();
    echo json_encode("Libro registrado");
}




?>

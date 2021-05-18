<?php 




class Conexion{

    public function __construct(){

    }

    function conectarse(){
        $conexion = new PDO('mysql:host=localhost;dbname=basedatoshistoricoconmigraciones','root',' ');
        return $conexion;
    }


}

?>
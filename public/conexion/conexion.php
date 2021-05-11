<?php 




class Conexion{

    public function __construct(){

    }

    function conectarse(){
        $conexion = new mysqli("localhost","root","","basedatoshistoricoconmigraciones");
        return $conexion;
    }


}

?>
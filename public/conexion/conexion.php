<?php 




class Conexion{

    public function __construct(){

    }

    function conectarse(){
        //$conexion = new mysqli("localhost","superofi_wp335","JBHjhon13","superofi_basedatoshistoricoconmigraciones");
        $conexion = new mysqli("localhost","root","","basedatoshistoricoconmigraciones");
        return $conexion;
    }


}

?>
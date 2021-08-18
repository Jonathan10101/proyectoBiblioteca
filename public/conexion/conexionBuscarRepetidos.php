<?php 




class Conexion{

    public function __construct(){

    }

    function conectarse(){
        //$conexion = new mysqli("localhost","superofi_wp335","JBHjhon13","superofi_basedatoshistoricoconmigraciones");
        $conexion = new PDO('mysql:host=localhost;basedatoshistoricoconmigraciones', 'root','');
        return $conexion;
    }


}

?>
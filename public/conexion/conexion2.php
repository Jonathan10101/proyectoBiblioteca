<?php 




class Conexion2{

    public function __construct(){

    }

    function conectarse(){
        //$conexion = new PDO('mysql:host=localhost;dbname=superofi_basedatoshistoricoconmigraciones','superofi_wp335','JBHjhon13');
        $conexion = new mysqli("localhost","root","","basedatoshistoricoconmigraciones");
        return $conexion;
    }


}

?>
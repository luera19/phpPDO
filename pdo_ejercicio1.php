<?php
    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";

    //CONEXION PDO
    try{
        $conexion = new PDO("mysql:host=$servidor",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo ("Conexión Establecida");

    }catch(PDOException $error){
        echo "Error\n" . $error->getMessage();
        
    }

?>



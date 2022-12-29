<?php

    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";
    $dbname = "pdo_dev";

    try{
        $conexion = new PDO("mysql:host=$servidor; dbname=$dbname",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //oBTENER UN PROCEDIMIENTO ALMACENADO
        $sentencia = $conexion -> prepare("CALL obtenerNombre()");
        $sentencia ->execute();

        //Recuperando los datos de la tabla
        $resultado=($sentencia->fetchAll());
        
        print_r($resultado);


    }catch(PDOException $error){
        echo "Error\n" . $error->getMessage();
        
    }
    
        
?>



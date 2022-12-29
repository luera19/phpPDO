<?php

    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";
    $dbname = "pdo_dev";

    try{
        $conexion = new PDO("mysql:host=$servidor; dbname=$dbname",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //SQL DELETE
        $sentencia = $conexion -> prepare("DELETE FROM alumnos WHERE id>5");
        $sentencia ->execute();

        echo ("Registros eliminados");
        

    }catch(PDOException $error){
        echo "Error\n" . $error->getMessage();
        
    }
    
        
        

        
?>



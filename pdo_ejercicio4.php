<?php

    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";
    $dbname = "pdo_dev";

    try{
        $conexion = new PDO("mysql:host=$servidor; dbname=$dbname",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo ("Conexión Establecida\n");

    }catch(PDOException $error){
        echo "Error\n" . $error->getMessage();
        
    }
    
        //SQL INSERT
        $sql = "INSERT INTO alumnos(id, nombre, correo) VALUES
                (NULL, 'luis ramirez','luis@gmail.com')";
        //

        $conexion ->exec($sql);
        echo ("Datos ingresados Correctamente");

?>



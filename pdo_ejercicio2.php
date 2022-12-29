<?php
    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";

    try{
        $conexion = new PDO("mysql:host=$servidor",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo ("Conexión Establecida");

    }catch(PDOException $error){
        echo "Error\n" . $error->getMessage();
        
    }
        //CREATE DATABASE
        $sql = "CREATE DATABASE pdo_dev";
        $conexion ->exec($sql);

        echo ("Base de datos creada");

?>



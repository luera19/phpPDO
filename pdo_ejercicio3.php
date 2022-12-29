<?php
    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";
    $dbname = "pdo_dev";

    try{
        $conexion = new PDO("mysql:host=$servidor; dbname=$dbname",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo ("Conexión Establecida");

    }catch(PDOException $error){
        echo "Error\n" . $error->getMessage();
        
    }
        //SQL CREATE TABLE
        $sql = "CREATE TABLE alumnos(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(30) NOT NULL,
                correo VARCHAR(50)
        )";

        $conexion ->exec($sql);
        echo ("Tabla creada");

?>



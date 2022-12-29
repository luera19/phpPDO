<?php

    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";
    $dbname = "pdo_dev";

    try{
        $conexion = new PDO("mysql:host=$servidor; dbname=$dbname",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo ("Conexión Establecida\n");

        $conexion->beginTransaction();
        //SQL 
                $sql = "INSERT INTO alumnos(id, nombre, correo) VALUES
                (NULL, 'luis ramirez','luis@gmail.com')";
                $conexion ->exec($sql);
        
                $sql = "INSERT INTO alumnos(id, nombre, correo) VALUES
                (NULL, 'Maria Perez','maria@gmail.com')";
                $conexion ->exec($sql);
        
                $sql = "INSERT INTO alumnos(id, nombre, correo) VALUES
                (NULL, 'jose ramirez','jose@gmail.com')";
                $conexion ->exec($sql);
        //
        $conexion->commit();

    }catch(PDOException $error){
        $conexion->rollBack();
        echo "Error\n" . $error->getMessage();
        
    }
    
        
        

        //LAST ID INSERTADO
        echo ("Datos ingresados Correctamente");

?>



<?php

    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";
    $dbname = "pdo_dev";

    try{
        $conexion = new PDO("mysql:host=$servidor; dbname=$dbname",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //INSERT Multiples con Prepare
        $sentencia = $conexion ->prepare("INSERT INTO alumnos (id, nombre, correo)
        VALUES (NULL,:nombre,:correo);
        ");
        
        
            $sentencia ->bindParam(":nombre",$nombre);
            $sentencia ->bindParam(":correo",$correo);

                $nombre="Luis";
                $correo="luis@gmail.com";
                $sentencia ->execute();

                $nombre="Luis1";
                $correo="luis1@gmail.com";
                $sentencia ->execute();

                $nombre="Luis2";
                $correo="luis2@gmail.com";
                $sentencia ->execute();

    }catch(PDOException $error){
        echo "Error\n" . $error->getMessage();
        
    }
    
        
        

        
?>



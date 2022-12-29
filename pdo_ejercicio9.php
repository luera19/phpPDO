<?php

    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";
    $dbname = "pdo_dev";

    try{
        $conexion = new PDO("mysql:host=$servidor; dbname=$dbname",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //SQL SELECT con WHERE (Busqueda especifica)
        //$sentencia = $conexion -> prepare("SELECT *FROM alumnos WHERE nombre = 'Luis'");
        //$sentencia = $conexion -> prepare("SELECT *FROM alumnos WHERE correo = 'luis@gmail.com'");
        //$sentencia = $conexion -> prepare("SELECT *FROM alumnos WHERE id <= 5");
        $sentencia = $conexion -> prepare("SELECT *FROM alumnos WHERE id=5");
                
        
        $sentencia ->execute();

            $resultado =$sentencia ->setFetchMode(PDO::FETCH_ASSOC);
            
            //Recuperando los datos de la tabla
            $resultado=($sentencia->fetchAll());
            
            //Recorremos los datos
            foreach($resultado as $registro){
                echo    "id: " . $registro['id'] . 
                        "nombre:" . $registro['nombre'] .
                        "correo:" . $registro['correo'] .
                        "<br>";
            }



    }catch(PDOException $error){
        echo "Error\n" . $error->getMessage();
        
    }
    
        
        

        
?>



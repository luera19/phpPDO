<?php
    $servidor   ="localhost";
    $usuario    = "root";
    $password   = "";
    $dbname = "pdo_dev";

    try{
        $conexion = new PDO("mysql:host=$servidor; dbname=$dbname",$usuario,$password);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if($_POST){
                /* print_r($_POST);
                $tarea=$_POST['tarea']; */

                //SQL
                $sentencia =$conexion ->prepare("INSERT INTO tareas(id,tarea) VALUES (NULL,:tarea)");
                $sentencia ->bindParam(':tarea',$tarea);
                $tarea=$_POST['tarea'];
                $sentencia->execute();

                echo "Registro Agregado <br/>";

                //REDIRECCIONAMIENTO    
                header("Location:?");
            }

            if($_GET){
                /* print_r($_GET);
                $id=$_GET['id']; */

                //SQL
                $sentencia =$conexion ->prepare("DELETE FROM tareas WHERE id=:id");
                $sentencia ->bindParam(':id',$id);
                $id=$_GET['id'];
                $sentencia->execute();

                echo "Registro Eliminado <br/>";

                //REDIRECCIONAMIENTO    
                header("Location:?");
            }

            $sentencia = $conexion ->prepare("SELECT * FROM tareas");
            $sentencia ->execute();
            $resultado = $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $datos = $sentencia -> fetchAll();

    }catch(PDOException $error){
        echo "Error\n" . $error->getMessage();
        
    }
        

?>
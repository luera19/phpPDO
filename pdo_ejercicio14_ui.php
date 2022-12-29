<?php
    include "pdo_ejercicio14.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!--FORMULARIO-->

    <form action = "" method="POST">
        Nombre de la tarea:
        <input type="text" name="tarea" id="tarea">
        <br/>
        <input type="submit" value="Agregar">
    </form>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Tarea</th>
                <th>Acción</th>
            </tr>
        </thead>
        
        <?php foreach($datos as $dato){ ?>
            <tr>
                <td><?= $dato ['id'];?></td>
                <td><?= $dato ['tarea'];?></td>
                <td><a href="?id=<?= $dato ['id'];?>">[BORRAR]</a></td>
            </tr>
    
        <?php
        } ?>
        
    </table>

</body>
</html>


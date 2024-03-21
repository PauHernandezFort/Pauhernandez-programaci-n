<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<table class="greenTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>título</th>
            <th>Vencimiento</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="5">
                &nbsp;
            </td>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <?php
             require_once "autoloader.php";
 
             $preuba = new Modelo;
            $mostar= $preuba-> showAllTask();
            echo"$mostar";
            ?>
        </tr>
    </tbody>
</table>

</body>
</html>

<?php
$id = $_GET['id'];
require_once "autoloader.php";
$prueba = new Conexion;
$array = [];
$con = $prueba->getConn();
$query= "SELECT * FROM `tareas` WHERE `id` = $id";
$result = mysqli_query($con,$query);
$result->data_seek(1);
array_push($array, $result->fetch_array(MYSQLI_ASSOC));
foreach ($array as $info){
    $titulo = $info['titulo'];
    $descripcion = $info['descripcion'];
    $fechaCreacion = $info['fecha_creacion'];
    $fechaVencimiento = $info['fecha_vencimiento'];


}

$mostar="<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Detalles de la Tarea</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .task-details {
            margin-top: 20px;
        }
        .task-details p {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class='container'>
    <a href='lista.php'>Volver a la página principal</a>

        <h1>Detalles de la Tarea</h1>
        <div class='task-details'>
            <p><span class='label'>Título:</span> $titulo</p>
            <p><span class='label'>Descripción:</span> $descripcion</p>
            <p><span class='label'>Fecha de Creación:</span> $fechaCreacion></p>
            <p><span class='label'>Fecha de Vencimiento:</span>  $fechaVencimiento></p>
        </div>
    </div>
</body>
</html>";
echo $mostar;
?>
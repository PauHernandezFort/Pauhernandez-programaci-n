<?php

class Gestion extends Conexion{
    public function __construct()
    {
        $this->fichero = 'costumers.csv';
        parent::__construct();
    }

public function getBrands(){
    $conn = $this->getConn();
    $query="SELECT `brandId`,`brandName`FROM `brands` ";
    $result = mysqli_query($conn, $query);
    $mostrar = "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.'>
        <title>Document</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            h1 {
                text-align: center;
                margin-bottom: 20px;
            }
            form {
                padding: 20px 0;
            }
            label {
                display: block;
                margin-bottom: 10px;
            }
            input[type='checkbox'] {
                margin-right: 10px;
            }
            input[type='submit'] {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }
            input[type='submit']:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Seleccione las Marcas</h1>
            <form action='clientes.php' method='post'>";
    $conn = $this->getConn();
    $query = "SELECT `brandId`,`brandName` FROM `brands` ";
    $result = mysqli_query($conn, $query);
    if($result){
        while ($brand = $result->fetch_assoc()) {
            $brandId = $brand["brandId"];
            $brandName = $brand["brandName"];
            $mostrar .= "<label><input type='checkbox' value='$brandId' name='brands[]'> $brandName</label>";
        }
        $mostrar .= "<input type='submit' value='Seleccionar'>
        </form>
        </div>
    </body>
    </html>";
    }
        echo $mostrar;
    }

  }
?>
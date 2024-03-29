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
    $mostar ="<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.'>
        <title>Document</title>
        </head>
        <body>
        <form action='clientes.php' method='post'>";
    if($result){
        while ($brand = $result->fetch_assoc()) {
            $brandId = $brand['brandId'];
            $brandName = $brand['brandName'];
            $mostar.= " <input type='checkbox' value='$brandId' name='brands[]'> $brandName<br>";
            }
            $mostar.="  <input type='submit' value='Seleccionar'>
            </form>
        </body>
        </html>";
        }
        echo $mostar;
    }

  }
?>
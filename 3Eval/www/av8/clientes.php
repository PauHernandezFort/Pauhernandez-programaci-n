<?php
 require_once "autoloader.php";
$brands = $_POST['brands'];
$conexion = new Conexion;
$conn = $conexion->getConn();
$customers=[];
foreach($brands as $brand){
        $query = "SELECT `customerId`  FROM `brandCustomer` where `brandId` = $brand";
        $result = mysqli_query($conn, $query);
        $result->data_seek(0);
        while ($fila = mysqli_fetch_assoc($result)) {
            $customers[] = $fila;

        }
        }
        $infoCustoemer=[];
        foreach($customers as $customer){
            foreach($customer as $id)
            $query = "SELECT *  FROM `customers` where `customerId` = '$id'";
            $result = mysqli_query($conn, $query);
            $result->data_seek(0);
            while ($fila = mysqli_fetch_assoc($result)) {
                $infoCustoemer[] = $fila;
    
            }
            }
            echo "<table border='1'>";
            echo "<tr><th>Customer ID</th><th>Nombre</th></tr>";
            foreach($infoCustoemer as $idName){
                echo "<tr>";
                echo "<td>". $idName['customerId']. "</td>";
                echo "<td>". $idName['customerName']. "</td>";
                echo "<tr>";
            }
            echo "</table>";



?>
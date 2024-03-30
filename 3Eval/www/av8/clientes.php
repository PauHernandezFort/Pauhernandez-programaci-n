<?php
 require_once "autoloader.php";
$brands = $_POST['brands'];
$conexion = new Conexion;
$conn = $conexion->getConn();
$customers=[];
foreach($brands as $brand){
    $query = "
    SELECT customers.customerName, customers.customerId, brands.brandName, brands.brandId
    FROM customers
    JOIN brandCustomer ON customers.customerId = brandCustomer.customerId
    JOIN brands ON brandCustomer.brandId = brands.brandId
    WHERE brandCustomer.brandId = '$brand'";
        $result = mysqli_query($conn, $query);
        $result->data_seek(0);
        while ($fila = mysqli_fetch_assoc($result)) {
            $customers[] = $fila;

        }
        }
echo"<style>table {width: 100%;border-collapse: collapse;}th, td {padding: 8px;text-align: left;border-bottom: 1px solid #ddd;}th {background-color: #f2f2f2;}tr:hover {background-color: #f5f5f5;}</style>";        
echo "<table>";
echo "<tr><th>CustomerID</th><th>Nombre</th><th>Marca</th><th>Id Marca</th></tr>";
     foreach($customers as $info){
        echo "<tr>";
        echo "<td>". $info['customerId']. "</td>";
        echo "<td>". $info['customerName']. "</td>";
        echo "<td>". $info['brandName']. "</td>";
        echo "<td>". $info['brandId']. "</td>";
        echo "<tr>";
        }
echo "</table>";



?>
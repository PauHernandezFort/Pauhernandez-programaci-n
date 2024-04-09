<?php
class Importar extends Conexion{
    public function __construct()
    {
        $this->fichero = 'costumers.csv';
        parent::__construct();
    }

    public function customers(){
        $delimitador = '#' ;
        $conn = $this->getConn();
        $gestor = fopen('customers.csv', "r");
        while (($element = fgetcsv($gestor,0,$delimitador)) !== false) {
            if (count($element) >=3 ) {
                var_dump($element);
                $query = "UPDATE `customers` SET `customerName` = ? where customerId = ?";
                $preparar = $conn->prepare($query);
                $preparar ->bind_param("ss", $element[1], $element[0]);
                $preparar ->execute();
                $preparar ->close();
            }
        }
        fclose($gestor);
    }

    public function brandCustomers(){
        $delimitador = '#' ;
        $conn = $this->getConn();
        $gestor = fopen('customers.csv', "r");
        while (($element = fgetcsv($gestor,0,$delimitador)) !== false) {
            if (count($element) >=3 ) {
                $cadena = $element[2];
                $elementos = explode(", ", $cadena);
                if(count($elementos) !==0){
                    foreach($elementos as $brands){
                        $brandId= $this->getBrandId($brands);
                        if($brandId!==null){
                            $query = "INSERT INTO `brandCustomer`(`customerId`, `brandId`) VALUES (?, ?)";
                            $preparar  = $conn->prepare($query);
                            $preparar ->bind_param("ss", $element[0], $brandId);
                            $preparar ->execute();
                            $preparar ->close();
                        }
                    }
                }
            }
        }
        fclose($gestor);
    }

    public function getBrandId($name){
        $conn = $this->getConn();
        $query = "SELECT `brandId` FROM `brands` where `brandName`=?";
        $preparar  = $conn->prepare($query);
        $preparar ->bind_param("s", $name);
        $preparar ->execute();
        $result = $preparar ->get_result();
        if($row = $result->fetch_assoc()){
            return $row['brandId'];
        }
        return null;
    }
}
?>
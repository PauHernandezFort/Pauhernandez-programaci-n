<?php
   require_once "autoloader.php";
class Cartera{
    protected array $clientes=[];


    // CONSTRUCOR
 // GET SET
    public function getClientes($num)
{
    return $this->clientes[$num];

}
public function getCliente()
{
    return $this->clientes;

}
public function getLimite(){
    $limite = count($this->clientes);
    return $limite;
}

    public function setCliente($cliente,$num)
{
    $this->clientes[$num] = $cliente;

}

    // METODOS    
        
    public function darwList(){
        $conn = mysqli_connect('db', 'root', 'test', "Proyecto");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo" <a href='crear.php'>CREAR</a>";
        $query = 'SELECT * from empresa';
        $result = mysqli_query($conn, $query);

           $limite = count($this->clientes); { 
           
            echo '<table class="table table-striped">';
            echo '<thead><tr><th>id</th><th>name</th><th>investment</th><th>date</th><th>Defaulter</th><th>Delete</th></tr></thead>';
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    foreach($value as $element){
                        echo '<td>' . $element . '</td>';
                        echo "<td> <a href='crear.php'>CREAR</a> </td>" ;
                    }   
            
            }
            
            
        }
        }


    public function delete($id){
        

        for ($i=0; $i < count($this->clientes) ; $i++) { 
            $cliente = $this->getClientes($i);
        
          if ($cliente ->getId() == $id){
            array_splice($this->clientes ,$i ,1);
           
          }
          $this->persist();
        }
        }

        public function persist(){
            $gestor = fopen("data.csv", "w");
            foreach($this->clientes as $fila){
                fputcsv($gestor,[
                    $fila->getId(),
                    $fila->getCompany(),
                    $fila->getInvestment(),
                    $fila->getData(),
                    $fila->getActive()
                ]);

        }

        fclose($gestor);
        }

        public function edit($id,$nId ,$company,$investment,$data,$active){
            for ($i=0; $i < count($this->clientes) ; $i++) { 
                $cliente = $this->getClientes($i);
            
              if ($cliente ->getId() == $id){
               $cliente ->setID($nId);
               $cliente ->setCompany($company);
               $cliente ->setInvestment($investment);
               $cliente ->setData($data);
               $cliente ->setActive($active);
               
              }
              $this->persist();
            }
            
    
        }

        public function crear($new){
            array_push(
                   
                $this->clientes,
                $new
            );
            $this->persist();
        }

        
}

?>
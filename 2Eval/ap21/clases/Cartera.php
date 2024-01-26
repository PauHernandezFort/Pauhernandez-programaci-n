<?php
   require_once "autoloader.php";
class Cartera{
    protected array $clientes=[];
    protected $fichero;

    // CONSTRUCOR
    public function __construct($fichero){
        $this->fichero=$fichero;
        $this-> logData($fichero);
} // GET SET
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
    public function logData($fichero)
        {
            $gestor = fopen($fichero, "r");
            while (($element = fgetcsv($gestor)) !== false) {
                if (count($element) >= 5) {
                array_push(
                   
                    $this->clientes,
                    new Empresa(...$element) //Spread Operator
                );
            }
            }
            fclose($gestor);
        }
    
        
    public function darwList(){
           $limite = count($this->clientes); { 
            $mostrar = ' <table class="redTable">';
            for ($i=0; $i < $limite; $i++) { 
                $posicion = $this->getClientes($i);
                $id = $posicion ->getId();
                $company = $posicion ->getCompany();
                $investment = $posicion ->getInvestment();
                $data = $posicion ->getData();
                $active = $posicion ->getActive();
                $mostrar.="<tr>
                    <td>$id</td>";
                    $vip = $this->isVip($investment);
                    $mostrar.= "$vip  $company </td>"; 
                    $mostrar.=" <td>$investment €</td>
                    <td>$data</td>";
                    if($active == "True"){
                    $mostrar .= "<td><img src='img/img05.gif'> </td>";
                
                    }
                    else{
                        $mostrar .= "<td><img src='img/img06.gif'> </td>";
                    
                    }
                    $mostrar.="
                    <td colspan='2'><a href='delete.php?id=".$posicion->getId()."'><img src='img/delete.png' height='25px'></a> </td>
                     <td><a href='edit.php?id=".$posicion->getId()."'><img src='img/edit.png' height='25px'></a> </td>
                     </tr>";
            }      
            $mostrar.= "</table>";

            return $mostrar;
        }

    }
    public function isVip($investment){
        $vip = "no";
        if($investment > 1000000){
            $vip = "<td class='vip'>";
        }else{
            $vip = "<td class='noVip'>";
        }
        return $vip;
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
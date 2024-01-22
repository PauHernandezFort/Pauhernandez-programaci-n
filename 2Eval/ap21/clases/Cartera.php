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

    public function setCliente($cliente,$num)
{
    $this->clientes[$num] = $cliente;

}

    // METODOS
    public function logData($fichero)
        {
            $gestor = fopen($fichero, "r");
            while (($element = fgetcsv($gestor)) !== false) {
                array_push(
                    $this->clientes,
                    new Empresa(...$element) //Spread Operator
                );
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
                    $mostrar .= "<td><img src='img/img05.gif'> </td>
                    </tr>";
                    }
                    else{
                        $mostrar .= "<td><img src='img/img06.gif'> </td>
                     </tr>";
                    }
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
  
}
?>
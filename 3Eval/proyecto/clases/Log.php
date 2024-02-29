<?php
   require_once "autoloader.php";
class Log{
    protected array $visits=[];
    protected $file;

    // CONSTRUCOR
    public function __construct($file){
        $this->file=$file;
        $this-> logData($file);
} // GET SET
    public function getVisit($num)
{
    return $this->visits[$num];

}
public function getVisits()
{
    return $this->visits;

}
public function getLimit(){
    $limit = count($this->visits);
    return $limit;
}

    public function setVisit($visit,$num)
{
    $this->visits[$num] = $visit;

}

    // METODOS
    public function logData($file)
        {
            $gestor = fopen($file, "r");
            while (($element = fgetcsv($gestor)) !== false) {
                if (count($element) >=5 ) {
                array_push(
                   
                    $this->visits,
                    new Visit(...$element) //Spread Operator
                );
            }
            
            }
            fclose($gestor);
        }
    
        function drawList(){
            $limite = count($this->visits); { 
                $mostrar = '';  
                $id= 0;
                for ($i = 0; $i < $limite; $i++) {
                    $posicion = $this->getVisit($i);
                    $patient = $posicion->getPatient();
                    $date = $posicion->getDate();
                    $amount = $posicion->getAmount();
                    $defaulter = $posicion->getDefaulter();
                    $id = $posicion ->getId();
                    if ($defaulter == "False"){
                    $mostrar .= "<tr>";
                    $vip = $this->isVip($amount);
                    $mostrar .= "<td class='" . $this->isVip($amount) . "'>$patient</td>";
                    $mostrar .= "<td>$date</td>
                                    <td>$amount €</td>";
                
                    if ($defaulter == "True") {
                        $mostrar .= "<td><img src='img/pagado.png' height='25px'></a> </td>";
                    } else {
                        $mostrar .= "<td><img src='img/noPagado.png' height='25px'></a> </td>";
                    }
                    $mostrar .= "
                    <td><a href='delete.php?id=" . $posicion->getId() . "'><img src='img/delete.png' height='25px'></a> </td>
                     <td><a href='edit.php?id=" . $posicion->getId() . "'><img src='img/edit.png' height='25px'></a> </td>
                     <td><a href='create.php?'><img src='img/anadir.png' height='25px'></a> </td>
                     </tr>";
                }
                }
    

                }      
                return $mostrar;
            }

        public function isVip($amount){
            if($amount > 250){
                return "vip";
            } else {
                return "noVip";
            }
        }

    public function delete($id){
    
        for ($i=0; $i < count($this->visits) ; $i++) { 
            $patient = $this->getVisit($i);
        
          if ($patient ->getId() == $id){
            array_splice($this->visits ,$i ,1);
           
          }
          $this->persist();
        }
        }

        public function persist(){
            $gestor = fopen("data.csv", "w");
            foreach($this->visits as $fila){
                fputcsv($gestor,[
                    $fila->getId(),
                    $fila->getPatient(),
                    $fila->getAmount(),
                    $fila->getDate(),                  
                    $fila->getDefaulter(),
                ]);

        }

        fclose($gestor);
        }

        public function edit($id,$nPatient ,$date,$amount,$defaulter){
            for ($i=0; $i < count($this->visits) ; $i++) { 
                $cliente = $this->getVisit($i);
            
              if ($cliente ->getId() == $id){
               $cliente ->setPatient($nPatient);
               $cliente ->setDate($date);
               $cliente ->setAmount($amount);
               $cliente ->setDefaulter($defaulter);
               
              }
              $this->persist();
            }
            
    
        }

        public function create($new){
            array_push(
                   
                $this->visits,
                $new
            );
            $this->persist();
        }
    
        public function getAllName(){
            $arrayName = [];
            foreach ($this->visits as $linea){
                $repeat = "no";
                $name = $linea -> getPatient();
                foreach ($arrayName as $linea2){
                    if($name == $linea2){
                        $repeat = "si";
                    }
                }
                if($repeat == "no"){
                    array_push($arrayName,$name);
                }
            }
            return $arrayName;
        }

        public function changeName($name,$newName){
            foreach ($this->visits as $linea){
                if($linea->getPatient() == $name){
                    $linea-> setPatient($newName);
                   
                }
            }
            $this->persist();
        }
        
}

?>
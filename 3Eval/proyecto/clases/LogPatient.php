<?php
   require_once "autoloader.php";
class LogPatient{
    protected array $patients=[];
    protected $file;

    // CONSTRUCOR
    public function __construct($file){
        $this->file=$file;
        $this-> logData($file);
} // GET SET
    public function getPatient($num)
{
    return $this->patients[$num];

}
public function getPatients()
{
    return $this->patients;

}
public function getLimit(){
    $limit = count($this->patients);
    return $limit;
}

    public function setPatient($patient,$num)
{
    $this->patient[$num] = $patient;

}

    // METODOS
    public function logData($file)
        {
            $gestor = fopen($file, "r");
            while (($element = fgetcsv($gestor)) !== false) {
                if (count($element) >=3 ) {
                array_push(
                   
                    $this->patients,
                    new Patient(...$element) //Spread Operator
                );
            }
            
            }
            fclose($gestor);
        }
    
        function drawList(){
            $limite = count($this->patients); { 
                $mostrar = '';  
                $id= 0;
                for ($i = 0; $i < $limite; $i++) {
                    $posicion = $this->getPatient($i);
                    $name = $posicion->getName();
                    $adress = $posicion->getAdress();
                    $id = $posicion ->getId();
            
                    $mostrar .= "<tr>";
                    $mostrar .= "<td>$id</td>";
                    $mostrar .= "<td>$name</td>
                                 <td>$adress</td>";
                
                    $mostrar .= "
                    <td><a href='deleteP.php?id=" . $posicion->getId() . "'><img src='img/delete.png' height='25px'></a> </td>
                     <td><a href='editP.php?id=" . $posicion->getId() . "'><img src='img/edit.png' height='25px'></a> </td>
                     <td><a href='createP.php?'><img src='img/anadir.png' height='25px'></a> </td>
                     <td><a href='searchVisit.php?name=" . $posicion->getName() . "'><img src='img/lupa.png' height='25px'></a> </td>
                     </tr>";
                }
        

                }      
                return $mostrar;
            }

    public function delete($id){
    
        for ($i=0; $i < count($this->patients) ; $i++) { 
            $patient = $this->getPatient($i);
        
          if ($patient ->getId() == $id){
            array_splice($this->patients ,$i ,1);
           
          }
          $this->persist();
        }
        }

        public function persist(){
            $gestor = fopen("dataP.csv", "w");
            foreach($this->patients as $fila){
                fputcsv($gestor,[
                    $fila->getId(),
                    $fila->getName(),
                    $fila->getAdress(),
                ]);

        }

        fclose($gestor);
        }

        public function edit($id,$name,$adress){
            for ($i=0; $i < count($this->patients) ; $i++) { 
                $cliente = $this->getPatient($i);
              if ($cliente ->getId() == $id){
               $cliente ->setName($name);
               $cliente ->setAdress($adress);
              }
              $this->persist();
            }
            
    
        }

        public function create($new){
            array_push(
                   
                $this->patients,
                $new
            );
            $this->persist();
        }
    
        public function serchName($name){
            $value="False";
            foreach($this->patients as $linea){
                $patient = $linea->getName();
            if($name == $patient){
                $value="True";
            } 
        }
        return $value;
        }
        }
        


?>
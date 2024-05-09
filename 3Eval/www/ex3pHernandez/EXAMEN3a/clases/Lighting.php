<?php
 require_once "autoloader.php";
class Lighting{
private $fichero;


public function __construct($fichero){
    $this->fichero=$fichero;
    }

    public function getVol($vol){
        if($vol == 'off'){
            $voleano= 0;
        }
        else{
            $voleano=1;
        }
        return $voleano;
    }

    public function getPotencia($model){
        $con= new Conection;
        $conectar = $con->getConn();
        $query= "SELECT `model_wattage` from `lamp_models` where `model_id` ='$model'";
        $result = mysqli_query($conectar, $query);
        $pot = $result->fetch_assoc();
        return $pot;
        
    }

    public function getZone($zone){
        $con= new Conection;
        $conectar = $con->getConn();
        $query= "SELECT `zone_id` from `zones` where `zone_name` ='$zone'";
        $result = mysqli_query($conectar, $query);
        $zone = $result->fetch_assoc();
        $zoneN['zone_name'];
        return $zoneN;
    }
    public function getZoneName($zone){
        $con= new Conection;
        $conectar = $con->getConn();
        $query= "SELECT `zone_name` from `zones` where `zone_id` ='$zone'";
        $result = mysqli_query($conectar, $query);
        $zone = $result->fetch_assoc();
        return $zone;
    }

    public function getNum($model){
        $con= new Conection;
        $conectar = $con->getConn();
        $query= "SELECT `model_id` from `lamp_models` where `model_part_number` ='$model'";
        $result = mysqli_query($conectar, $query);
        $num = $result->fetch_assoc();
        return $num;
    }
    public function importLamps(){
            $conn = new Conection;
            $conectar = $conn->getConn();
            $query= "DELETE FROM `lamps` where `lamp_id`";
            $result = mysqli_query($conectar,$query);
            $gestor = fopen($this->fichero, "r");
            while (($element = fgetcsv($gestor)) !== false) {
                if (count($element) >=5 ) {
                    var_dump($element);
                    $num = $this->getNum($element[2]);
                    $zon = $this->getZone($element[3]);
                    $vol=$this->getVol($element[4]);
                    $zone= $zon['zone_id'];
                    $numero = $num['model_id'];
                    $query = "INSERT INTO `lamps`( `lamp_id`, `lamp_name`, `lamp_model`, `lamp_zone`,`lamp_on`) VALUES ('$element[0]','$element[1]','$numero','$zone','$vol')";
                    $result = mysqli_query($conectar, $query);
            }
            }
            fclose($gestor);
    }

    public function getAllTask(){
        $array=[];
        $conn = new Conection;
        $conectar = $conn->getConn();
        $query= "SELECT * FROM `lamps`";
        $result = mysqli_query($conectar,$query);
        $contador=0;
        while($contador < $result->num_rows){
        $result->data_seek($contador);
        $row = $result->fetch_array(MYSQLI_ASSOC);
            $id= $row['lamp_id'];
            $name=$row['lamp_name'];
            $poscion = $row['lamp_zone'];
            $marca=$row['lamp_model'];
            $pot = $this->getPotencia($row['lamp_model']);
            $potencia=$pot['model_wattage'];
            $estado= $row['lamp_on'];
            $array[$contador] = new Lamp ($id,$name,$poscion,$marca,$potencia,$estado);
            $contador++;
        }
        return $array;
    }
    

    public function drawLampList($array){
        $output="";
        foreach ($array as $objeto) {
            $id=$objeto->getId();
            $name= $objeto->getName();
            $pot = $objeto->getPot();
            $estado= $objeto->getEst();
            $lugar=$objeto->getPos();
            $lugarN=$this->getZoneName($lugar);
            $lugarNombre=$lugarN['zone_name'];
            if($estado==0){
                $estado1='off';
            }
            else{
                $estado1='on';
            }
        $output.=" <div class='element $estado1'>
        <h4><a href='apagar.php?id=$id&status=$estado'><img src='img/bulb-icon-off.png'></a> $name</h4>
        <h1>$pot W.</h1>
        <h4>$lugarNombre</h4>
    </div>";
        }
        return $output;
    }

        public function imprescindible(){
            $array= $this->getAllTask();
            $z1=0;
            $z2=0;
            $z3=0;
            $z4=0;
            $output="";
           foreach ($array as $objeto ) {
            if($objeto->getPos() == 1){
                if($objeto->getEst()==1){
                    $z1+= $objeto->getPot();
                }
            }
            elseif($objeto->getPos() == 2){
                if($objeto->getEst()==1){
                    $z2+= $objeto->getPot();
                }
            }
            elseif($objeto->getPos() == 3){
                if($objeto->getEst()==1){
                    $z3+= $objeto->getPot();
                }
            }
            else{
                if($objeto->getEst()==1){
                    $z4+= $objeto->getPot();
                }
            }
           }
           $output.="<h3 id='abstract'> fondo norte $z1 </br> fondo sur $z2 </br> fondo este $z3 </br> fondo oeste $z4  </h3>";
           return $output;
        }

        public function apagar($id,$status){
            $conn = new Conection;
            $conectar = $conn->getConn();
            if($status == 0){
                $query= "UPDATE `lamps` SET `lamp_on`= 1 WHERE `lamp_id` = $id";
            }else{
                $query= "UPDATE `lamps` SET `lamp_on`= 0 WHERE `lamp_id` = $id";
            }
            $result = mysqli_query($conectar,$query);
        }
        public function filtrar($num){
            $array = $this->getAllTask();
            $lugar=[];
            if($num==1){
                foreach ($array as $objeto) {
                    
                    if($objeto->getPos()==1){
                        array_push($lugar,$objeto);
                    }
                }
            } elseif($num==2){
                foreach ($array as $objeto) {
                    if($objeto->getPos()==2){
                        array_push($lugar,$objeto);
                    }
                }
            } elseif($num==3){
                foreach ($array as $objeto) {
                   
                    if($objeto->getPos()==3){
                        array_push($lugar,$objeto);
                    }
                }
            }   elseif($num==4){
                foreach ($array as $objeto) {
                    if($objeto->getPos()==4){
                        array_push($lugar,$objeto);
                    }
                }
            }else{
                $lugar=$array;
            }
            $output=$this->drawLampList($lugar);
            return $output;
            
        }
    }


?>
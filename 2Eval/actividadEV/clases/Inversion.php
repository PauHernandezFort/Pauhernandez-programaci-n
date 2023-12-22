<?php
class Inversion extends Corriente{
    protected string $inversion;
    public function __construct($tit,$cant,$inv){
        parent::__construct($tit, $cant);
        $this->inversion = $inv;
    }
    public function setInversion($nuevo){
        $this->inversion = $nuevo;
    }
    public function getInteres(){
        return $this->inversion;
    }
    public function retirarInversion($retiro){
        $dineroP = $this->cantidad-($this->cantidad* $this->inversion)/100;
        if($dineroP <$retiro){
            echo"no puedes retirar tanto";
        }
        else{
            $this->retirar($retiro);
        }

    }
} 

?>
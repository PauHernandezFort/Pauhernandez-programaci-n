<?php
class Ahorro extends Corriente{
    private $interes;

    public function __construct($tit,$cant,$int){

        parent::__construct($tit, $cant);
        $this->interes= $int;
    }
    public function setInteres($nuevo){
        $this->interes = $nuevo;
    }

    public function getInteres(){
        return $this->interes;
    }

    public function ingresarAhorro($ingreso){
        $interes= $this->interes;
        
        $dinero = $ingreso +(($interes*$ingreso)/100);
        $this->ingresar($dinero);
    }
    public function retirar($retiro){
        echo "no puedes retirar en este tipo de cuenta";
    }

} 

?>
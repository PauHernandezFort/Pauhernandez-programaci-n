<?php
class Refrigerados extends Fresco{
    protected $tMantenimiento;
    //Constructor
    public function __construct($cadu,$lote,$envase,$origen,$mant){
        parent::__construct($cadu,$lote,$envase,$origen);
        $this->tMantenimiento = $mant;
    }
    // getters y setters
    public function getEnvasado(){
        return $this->tMantenimiento;
    }
    public function setMantenimiento($man){
        $this->tMantenimiento = $man;
    }
}
?>
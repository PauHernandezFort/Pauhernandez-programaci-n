<?php
class Aire extends Refrigerados{
    protected $cAire;
    //Constructor
    public function __construct($cadu,$lote,$envase,$origen,$mant,$cAire){
        parent::__construct($cadu,$lote,$envase,$origen,$mant);
        $this->cAire = $cAire;
    }
    // getters y setters
    public function getAire(){
        return $this->cAire;
    }
    public function setMantenimiento($aire){
        $this->cAire = $aire;
    }
}
?>
<?php
class Nitrogeno extends Refrigerados{
    protected $informacion;
    //Constructor
    public function __construct($cadu,$lote,$envase,$origen,$mant,$info){
        parent::__construct($cadu,$lote,$envase,$origen,$mant);
        $this->informacion = $info;
    }
    // getters y setters
    public function getInfo(){
        return $this->informacion;
    }
    public function setInfo($inf){
        $this->informacion = $inf;
    }
}
?>
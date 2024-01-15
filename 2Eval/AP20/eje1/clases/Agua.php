<?php
class Agua extends Refrigerados{
    protected $sAgua;
    //Constructor
    public function __construct($cadu,$lote,$envase,$origen,$mant,$agua){
        parent::__construct($cadu,$lote,$envase,$origen,$mant,);
        $this->sAgua = $agua;
    }
    // getters y setters
    public function getAgua(){
        return $this->sAgua;
    }
    public function setagua($agu){
        $this->sAgua = $agu;
    }
}
?>
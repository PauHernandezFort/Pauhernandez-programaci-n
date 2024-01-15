<?php
class Producto{
    protected $fCaducidad;
    protected $nLote;

    //construcor
    function __construct($cadu, $lote){
        $this->fCaducidad = $cadu;
        $this->nLote = $lote;
        }
        //getters y setters
        public function getCaducidad(){
            return $this->fCaducidad;
        }
        public function setCaducidad($caducidad){
            $this->fCaducidad = $caducidad;
        }
        public function getLote(){
            return $this->nLote;
        }
        public function setLote($lote){
            $this->nLote = $lote;
        }
}



?>
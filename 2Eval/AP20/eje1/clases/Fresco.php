<?php
class Fresco extends Producto{
    protected $fEnvasado;
    protected $pOrigen;

    //Constructor
    public function __construct($cadu,$lote,$envase,$origen){
        parent::__construct($cadu, $lote);
        $this->fEnvasado = $envase;
        $this ->pOrigen = $origen;
    }
    // getters y setters
    public function getEnvasado(){
        return $this->fEnvasado;
    }
    public function setEnvasado($env){
        $this->fEnvasado = $env;
    }
    public function getOrigen(){
        return $this->pOrigen;
    }
    public function setCaducidad($ori){
        $this->pOrigen = $ori;
    }
}
?>




?>
<?php
class Rugby extends Deporte{
    protected $faltas;
    protected $carreras;
    protected $ensayos;

    //Constructor
    public function __construct($jug, $tiem,$pai,$falt,$car,$ens){
        parent::__construct($jug, $tiem,$pai);
        $this->faltas = $falt;
        $this ->carreras = $car;
        $this ->ensayos = $ens;
    }
    //getters y setters
     
    public function getFaltas()
    {
        return $this->faltas;
    }
    public function setFaltas($faltas)
    {
        $this->faltas = $faltas;
    }
    public function getCarreras()
    {
        return $this->carreras;
    }
    public function setCarreras($carreras)
    {
        $this->carreras = $carreras;
    }
    public function getEnsayos()
    {
        return $this->ensayos;
    }
    public function setEnsayos($ensayos)
    {
        $this->ensayos = $ensayos;
    }
}
?>
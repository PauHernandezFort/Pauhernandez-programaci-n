<?php
class Baloncesto extends Deporte{
    protected $triples;
    protected $libres;
    protected $canastas;

    //Constructor
    public function __construct($jug, $tiem,$pai,$trip,$lib,$can){
        parent::__construct($jug, $tiem,$pai);
        $this->triples = $trip;
        $this ->libres = $lib;
        $this ->canastas = $can;
    }
    //getters y setters
     
    public function getTriples()
    {
        return $this->triples;
    }
    public function setTriples($triples)
    {
        $this->triples = $triples;
    }
    public function getLibres()
    {
        return $this->libres;
    }

    public function setLibres($libres)
    {
        $this->libres = $libres;
    }
    public function getCanastas()
    {
        return $this->canastas;
    }
    public function setCanastas($canastas)
    {
        $this->canastas = $canastas;
    }
}
?>
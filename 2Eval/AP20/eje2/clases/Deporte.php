<?php
 abstract class Deporte{
    protected $jugadores;
    protected $tiempo;
    protected $pais;

    //construcor
     public function __construct($jug, $tiem,$pai){
        $this->jugadores = $jug;
        $this->tiempo = $tiem;
        $this ->pais = $pai;
        }
     //getters y setters
    public function getJugadores()
    {
        return $this->jugadores;
    }
    public function setJugadores($jugadores)
    {
        $this->jugadores = $jugadores;
    }
    public function getTiempo()
    {
        return $this->tiempo;
    }
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }
    public function getPais()
    {
        return $this->pais;
    }
    public function setPais($pais)
    {
        $this->pais = $pais;
    }
}



?>
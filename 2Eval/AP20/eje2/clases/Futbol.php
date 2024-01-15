<?php
class Futbol extends Deporte{
    protected $equipo;
    protected $liga;
    protected $goles;

    //Constructor
     public function __construct($jug,$tiem,$pai,$equi,$lig,$gol){
        parent::__construct($jug, $tiem,$pai);
        $this->equipo = $equi;
        $this->liga = $lig;
        $this->goles = $gol;
    }
    
    public function getEquipo()
    {
        return $this->equipo;
    }
    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;
    }
    public function getLiga()
    {
        return $this->liga;
    }

    public function setLiga($liga)
    {
        $this->liga = $liga;
    }
    public function getGoles()
    {
        return $this->goles;
    }
    public function setPuntos($gol)
    {
        $this->goles = $gol;
    }
}
?>
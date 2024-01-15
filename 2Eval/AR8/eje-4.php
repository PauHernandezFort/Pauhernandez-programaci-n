<?php
class Esfera{
    protected $diametro;
 
    function __construct($di){
        $this->diametro = $di;
      
        }
    //Metodos
    public function Volumen(){
        $volumen = (4/3) * 3.14 *  (pow($this->diametro ,3));

        return $volumen;
    }
}


    //programa

    $bola = new Esfera (18);

    echo $bola->volumen();
?>
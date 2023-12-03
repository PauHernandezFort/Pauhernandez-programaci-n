<?php
//calse
class Persona{
    private $nombre ;
    private $apellidos ;
    public $edad ;

    //Metodos
    public function mostrar(){
        echo $this->nombre. " " .$this->apellidos. " ";

    }
    public function getNombre(){
       return $this -> nombre ;

    }
    public function setApellidos($apelli){
        $this -> apelldios = $apelli;
        return $apelli;
    }

    public function setEdad($age){
        $this -> edad = $age;
    }
   public function getEdad(){
    $this -> edad;
   }
   public function mostrar(){
    echo $this -> edad;
   }
}
$edad = 18;

$persona1 = new Persona();
$persona1 -> edad = setEdad($edad);


$persona1 -> mostrar();
?>
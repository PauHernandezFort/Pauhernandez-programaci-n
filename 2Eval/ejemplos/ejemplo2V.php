<?php
class Persona{
    //PROPIEDADES
    private $nombre;
    private $apellidos;
    public $edad;
    //MÉTODOS
    public function setNombre($name){
        $this->nombre = $name;
    }
    public function setApellidos($surname){
        $this->apellidos = $surname;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
   
}
//PROGRAMA PRINCIPAL
$persona1 = new Persona();
$persona1->setNombre("Vicente");
$persona1->setApellidos("Monfort Salvador");
$persona1->edad=46;
echo "Cositas de persona 1 <br>";
echo "---------------------<br>";
echo $persona1->getNombre() . " " . $persona1->getApellidos() . "<br>";


?>
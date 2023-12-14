<?php
class Triangulo{
    private $l1;
    private $l2;
    private $l3;

    function __construct($la1=0, $la2=0, $la3=0){
    $this->l1 = $la1;
    $this->l2 = $la2;
    $this->l3 = $la3;
    }
    public function setLa1($la1){
        $this->l1 = $la1;
    }
    public function setLa2($la2){
        $this->l2 = $la2;
    }
    public function setLa3($la3){
        $this->l3 = $la3;
    }
    //Get
    public function getLa1(){
        return $this->l1;
    }

    public function getLa2(){
        return $this->l2;
    }
    public function getLa3(){
        return $this->l3;
    }
    //Otros
    public function semi(){
        $semi = ($triangulo1->getLa1() + $triangulo1->getLa2() +$triangulo1->getLa3())/2;
        return $semi;
    }
    public function area(){
        
    }
}


$triangulo1 = new Triangulo();
$triangulo1 ->setLa1(23);
$triangulo1 ->setLa2(14);
$triangulo1 ->setLa3(87);

$area = ($triangulo1->getLa1() + $triangulo1->getLa2() +$triangulo1->getLa3())/2;
echo "el area es $area";


?>
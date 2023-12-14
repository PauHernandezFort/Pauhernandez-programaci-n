<?php
class Avarage{
    private $num1;
    private $num2;
    private $num3;

    //METODOS

    //SET
    public function setN1($n1){
        $this->num1 = $n1;
    }
    public function setN2($n2){
        $this->num2 = $n2;
    }
    public function setN3($n3){
        $this->num3 = $n3;
    }
    //Get
    public function getN1(){
        return $this->num1;
    }

    public function getN2(){
        return $this->num2;
    }
    public function getN3(){
        return $this->num3;
    }
   //OTROS

   public function calcular(){
    $media = ($this->num1 + $this-> num2 + $this-> num3)/3;
    echo "La media de los 3 numeros es $media";
   }
} //Programa

 $numeros = new Avarage();
 $numeros ->setN1(12);
 $numeros ->setN2(10);
 $numeros ->setN3(7);
$numeros -> calcular();

?>
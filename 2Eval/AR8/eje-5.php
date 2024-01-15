<?php
class refresco{
    protected $sabor;
    protected $nAzucar;
    protected $cEnvase;

    //funciones

    function __construct($sab,$azu,$env){
        $this->sabor = $sab;
        $this->nAzucar = $azu;
        $this->cEnvase = $env;
}
    public function getSabor(){
        return $this->sabor;
    }
    public function getAzucar(){
        return $this->nAzucar;
    }
    public function getEnvase(){
        return $this->cEnvase;
    }
}//programa

$cocacola = new refresco ("coca","40%","250ml");
$fanta = new refresco ("limon","20%","220ml");

echo "Cocacola","<br>";
echo $cocacola -> getSabor();
echo $cocacola -> getAzucar();
echo $cocacola -> getEnvase();
echo "<br>";
echo "Fanta","<br>";
echo $fanta -> getSabor();
echo $fanta -> getAzucar();
echo $fanta -> getEnvase();
 
?>
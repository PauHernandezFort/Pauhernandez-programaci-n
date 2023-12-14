<!DOCTYPE html>
<html>
    <head>
        <title>programa</title>
        <meta charset="utf-8">
    </head>
    <body>
      <form name="FormularioDatos" method="post" action="">
            priemr numero real: <input type="numeric" name="1R" value="">
            <br/>
            primer numero imaginario: <input type="numeric" name="1I" value="">
            <br/>
        segundo numero real: <input type="numeric" name="2R" value="">
            <br/>
            segundo numero imaginario: <input type="numeric" name="2I" value="">
            <br/>

        <input value="Calcular" type="submit" /> <br>
        </form>
    </body>
</html>
<?php

class Operaciones{
    private float $num1R;
    private float $num1I;
    private float $num2R;
    private float $num2I;

    //metodos
    function __construct($n1r=0, $n1i=0,$n2r=0, $n2i=0){
        $this->num1R = $n1r;
        $this->num1I = $n1i;
        $this->num2R = $n2r;
        $this->num2I = $n2i;
        }
  
//operaciones
    public function mult(){
        $n1R = $this->num1R;
        $n1I = $this->num1I;
        $n2R = $this->num2R;
        $n2I = $this->num2I;

        $real = ($n1R * $n2R) - ($n1I * $n2I);
        $imaginario = ($n1R * $n2I )+ ($n2R * $n1I );
        $numero = [$real,$imaginario];
        return $numero;
    }
    public function sum(){
        $n1R = $this->num1R;
        $n1I = $this->num1I;
        $n2R = $this->num2R;
        $n2I = $this->num2I;

        $real = ($n1R + $n2R);
        $imaginario = ($n1I + $n2I );
        $numero = [$real,$imaginario];
        return $numero;
    }
    public function resta(){
        $n1R = $this->num1R;
        $n1I = $this->num1I;
        $n2R = $this->num2R;
        $n2I = $this->num2I;
        $real = ($n1R - $n2R);
        $imaginario = ($n1I - $n2I );
        $numero = [$real,$imaginario];
        return $numero;

    }
}
    //programa
    $n1r = $_POST["1R"];
    $n1i = $_POST["1I"];
    $n2r = $_POST["2R"];
    $n2i = $_POST["2I"];
    
    $nu = new Operaciones($n1r,$n1i,$n2r,$n2i);

    $arrayS = $nu -> sum();
    $arrayM = $nu -> mult();
    $arrayR = $nu -> resta();

echo " la suma es", $arrayS[0], " ", $arrayS[1];
echo " la multiplicacion es", $arrayM[0], " ", $arrayM[1];
echo " la resta es", $arrayR[0], " ", $arrayR[1];



    


?>

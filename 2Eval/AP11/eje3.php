<?php
class Empleado{
    private $salario;
    private $nombre;
    private $horas;

    //METODOS

    function __construct($s=0, $n=0,$h=0){
        $this->salario = $s;
        $this->nombre = $n;
        $this->horas = $h;
        }
        public function AddSal(){
            $sal = $this->salario;
          if($sal < 500){
            $sal +=10;
          }
          $this->salario = $sal;
        }
        public function AddWork(){
            $sal = $this->salario;
            $hor = $this->horas;
          if($hor > 6){
            $sal +=5;
          }
          $this->salario = $sal;
        }
        
    public function getInfo(){
        $sala = $this->salario;
        $hor = $this ->horas;
        echo "Este trabajador ha trabajado $hor horas con un salrio de $sala";
    }

}
$trabajador1 = new Empleado(400,"jose",10);
$trabajador1 ->AddSal();
$trabajador1 ->AddWork();
$trabajador1 -> getInfo();

?>
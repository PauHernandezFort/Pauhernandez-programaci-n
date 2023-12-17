<?php
abstract class Instrumentos{
    protected string $musico;
    protected string $ano;
    protected string $nombre;

//constructor
public function __construct($mus,$ano,$nom){
    $this->musico = $mus;
    $this->ano = $ano;
    $this->nombre = $nom;
}
//metodos
abstract function getPropiedades();
}


//clase viento
class Viento extends Instrumentos{
    //propiedaes
    protected string $boquilla;
    protected string $salida;

    //construcor
    public function __construct($mus , $ano, $nom, $boca, $sal){
        parent::__construct($mus,$ano,$nom);
        $this->boquilla=$boca;
        $this->salida=$sal;
}
//metodos
public function getPropiedades(){
    return $this->musico . " || " . $this->ano . " || " . $this->nombre . " || " . $this->boquilla . " || " . $this->salida   ;
}
}
//clase cuerda
class Cuerda extends Instrumentos{
    //propiedaes
    protected string $cuerdas;
    protected string $material;

    //construcor
    public function __construct($mus , $ano, $nom, $cuer, $mat){
        parent::__construct($mus,$ano,$nom);
        $this->cuerdas=$cuer;
        $this->material=$mat;
}
//metodos
public function getPropiedades(){
    return $this->nombre . " || " . $this->ano . " || " . $this->musico . " || " . $this->cuerdas . " || " . $this->material   ;
}
}
//clase percusion
class Percusion extends Instrumentos{
    //propiedaes
    protected string $baquillas;
    protected string $tornillos;

    //construcor
    public function __construct($mus , $ano, $nom, $baq, $torni){
        parent::__construct($mus,$ano,$nom);
        $this->baquillas=$baq;
        $this->tornillos=$torni;
}
//metodos
public function getPropiedades(){
    return $this->nombre . " || " . $this->ano . " || " . $this->musico . " || " . $this->baquillas . " || " . $this->tornillos ;
}
}

//programa
$guitarra = new Cuerda ("Maria Jose","1000","Guitartra","8","madera");
echo $guitarra->getPropiedades(),"<br>";

$silofono = new Percusion ("Jose Maria","1300","silofono","2","98");
echo $silofono->getPropiedades(),"<br>";

$trompeta = new Viento ("Paqui","300","trompeta","semi abierta","redonda");
echo $trompeta->getPropiedades(),"<br>";

?>
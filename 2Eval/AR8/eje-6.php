<?php
class Producto{
    protected $nombre;
    protected $stock;

    //funciones

    public function __construct($nom,$sto){
        $this->nombre = $nom;
        $this->stock = $sto;
    }
    public function retirar($num){
        $this ->stock = $this ->stock - $num;
    }

    public function reponer(){
        if ($this-> stock == 0){
            echo "sin estock";
        }
        else{
            echo "con estock";
        }
    }
        
    } //programa

    $tomate = new Producto ("tomate","10");
    $tomate -> retirar(5);
    $tomate -> reponer();
    $tomate -> retirar(5);
    $tomate -> reponer();


?>
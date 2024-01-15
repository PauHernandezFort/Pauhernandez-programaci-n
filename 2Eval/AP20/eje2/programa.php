<?php
require_once "autoloader.php";

$bAlcasser= new Baloncesto(5,60,"Alcasser",3,8,9);
$olimpiakos = new Futbol (11,90,"Alcasser","Olimpiacos","1ref",12);
$ratpenat = new Rugby (11,90,12,2,1,11);
$pandabuy= new Baloncesto(5,60,"Xina",12,56,886);
$forasteros = new Futbol (11,90,"Europa","forasteros F.C","3ref",11);

$aleatorio = [$bAlcasser,$olimpiakos,$ratpenat,$pandabuy,$forasteros];

$pais =$aleatorio[random_int(0,4)]->getPais();
echo $pais








?>
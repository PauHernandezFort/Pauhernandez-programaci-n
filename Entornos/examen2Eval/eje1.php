<?php
//desarrollo de prueba
function Prueba($personaje1,$personaje2){
    $p1Validacion=0;
    if($personaje1 =="Dragon"){
      $p1Validacion= "si";
}   elseif($personaje1=="Enano"){
        $p1Validacion= "si";
}   elseif($personaje1=="Enano"){
        $p1Validacion= "si";
}   elseif($personaje1=="Hobbit"){
        $p1Validacion= "si";
}    elseif($personaje1=="Ent"){
        $p1Validacion= "si";
}   elseif($personaje1=="Ogro"){
        $p1Validacion= "si";
    }elseif ($personaje1=="Hombre"){
        $p1Validacion= "si";
    }else{
        $p1Validacion= "no";
    }
    $p2Validacion=0;
    if($personaje2 =="Dragon"){
        $p2Validacion="si";
}   elseif($personaje2=="Enano"){
        $p2Validacion="si";
}   elseif($personaje2=="Enano"){
        $p2Validacion="si";
}   elseif($personaje2=="Hobbit"){
        $p2Validacion="si";
}    elseif($personaje2=="Ent"){
        $p2Validacion="si";
}   elseif($personaje2=="Ogro"){
        $p2Validacion="si";
    }elseif ($personaje2=="Hombre"){
        $p2Validacion="si";
    }else{
        $p2Validacion="no";
    }
    if(($p1Validacion=="si") && ($p2Validacion =="si")){
        return True;
    }
}

$personaje1= "Enano";
$personaje2="Hombre";
if (Prueba($personaje1,$personaje2)== True){
if($personaje1 =="Dragon"){
    if ($personaje2 == "Enano"){
       echo"$personaje2 gana";
} else{
    echo "$personaje1 gana";
}
}  elseif($personaje2 =="Dragon"){
    if ($personaje1 == "Enano"){
       echo"$personaje1 gana";
} else{
    echo "$personaje2 gana";
}
} else{
echo"no se sabe";
}
}else{
    echo "las 2 especies no se pueden pelear";
}
?>

<!DOCTYPE html>
<html>
<?php
$gana1 = 0;
$gana2 = 0;
$contador = 0;
while ($contador <= 10){
$contador2 = 0;
$contador1 = 0;
$jugador1 = [];
$jugador2 = [];

 while ($contador1 <= 5){
    $jugador1 [$contador1] = random_int(1, 6);
    $jugador2 [$contador1] = random_int(1, 6);
    $contador1 ++;
 }
$puntuacion1 = 0;
$puntuacion2 = 0;
 while ($contador2 <= 5){
  $puntuacion1 += $jugador1 [$contador2];
  $puntuacion2 += $jugador2 [$contador2];
  $contador2 ++;
}

echo "jugador 1 puntuacion en la tirada $puntuacion1" ,"<br>";
echo "jugador 2 puntuacion en la tirada $puntuacion2" ,"<br>";
 
if( $puntuacion1 < $puntuacion2){
    echo "el jugador 2 a ganado","<br>";
    $gana2 ++;

} elseif ($puntuacion1 > $puntuacion2){
    echo "el jugador 1 a ganado","<br>";
    $gana1 ++;
} elseif ($puntuacion1 = $puntuacion2){
    echo "han quedado enpate","<br>";
}
    $contador ++;
}
echo "el jugador1 ha gando $gana1 partidas" ,"<br>";
echo "el jugador2 ha gando $gana2 partidas" ,"<br>";
$porcentaje1 = ($gana1 *100) /10;
$porcentaje2 = ($gana2 *100) /10;
echo "el jugador1 tiene $porcentaje1 % de victorias" ,"<br>";
echo "el jugador2 tiene $porcentaje2 % de victorias" ,"<br>";

?>
    
        
    </form>
    </html>


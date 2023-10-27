<?php
$jugador1 = $_POST['jugador1'];
$jugador2 = $_POST['jugador2'];

if ($jugador1 == $jugador2){
    echo "han quedado empate";
} elseif ($jugador1 == "tiejra" && $jugador2 == "piedra"){
    echo "jugador 2 gana";
}  elseif ($jugador1 == "papel" && $jugador2 == "tijra"){
    echo "jugador 2 gana";
} elseif ($jugador1 == "piedra" && $jugador2 == "papel"){
    echo "jugador 2 gana";
} else
    echo "gana jugdor 1";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo formularios</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form name="FormularioDatos" method="post" action="">
            <p> Piedra papel o tijera</p>
            <br/>
            Jugador 1: <input type="text" name="jugador1" value="">
            <br/> <br/>
            Jugador 2: <input type="text" name="jugador2" value="">
            <br/> <br/>
            <input value="Calcular" type="submit" />
        </form>
    </body>
</html>
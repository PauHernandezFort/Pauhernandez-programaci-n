<?php

{
    $tiempo = $_POST['l1'];
    $hora = $_POST['l2'];
    $domingo = $_POST['l3'];

    if ($tiempo <=5){
        $precio = ($tiempo * 1);
        echo "el precio de la llamda es $precio";   
    } elseif (($tiempo >5) and ($tiempo <= 8)){
        $precio = ((($tiempo -5) * 0.80) + 5);
        echo "el precio de la llamada es $precio";
        } elseif (($tiempo >8) and ($tiempo <= 10)){
            $precio = ((($tiempo -8) * 0.70) + 7.40);
            echo "el precio de la llamada es $precio";
           } elseif ($tiempo >10) {
                $precio = ((($tiempo -10) * 0.50) + 8.8);
                echo "el precio de la llamada es $precio";
            }
        if ($domingo == "si"){
            $precio = ($precio * 1.03);
            echo " Pero por ser domingo vale $precio";
        }
         if ($tiempo >= 14){
            $precio = ($precio * 1.15);
            echo " Y por ser tarde $precio";
        } else {
            $precio = ($precio * 1.10);
            echo " Y por ser mañana $precio";
        }
}

?>

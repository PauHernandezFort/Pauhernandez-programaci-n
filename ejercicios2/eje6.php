<?php

{
    $enero = $_POST['l'];
    $febrero = $_POST['2'];
    $marzo = $_POST['3'];
    $abril = $_POST['4'];
    $mayo = $_POST['5'];
    $junio = $_POST['6'];
    $julio = $_POST['7'];
    $agosto = $_POST['8'];
    $septiembre = $_POST['9'];
    $octubre = $_POST['10'];
    $noviembre = $_POST['11'];
    $diciembre = $_POST['l2'];

    $precio = $enero;
    echo "en enero llevas ahorrado $enero , en total $precio <br>";

    $precio = ($enero + $febrero);
    echo "en febrero llevas ahorrado $febrero, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo);
    echo "en Marzo llevas ahorrado $marzo, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo + $abril);
    echo "en Abril llevas ahorrado $abril, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo + $abril + $mayo);
    echo "en Mayo llevas ahorrado $mayo, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo + $abril + $mayo + $junio);
    echo "en Junio llevas ahorrado $junio, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo + $abril + $mayo + $junio + $julio);
    echo "en Julio llevas ahorrado $julio, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo + $abril + $mayo + $junio + $julio + $agosto);
    echo "en Agosto llevas ahorrado $agosto, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo + $abril + $mayo + $junio + $julio + $agosto + $septiembre);
    echo "en Septiembre llevas ahorrado $septiembre, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo + $abril + $mayo + $junio + $julio + $agosto + $septiembre + $octubre);
    echo "en octubre llevas ahorrado $octubre, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo + $abril + $mayo + $junio + $julio + $agosto + $septiembre + $octubre + $noviembre);
    echo "en Noviembre llevas ahorrado $noviembre, en total $precio <br>";

    $precio = ($enero + $febrero + $marzo + $abril + $mayo + $junio + $julio + $agosto + $septiembre + $octubre + $noviembre + $diciembre);
    echo "en Diciembre llevas ahorrado $diciembre, en total $precio <br>";
}
?>
<?php

/*require_once "class/MatrixOps.php";
require_once "class/Matrix.php";*/

/*function __autoload($claseDesconocida){
    require_once "class/$claseDesconocida.php";
}*/

require_once "autoloader.php";



$matrix1 = new Matrix(2, 3);
$matrix1->setRandomValues(1, 5);
$matrix2 = new Matrix(2, 3);
$matrix2->setRandomValues(1, 5);
$ops = new MatrixOps($matrix1, $matrix2);

$sumMatrix = $ops->sumMatrix();
$sumMatrixTable = (is_null($sumMatrix)) ? "matrices diferente dimension" : $sumMatrix->drawTable();
$multMatrix = $ops->multMatrix();;
$multMatrixTable = (is_null($multMatrix)) ? "matrices diferente dimension" : $multMatrix->drawTable();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $matrix1->drawTable(); ?>
    <br>
    <?= $matrix2->drawTable(); ?>
    <br>
    <?= $sumMatrixTable; ?>
    <br>
    <?= $multMatrixTable; ?>
</body>

</html>
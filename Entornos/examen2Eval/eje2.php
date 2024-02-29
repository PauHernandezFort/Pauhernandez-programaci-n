<?php
function leerDiagonal($matriz) {
 $diagonal = [];
 $filas = count($matriz);
 $columnas = count($matriz[0]); // Suponemos que todas las filas tienen la misma cantidad de columnas
 if ($filas != $columnas) {
 echo "La matriz no es cuadrada, no se puede obtener la diagonal.";
 return;
 }
 for ($i = 0; $i < $filas; $i++) {
 for ($j = 0; $j < $columnas; $j++) {
    echo "pasada $i ",$matriz[$i][$j];

    echo "<br>";
 if ($i == $j) {
 $diagonal[] = $matriz[$i][$j];
 }
 }
 }
 return $diagonal;
}
// Ejemplo de matriz 4x4
$matriz = array(
 array(1, 2, 3, 4),
 array(5, 6, 7, 8),
 array(9, 10, 11, 12),
 array(13, 14, 15, 16)
);
$diagonal = leerDiagonal($matriz);
echo "Diagonal de la matriz: ";
print_r($diagonal);
?>
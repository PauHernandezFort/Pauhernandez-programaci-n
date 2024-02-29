<?php
 require_once "autoloader.php";
$patient=$_GET['name'];
$datos = new Log('data.csv');
$array = $datos-> getVisits();
$patientV = [];
foreach ($array as $visit) {
    $name= $visit -> getPatient();
    if ("$name" == "$patient"){
        array_push( $patientV,$visit);
    }
  
}
persist($patientV);
function persist($patientV){
    $gestor = fopen("dataPatient.csv", "w");
    foreach($patientV as $fila){
        fputcsv($gestor,[
            $fila->getId(),
            $fila->getPatient(),
            $fila->getAmount(),
            $fila->getDate(),                  
            $fila->getDefaulter(),
        ]);
        }
        fclose($gestor);
        }
header("location: patientVisit.php");
?>
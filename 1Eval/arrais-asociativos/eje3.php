<?php
$city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"];
$country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];
$array = [];

for ($i=0 ; $i < count($city) ; $i++ ) { 
    $ciudad1["city"] = $city[$i];
    $pais1["country"] = $country[$i];
    array_push($array, $ciudad1);
    array_push($array[$i], $pais1);
}
var_dump($array);

?>
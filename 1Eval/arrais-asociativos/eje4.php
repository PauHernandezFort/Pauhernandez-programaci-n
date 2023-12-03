<?php
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$cityarray = explode(',', $city);
$countryarray = explode(',', $country);
$array = [];

for ($i=0; $i <10 ; $i++) { 
    $ciudad["ciudad"] = $cityarray[$i];
    $pais["pais"] = $countryarray[$i];
    array_push($array, $ciudad);
    array_push($array[$i], $pais);     
}

echo "<pre>";
var_dump($array);
echo "</pre>";
?>
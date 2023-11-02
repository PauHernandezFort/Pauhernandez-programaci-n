<?php
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$countryarrays = [];
$capitals = explode(',', $country);

for ($i=0; $i < count($capitals) ; $i++) { 
    $pais["country"] = $capitals[$i];
    array_push($countryarrays, $pais);
}
var_dump($countryarrays);


?>


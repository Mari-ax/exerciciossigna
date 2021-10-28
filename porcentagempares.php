<?php

$contador = 0;  
$elementsList = 0;
$numero = 0;

$elementsList = [5,22,25,41,58,85,87,74,21,3,7,9,30,33,55,8,1,77,48,2];

foreach($elementsList as $numero) {
    if($numero % 2 == 0) {
        $contador++;
    }
}

$porcentagemPares = ($contador/(count($elementsList)))*100; 
echo "Porcentagem de pares " .$porcentagemPares. "%";

echo "<pre>";
var_dump($elementsList); 
echo "</pre>";
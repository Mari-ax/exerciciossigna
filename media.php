<?php

$elementsList = [5,22,25,41,58,85,87,74,21,3,7,9,30,33,55,8,1,77,48,2]; 
    echo "A média aritmética dos valores é: " . 
    array_sum($elementsList) / count($elementsList); //array_sum() retorna a soma dos valores de um array.

   echo "<pre>";
   var_dump($elementsList); 
   echo "</pre>";
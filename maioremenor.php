<?php  /*Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem ordenar,
        o percentual de números pares e média dos elementos do vetor. O programa pode ser 
        feito para capturar 20 valores da tela, usando o navegador.*/

        $elementsList = [5,22,25,41,58,85,87,74,21,3,7,9,30,33,55,8,1,77,48,2];

        echo "Maior valor: ".max($elementsList);
        echo "</br> Menor valor: ".min($elementsList)."</br>";
            
        
        echo "<pre>";
        var_dump($elementsList); 
        echo "</pre>";
        
        

<?php  /*Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem ordenar,
        o percentual de números pares e média dos elementos do vetor. O programa pode ser 
        feito para capturar 20 valores da tela, usando o navegador.*/


class Exercicios
{
    function porcentagemPares($vetor)
    {   
        foreach($vetor as $numero) {
            if($numero % 2 == 0) {
                $contador++;
            }
        }
        
        $porcentagemPares = ($contador/(count($vetor)))*100; 
        echo "Porcentagem de pares " .$porcentagemPares. "%";
    }

    function menoreMaior($vetor)
    {
        echo "Maior valor: ".max($vetor);
        echo "</br> Menor valor: ".min($vetor)."</br>";
    }

    function media($vetor) {
        
        $total = array_sum($vetor) / count($vetor);
        echo "A média aritmética dos valores é: " .$total;
    }

}

$bar = new Exercicios;
$vetor= [5,22,25,41,58,85,87,74,21,3,7,9,30,33,55,8,1,77,48,2];

$bar->porcentagemPares($vetor); 
$bar->menoreMaior($vetor); 
$bar->media($vetor); 

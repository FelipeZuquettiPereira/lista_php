<!-- Exercício 14 – Estatísticas Numéricas
Uma empresa de análise de dados precisa gerar informações estatísticas sobre uma
coleção de números.
Crie uma função chamada estatisticasNumericas() que receba um vetor de
números e retorne:
● Soma;
● Média;
● Maior valor;
● Menor valor;
● Mediana;
● Quantidade de números pares;
● Quantidade de números ímpares. -->

<?php
function estatisticasNumericas($numeros) {
    
    
    
    $array = explode(",", $numeros);
    

    $total = count($array);
    
    $somaNumeros = array_sum($array); 
    $media = $somaNumeros / $total; 

    $maiorNumero = max($array); 
    $menorNumero = min($array); 

    sort($array);
    $numeroMeio = floor($total / 2);

    if ($total % 2 != 0) {
        $mediana = $array[$numeroMeio];
    }else{
        $mediana = ($array[$numeroMeio - 1] + $array[$numeroMeio]) / 2;
    }

    $par = 0;
    $impar = 0;

    for($i = 0; $i < $total; $i++){
        
        if($array[$i] % 2 == 0){
            $par += 1;
        }else{
            $impar += 1;
        }
    }

    echo "Soma: " . $somaNumeros . "<br>";
    echo "media: " . $media . "<br>";
    echo "Maior numero: " . $maiorNumero . "<br>";
    echo "Menor numero: " . $menorNumero . "<br>";
    echo "Mediana: " . $mediana . "<br>";
    echo "Numeros pares: " . $par . "<br>";
    echo "Numeros ímpares: " . $impar . "<br>";
}

estatisticasNumericas("9, 4, 2, 6, 5, 4, 8");

?>
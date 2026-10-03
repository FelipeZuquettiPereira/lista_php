<!-- Exercício 10 – Sistema de Notas
Uma escola precisa automatizar o cálculo das médias dos estudantes.
Crie uma função chamada calcularMedia() que receba um vetor contendo as notas
de um aluno.
A função deverá retornar:
● Maior nota;
● Menor nota;
● Média;
● Situação final (Aprovado, Recuperação ou Reprovado). -->

<?php

function calcularMedia(array $notas = [0, 0, 0]){

    $maiorNota = max($notas);
    $menorNota = min($notas);
    
    $total = array_sum($notas);
    $media = $total / 3;

    echo "Maior nota: " . $maiorNota . "<br>";
    echo "Menor nota: " . $menorNota . "<br>";
    echo "Media: " . $media . "<br>";

    if($media < 5){
        echo "Situação Final: Reprovado";
    }elseif($media >= 5 && $media < 7){
        echo "Situação Final: Recuperação";
    }else{
        echo "Situação Final: Aprovado"; 
    }

}

calcularMedia([2.5, 8, 3] );
?>
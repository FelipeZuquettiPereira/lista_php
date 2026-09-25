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
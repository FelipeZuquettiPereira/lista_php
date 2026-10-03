<!-- Exercício 08 – Organizador de Lista
Uma escola deseja organizar automaticamente a lista de alunos matriculados.
Crie uma função chamada ordenarNomes() que receba uma string contendo nomes
separados por vírgulas.
A função deverá transformar os nomes em um vetor, remover espaços
desnecessários, ordenar em ordem alfabética e retornar a lista organizada.
 -->

<?php

function ordenarNomes($nomes){

    $array = explode(",", $nomes);
    $array = array_map('trim', $array);
    sort($array);

    for($i = 0; $i < count($array); $i++ ){
        echo $i +1 . " " . $array[$i] . "<br>";
    }
}

ordenarNomes("Jonas   Daniel         , Felipe Neto, Carlos, Caxias, Ricardo Milos");

?>
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
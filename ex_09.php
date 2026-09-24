<?php

function analisarNumero($numero){

    if($numero % 2 == 0){
        echo "$numero é par<br>";
    }else{
        echo "$numero é ímpar<br>";
    }

    function primo($numero) {
    
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
    }   

    if (primo($numero)) {
        echo "$numero é primo<br>";
    } else {
        echo "$numero não é primo<br>";
    }

    function perfeito($numero) {

    if ($numero <= 1) {
        return false;
    }

    $somaDivisores = 0;

    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }

    return $somaDivisores == $numero;
}

    if (perfeito($numero)) {
        echo "$numero é perfeito";
    } else {
        echo "$numero não é perfeito";
    }


}

analisarNumero(5);

?>
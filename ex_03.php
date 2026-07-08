<?php

function mascararCpf($texto)
{
    $textoMascarado = preg_replace('/./', '*', $texto);

    $textoVisivel = substr($texto, -4);

    // $textoOculto = array_splice($textoMascarado, -4);

    $cpfMascarado = "$textoMascarado" . "$textoVisivel";

    return $cpfMascarado;
}

$cpf = "12345678910";
$cpfFinal = mascararCpf($cpf);

echo $cpfFinal;

?>
<?php

function inverterTexto($texto){

    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);

    $caracteresInvertidos = array_reverse($caracteres);

    $textoInvertido = implode('', $caracteresInvertidos);

    $quantidadeCaracteres = mb_strlen($texto);

    return[
        "invetido" => $textoInvertido,
        "quantidade" => $quantidadeCaracteres
    ];

}

$texto_usuario = "Programação em PHP!"
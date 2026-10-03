<!-- Exercício 03 – Cadastro Seguro
Um sistema de cadastro precisa proteger informações sensíveis dos usuários.
Crie uma função chamada mascararCpf() que receba um CPF e substitua todos os
caracteres por *, mantendo visíveis apenas os quatro últimos dígitos.
Retorne o CPF mascarado -->

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
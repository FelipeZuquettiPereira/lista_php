<?php

function gerarSenha()
{
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*123456789";
    $sorteioNumero = rand(5, 10);

    $senha = "";

    for ($i = 0; $i < $sorteioNumero; $i ++)
    {   
        $senha .= $caracteres[rand(0, strlen($caracteres)-1)];
    }

    

    return $senha;
}

echo gerarSenha();

?>
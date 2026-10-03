<!-- Exercício 04 – Gerador de Senhas
Uma empresa deseja gerar senhas temporárias para seus colaboradores.
Crie uma função chamada gerarSenha() que receba a quantidade de caracteres
desejada e retorne uma senha aleatória contendo letras maiúsculas, minúsculas,
números e caracteres especiais. -->

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
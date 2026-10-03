<!-- Exercício 13 – Criptografia Simples
Uma empresa deseja proteger pequenas mensagens antes de armazená-las em seu
sistema.
Crie uma função chamada criptografarMensagem() que receba um texto e aplique
uma criptografia utilizando o método da Cifra de César.
Em seguida, crie outra função chamada descriptografarMensagem() capaz de
recuperar o texto original. -->

<?php 
function criptografarMensagem($mensagem){ 
    $alfabetoOriginal = 'abcdefghijklmnopqrstuvwxyz'; 
    $alfabetoCriptografado = 'fghijklmnopqrstuvwxyzabcde'; 
    $mensagemCriptografada = strtr($mensagem, $alfabetoOriginal, $alfabetoCriptografado); 
    echo "A mensagem Criptografada: " . $mensagemCriptografada; 
    return $mensagemCriptografada;
} 

$resultadoCriptografado = criptografarMensagem('bom dia Icaro'); 

echo "<br>";

function descriptografarMensagem($mensagemCriptografada){ 
    $alfabetoOriginal = 'abcdefghijklmnopqrstuvwxyz'; 
    $alfabetoCriptografado = 'fghijklmnopqrstuvwxyzabcde'; 
    $mensagemDescriptografada = strtr($mensagemCriptografada, $alfabetoCriptografado, $alfabetoOriginal); 
    echo "A mensagem Descriptografada: " . $mensagemDescriptografada; 
} 

descriptografarMensagem($resultadoCriptografado); 
?>

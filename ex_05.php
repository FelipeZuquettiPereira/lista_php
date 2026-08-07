<?php

function analisarTexto($texto){

    $palavras = str_word_count($texto);
    $caracteres = mb_strlen($texto);
    $vogais = preg_match_all('/[aeiouáéíóúãõâêîôû]/ui', $texto);
    $consoantes = preg_match_all('/[b-df-hj-np-tv-z]/i', $texto);

    echo "Palavras: ". $palavras ."<br>"; 
    echo "Caracteres: ". $caracteres ."<br>";
    echo "Vogais: ". $vogais ."<br>"; 
    echo "Consoantes: ". $consoantes; 
}
 
$texto = "Texto de exemplo";

analisarTexto($texto);

?>

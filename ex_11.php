<!-- Exercício 11 – Formatador de Relatórios
Uma empresa deseja padronizar automaticamente seus relatórios.
Crie uma função chamada formatarTexto() que receba um texto e retorne:
● O texto totalmente em letras maiúsculas;
● O texto totalmente em letras minúsculas;
● A primeira letra de cada palavra em maiúscula;
● A quantidade total de caracteres.
 -->


 <?php
 
function formatarTexto($texto){
    $maiusculas = mb_strtoupper($texto, 'UTF-8');
    $minusculas = mb_strtolower($texto, 'UTF-8');
    $primeira_maiuscula = mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8');
    $quantidade = mb_strlen($texto, 'UTF-8');

    echo "Texto em maiúsculas: " . $maiusculas . "<br>";
    echo "Texto em minúsculas: " . $minusculas . "<br>";
    echo "Primeira letra de cada palavra em maiúscula: " . $primeira_maiuscula . "<br>";
    echo "Quantidade total de caracteres: " . $quantidade . "<br>";

}
    formatarTexto("Muita show de Bolíce");
 ?> 
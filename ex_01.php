<!-- Exercício 01 – Calculadora da Engenharia
Uma empresa de engenharia precisa automatizar alguns cálculos utilizados em seus
projetos.
Crie uma função chamada calcularFormula() que receba dois números e aplique a
seguinte fórmula:
(x2+y2)÷(x+y)
Retorne ao resultado da operação.
Caso a soma seja igual a zero, informe que não é possível realizar a divisão.
 -->

<?php

function calcularFormula($x, $y)
{
    if(($x + $y) == 0){
        return "Não é possivel essa divisão.";
    }

    $resultado = (pow($x,2) + pow($y,2)) / ($x + $y);

    return $resultado;
}

$x = 10;
$y = 5;

echo "Valor de x: $x <br>";
echo "Valor de y: $y <br><br>";
echo "Resultado: ". calcularFormula($x, $y);

?>
<?php


// (x² + y²)² / (x + y)

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

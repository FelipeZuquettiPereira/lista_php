<!-- Exercício 07 – Sistema de Descontos
Uma loja virtual oferece descontos conforme o valor da compra.
Crie uma função chamada calcularDesconto() que receba o valor total da compra
e aplique as seguintes regras:
● Até R$ 100,00: sem desconto;
● Acima de R$ 100,00: 10%;
● Acima de R$ 500,00: 20%;
● Acima de R$ 1.000,00: 30%.
Retorne o valor original, o desconto aplicado e o valor final da compra. -->

<?php

function calcularDesconto($valor){

    if($valor <= 100){
        $desconto = 0;
        $valorFinal = $valor;    
    }elseif ($valor > 100 && $valor < 500) {
        $desconto = $valor * 0.1;
        $valorFinal = $valor - $desconto;
    }elseif ($valor > 500 && $valor < 1000) {
        $desconto = $valor * 0.2;
        $valorFinal = $valor - $desconto;
    }else{
        $desconto = $valor * 0.3;
        $valorFinal = $valor - $desconto;
    }

    echo "Valor original da Compra: ". $valor . " R$<br>";
    echo "Desconto aplicado: " . $desconto . " R$<br>";
    echo " Valor final da compra:" . $valorFinal . " R$<br>";

}

calcularDesconto(612.65);

?>
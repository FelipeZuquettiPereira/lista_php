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
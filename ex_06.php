<?php

function converterTemperatura($temperatura, $escala, $escala_destino){

if($escala === "°C"){
    $resultado_Fahrenheit = $temperatura * 1.8 + 32;
    $resultado_Kelvin = $temperatura + 273;
    echo "Temperatura original: " . $temperatura . $escala ."<br>";
    
    
}elseif($escala === "°F"){
    $resultado_Celsius = $temperatura / 1.8 - 32;
    $resultado_Kelvin = (($temperatura - 32) * 5) / 9 + 273.15;
    echo "Temperatura original: " . $temperatura . $escala . "<br>";
    
    
}else{
    $resultado_Celsius = $temperatura - 273;
    $resultado_Fahrenheit = ($temperatura - 273.15) * 1.8 + 32;
    echo "Temperatura original: " . $temperatura . $escala . "<br>";
    
    
}

if($escala_destino === $escala){
    echo "Não há conversão";
}elseif($escala ==="°C" && $escala_destino === "F"){
    echo "Temperatura em Fahrenheit: " . $resultado_Fahrenheit . "°F<br>"; 
}elseif($escala ==="°C" && $escala_destino === "K"){
    echo "Temperatura em Kelvin: " . $resultado_Kelvin . "K<br>"; 
}elseif($escala ==="°F" && $escala_destino === "°C"){
    echo "Temperatura em Celsius: " . $resultado_Celsius . "°C<br>";
}elseif($escala ==="°F" && $escala_destino === "K"){
    echo "Temperatura em Kelvin: " . $resultado_Kelvin . "K<br>"; 
}elseif($escala ==="K" && $escala_destino === "°C"){
    echo "Temperatura em Celsius: " . $resultado_Celsius . "°C<br>";
}elseif($escala ==="K" && $escala_destino === "°F"){
    echo "Temperatura em Fahrenheit: " . $resultado_Fahrenheit . "°F<br>";
}

}

converterTemperatura(34,"°C","K");

?>
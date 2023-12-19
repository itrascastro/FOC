<?php
// Definición de funciones

// Función que suma dos números y devuelve el resultado
function sumar($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}

// Función que calcula el área de un círculo y devuelve el resultado
function calcularAreaCirculo($radio) {
    $area = pi() * pow($radio, 2);
    return $area;
}

// Función que verifica si un número es par y devuelve true o false
function esPar($numero) {
    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

// Función que concatena dos cadenas y devuelve el resultado
function concatenarCadenas($cadena1, $cadena2) {
    $resultado = $cadena1 . $cadena2;
    return $resultado;
}

// Llamadas a las funciones y muestra de resultados

$num1 = 5;
$num2 = 3;
$resultadoSuma = sumar($num1, $num2);
echo "La suma de $num1 y $num2 es: $resultadoSuma<br>";

$radio = 2.5;
$areaCirculo = calcularAreaCirculo($radio);
echo "El área de un círculo con radio $radio es: $areaCirculo<br>";

$numero = 7;
if (esPar($numero)) {
    echo "$numero es un número par<br>";
} else {
    echo "$numero no es un número par<br>";
}

$cadena1 = "Hola";
$cadena2 = "Mundo";
$cadenaConcatenada = concatenarCadenas($cadena1, $cadena2);
echo "La concatenación de \"$cadena1\" y \"$cadena2\" es: $cadenaConcatenada<br>";
?>

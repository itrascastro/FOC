<?php

// Obtener los números ingresados por el usuario
$base = $_GET['base'];
$exponente = $_GET['exponente'];

if (empty($base) || empty($exponente)) {
    echo "<h1>Error: Base and exponent parameters are required.</h1>";
    exit;
}

    // Calcular la potencia utilizando bucle for
    $resultadoFor = 1;
    for ($i = 1; $i <= $exponente; $i++) {
        $resultadoFor *= $base;
    }

    // Calcular la potencia utilizando bucle while
    $resultadoWhile = 1;
    $j = 1;
    while ($j <= $exponente) {
        $resultadoWhile *= $base;
        $j++;
    }

    // Calcular la potencia utilizando bucle do while
    $resultadoDoWhile = 1;
    $k = 1;
    do {
        $resultadoDoWhile *= $base;
        $k++;
    } while ($k <= $exponente);

    // Mostrar los resultados
    echo "<h1>Parámetros:</h1>";
    echo "<h1>Base: " . $base . "</h1>";
    echo "<h1>Exponente: " . $exponente . "</h1>";
    echo "<h1>Resultados:</h1>";
    echo "<h1>Utilizando bucle for: " . $resultadoFor . "</h1>";
    echo "<h1>Utilizando bucle while: " . $resultadoWhile . "</h1>";
    echo "<h1>Utilizando bucle do while: " . $resultadoDoWhile . "</h1>";
    

// Calcular la potencia utilizando bucle for
$resultadoFor = 1;
for ($i = 1; $i <= $exponente; $i++) {
    $resultadoFor *= $base;
}

// Calcular la potencia utilizando bucle while
$resultadoWhile = 1;
$j = 1;
while ($j <= $exponente) {
    $resultadoWhile *= $base;
    $j++;
}

// Calcular la potencia utilizando bucle do while
$resultadoDoWhile = 1;
$k = 1;
do {
    $resultadoDoWhile *= $base;
    $k++;
} while ($k <= $exponente);



// Mostrar los resultados
echo "<h1>Parámetros:</h1>";
echo "<h1>Base: " . $base . "</h1>";
echo "<h1>Exponente: " . $exponente . "</h1>";
echo "<h1>Resultados:</h1>";
echo "<h1>Utilizando bucle for: " . $resultadoFor . "</h1>";
echo "<h1>Utilizando bucle while: " . $resultadoWhile . "</h1>";
echo "<h1>Utilizando bucle do while: " . $resultadoDoWhile . "</h1>";
?>

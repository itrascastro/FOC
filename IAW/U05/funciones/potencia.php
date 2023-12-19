<?php
// FILEPATH: /c:/xampp/htdocs/php/unidad5/funciones/potencia.php

// Check if the base and exponent parameters are provided
if (isset($_GET['base']) && isset($_GET['exponente'])) {
    // Get the base and exponent values from the parameters
    $base = $_GET['base'];
    $exponente = $_GET['exponente'];

    // Function to calculate the power using a loop
    function potencia($base, $exponente) {
        $resultado = 1;
        for ($i = 0; $i < $exponente; $i++) {
            $resultado *= $base;
        }
        return $resultado;
    }

    // Call the potencia function and store the result
    $resultado = potencia($base, $exponente);

    // Format the parameters and result as h1
    echo "<h1>Base: $base</h1>";
    echo "<h1>Exponente: $exponente</h1>";
    echo "<h1>Resultado: $resultado</h1>";
} else {
    echo "<h1>Error: Base and exponent parameters are required.</h1>";
}
?>

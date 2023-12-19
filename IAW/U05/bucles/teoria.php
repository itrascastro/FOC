<!DOCTYPE html>
<html>
<head>
    <title>Ejemplos de bucles en PHP</title>
</head>
<body>
    <h1>Ejemplos de bucles en PHP</h1>

    <?php
    // Ejemplo de bucle for
    echo "<h2>Bucle for:</h2>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteración $i<br>";
    }

    // Ejemplo de bucle while
    echo "<h2>Bucle while:</h2>";
    $j = 1;
    while ($j <= 5) {
        echo "Iteración $j<br>";
        $j++;
    }

    // Ejemplo de bucle do while
    echo "<h2>Bucle do while:</h2>";
    $k = 1;
    do {
        echo "Iteración $k<br>";
        $k++;
    } while ($k <= 5);
    ?>
</body>
</html>

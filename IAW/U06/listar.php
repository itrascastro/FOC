<?php
// FILEPATH: /c:/xampp/htdocs/FOC/IAW/U06/listar.php

// Incluir el archivo de conexión
require_once 'conexion.php';

// Consulta para obtener todos los productos
$query = "SELECT * FROM productos";
$result = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title>U06 - Listar</title>
        <meta charset="UTF-8">
    </head>
    <body>

        <h1>Listado de productos</h1>

        <div>

            <?php
            // Verificar si la consulta fue exitosa
            if ($result) {
                // Recorrer los resultados y mostrar los productos
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<strong>ID</strong>: " . $row['id'] . "<br>";
                    echo "<strong>Nombre</strong>: " . $row['nombre'] . "<br>";
                    echo "<strong>Precio</strong>: " . $row['precio'] . "<br>";
                    echo "<br><br>";
                }
            } else {
                echo "Error al obtener los productos: " . mysqli_error($conexion);
            }

            // Cerrar la conexión
            mysqli_close($conn);
            ?>

        </div>

    </body>
</html>


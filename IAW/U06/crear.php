<?php
// FILEPATH: /c:/xampp/htdocs/FOC/IAW/U06/crear.php
require_once 'conexion.php';

// Crear tabla "productos" in la base de datos "foc"
$sql = "CREATE TABLE IF NOT EXISTS productos2 (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    precio int(10) UNSIGNED NOT NULL
  )";

if ($conn->query($sql) === TRUE) {
    $mensaje = "Tabla 'productos' creada correctamente";
} else {
    $mensaje = "Error al crear la tabla: " . $conn->error;
}

$conn->close();

?>

<html>
    <body>
        <div>
            <h1>Crear tabla</h1>

            <div>
                <?php
                    echo $mensaje;
                ?>
            </div>

            <div>
                <a href="nuevo.html">Crear Producto</a>
            </div>
        </div>
    </body>

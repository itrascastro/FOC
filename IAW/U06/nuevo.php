<?php
// FILEPATH: /c:/xampp/htdocs/FOC/IAW/U06/nuevo.php

// Incluir el archivo de conexión
require_once 'conexion.php';

// Verificar si se recibieron los datos por POST
if (isset($_POST['nombre']) && isset($_POST['precio'])) {

    // Obtener los datos del POST
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    // Consulta para insertar el producto
    $query = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Verificar si la consulta fue exitosa
    if ($result) {
        $mensaje = "Producto insertado exitosamente";
    } else {
        $mensaje = "Error al insertar el producto: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
} else { // No viene del formulario
    header("Location: nuevo.html");
}
?>
<html>
    <body>
    
            <h1>Añadir Producto</h1>
    
            <div>
    
                <?php
                    echo $mensaje;
                ?>

                <div>
                    <a href="listar.php">Listar productos</a><br>
                    <a href="nuevo.html">Insertar otro producto</a>
                </div>
    
            </div>
    </body>
</html>
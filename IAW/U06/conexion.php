<?php
$servername = "localhost";
$username = "foc";
$password = "1234";
$dbname = "foc";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos FOC";

?>

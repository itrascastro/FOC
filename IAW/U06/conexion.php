<?php
$servername = "localhost";
$username = "foc";
$password = "1234";
$dbname = "foc";

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión con la base de datos
if (!$conn) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

echo "Conexión exitosa a la base de datos FOC";

?>

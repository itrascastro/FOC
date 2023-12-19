<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login-form.html');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Zona Privada</title>
</head>
<body>
    <h1>Zona Privada</h1>
    <a href="logout.php">Logout</a>
</body>
</html>

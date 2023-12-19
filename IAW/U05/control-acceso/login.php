<?php
session_start();

// Valores constantes para el usuario y contraseña
define('USUARIO_CORRECTO', 'admin');
define('CONTRASENA_CORRECTA', '1234');

// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password'];

    // Comprobar si el usuario y contraseña son correctos
    if ($usuario === USUARIO_CORRECTO && $contrasena === CONTRASENA_CORRECTA) {
        // Crear variable de sesión para el usuario
        $_SESSION['usuario'] = $usuario;
        $_SESSION['loggedin'] = true;

        // Redirigir a private.php
        header('Location: private.php');
        exit;
    } else {
        // Redirigir de nuevo al formulario
        header('Location: login-form.html');
        exit;
    }
}
?>

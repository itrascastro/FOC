<?php
// FILEPATH: /c:/xampp/htdocs/php/unidad5/control-acceso/logout.php

// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al formulario de login
header("Location: login-form.html");
exit;
?>

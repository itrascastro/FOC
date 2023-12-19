
<?php
// FILEPATH: /c:/xampp/htdocs/php/unidad5/sesiones/teoria.php

// Iniciar la sesión
session_start();

// Botón para destruir la sesión
echo '<form method="POST" action="' . $_SERVER["PHP_SELF"] . '">';
echo '<input type="hidden" name="destroy_session" value="true">';
echo '<input type="submit" value="Destruir sesión">';
echo '</form>';

// Destruir la sesión si se ha enviado la solicitud
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["destroy_session"])) {
    session_destroy();
    unset($_SESSION); //necesario para que se destruya la sesión
    echo "La sesión ha sido destruida.";
}

// Comprobar si se ha enviado el formulario y no se ha solicitado destruir la sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["destroy_session"])) {
    // Almacenar los valores recibidos en variables de sesión
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["email"] = $_POST["email"];
}

// Comprobar si existen las variables de sesión
if (isset($_SESSION["nombre"]) && isset($_SESSION["email"])) {
    // Mostrar los valores almacenados en las variables de sesión
    echo "Valores almacenados en la sesión:<br>";
    echo "Nombre: " . $_SESSION["nombre"] . "<br>";
    echo "Email: " . $_SESSION["email"] . "<br>";
} else {
    echo "Aún no se ha creado la sesión.";
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Uso de sesiones en PHP</title>
</head>
<body>
    <h1>Uso de sesiones en PHP</h1>
    <p>Esta página muestra cómo utilizar sesiones en PHP para almacenar valores recibidos desde un formulario.</p>
    
    <h2>Formulario</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

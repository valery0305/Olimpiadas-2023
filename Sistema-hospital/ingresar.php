<?php
require 'conexion.php';
// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Consultar la base de datos para verificar las credenciales
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        // Usuario encontrado, verificar la contraseña
        $row = $result->fetch_assoc();
        $contrasena_en_db = $row["contrasena"];

        // Verificar la contraseña ingresada con la contraseña almacenada en la base de datos
        if ($contrasena == $contrasena_en_db) {
            // Contraseña válida, permitir el acceso (aquí puedes redirigir al usuario a la página de inicio)
            header("Location: pacientes.php");
            exit;
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "Usuario no encontrado.";
    }
}


?>

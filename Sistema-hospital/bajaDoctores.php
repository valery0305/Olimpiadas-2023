<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $doctor = $_POST["dni"];
   
        // Insertar los datos en la base de datos
        $sql = "DELETE FROM doctores WHERE dni=$doctor";
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: doctores.php");
        } else {
            echo "Error al eliminar el registro " . $conexion->error;
        }
    }


?>

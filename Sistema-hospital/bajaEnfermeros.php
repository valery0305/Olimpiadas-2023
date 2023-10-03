<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $enfermero = $_POST["dni"];
   
        // Insertar los datos en la base de datos
        $sql = "DELETE FROM enfermeros WHERE dni=$enfermero";
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: enfermeros.php");
        } else {
            echo "Error al eliminar el registro " . $conexion->error;
        }
    }


?>

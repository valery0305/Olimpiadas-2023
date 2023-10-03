<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $paciente = $_POST["dni"];
   
        // Insertar los datos en la base de datos
        $sql = "DELETE FROM pacientes WHERE dni=$paciente";
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: pacientes.php");
        } else {
            echo "Error al eliminar el registro " . $conexion->error;
        }
    }


?>

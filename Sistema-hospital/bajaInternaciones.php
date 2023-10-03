<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $internacion = $_POST["dni"];
   
        // Insertar los datos en la base de datos
        $sql = "DELETE internaciones
        FROM internaciones
        LEFT JOIN pacientes ON internaciones.paciente_id = pacientes.paciente_id
        WHERE pacientes.dni=$internacion";
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: internaciones.php");
        } else {
            echo "Error al eliminar el registro " . $conexion->error;
        }
    }


?>

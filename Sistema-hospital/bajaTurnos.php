<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $turno = $_POST["dni"];
   
        // Insertar los datos en la base de datos
        $sql = "DELETE turnos
        FROM turnos
        LEFT JOIN pacientes ON turnos.paciente_id = pacientes.paciente_id
        WHERE pacientes.dni=$turno";
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: turnos.php");
        } else {
            echo "Error al eliminar el registro " . $conexion->error;
        }
    }


?>

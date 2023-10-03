<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $doctor = $_POST["doctor"];
    $paciente = $_POST["paciente"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
  

    

  
       
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO turnos (doctor_id, paciente_id, fecha, hora) VALUES ('$doctor', '$paciente','$fecha','$hora')";
        
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: turnos.php");
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }


?>

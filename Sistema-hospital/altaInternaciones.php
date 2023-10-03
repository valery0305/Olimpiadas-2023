<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $doctor = $_POST["doctor"];
    $paciente = $_POST["paciente"];
    $fecha = $_POST["fecha"];
   
  

    

  
       
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO internaciones (doctor_id, paciente_id, fecha_internacion) VALUES ('$doctor', '$paciente','$fecha')";
        
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: internaciones.php");
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }


?>

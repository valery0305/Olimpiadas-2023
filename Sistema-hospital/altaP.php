<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $direccion= $_POST["direccion"];
    $historialM = $_POST["historial_medico"];
    

  
       
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO pacientes (nombre, apellido, dni, fecha_nacimiento, historial_medico,direccion) VALUES ('$nombre', '$apellido', '$dni','$fecha_nacimiento','$historialM','$direccion')";
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: pacientes.php");
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }


?>

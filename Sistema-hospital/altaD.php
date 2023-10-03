<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $zona= $_POST["zona"];

    

  
       
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO doctores (nombre, apellido, fecha_ingreso, dni, zona_id) VALUES ('$nombre', '$apellido','$fecha_ingreso','$dni','$zona')";
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: doctores.php");
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }


?>

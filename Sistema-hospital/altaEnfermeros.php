<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $zona = $_POST["zona"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
   

    

  
       
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO enfermeros (nombre, apellido,dni, fecha_ingreso, zona_id) VALUES ('$nombre', '$apellido','$dni','$fecha_ingreso', '$zona')";
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: Enfermeros.php");
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }


?>

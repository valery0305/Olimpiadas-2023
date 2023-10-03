<?php
require 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $descripcion = $_POST["descripcion"];
    $num = $_POST["num"];

   
  

    

  
       
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO zonas (descripcion, num_zona) VALUES ('$descripcion', '$num')";
        
        
    
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: zonas.php");
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }


?>

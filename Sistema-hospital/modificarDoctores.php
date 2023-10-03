<?php
require 'conexion.php';
require 'buscarDoctor.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $zona= $_POST["zona"];
    

  
       
        // Insertar los datos en la base de datos
        $sql = "UPDATE `doctores` SET `nombre`='$nombre',`apellido`='$apellido',`fecha_ingreso`='$fecha_ingreso',`zona_id`='$zona',`dni`='$dni'  WHERE dni LIKE '%$consulta%'";
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: doctores.php");
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }


?>

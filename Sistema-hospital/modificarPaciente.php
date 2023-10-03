<?php
require 'conexion.php';
require 'buscarPaciente.php';

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
        $sql = "UPDATE `pacientes` SET `nombre`='$nombre',`apellido`='$apellido',`dni`='$dni',`fecha_nacimiento`='$fecha_nacimiento',`direccion`='$direccion',`historial_medico`='$historialM' WHERE dni LIKE $consulta";
    
        if ($conexion->query($sql) === TRUE) {
            header("Location: pacientes.php");
        } else {
            echo "Error al registrar el usuario: " . $conexion->error;
        }
    }


?>

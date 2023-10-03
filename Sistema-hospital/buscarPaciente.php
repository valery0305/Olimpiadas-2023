<?php
require 'conexion.php';

$consulta = $_GET['dni_paciente'];

// Realiza la consulta SQL en la base de datos
$buscar = "SELECT * FROM pacientes WHERE dni LIKE '%$consulta%'";
$result = $conexion->query($buscar);

// Muestra los resultados
if ($result->num_rows > 0) {
  
  header("Location: modificarP.php");
} else {
    echo "<p>No se encontraron resultados.</p>";
}


?>

<?php
require 'conexion.php';

$consulta = $_GET['consulta'];

// Realiza la consulta SQL en la base de datos
$sql = "SELECT * FROM doctores WHERE dni LIKE '%$consulta%'";
$result = $conexion->query($sql);

// Muestra los resultados
if ($result->num_rows > 0) {
  header("Location: modificarD.php");
} else {
    echo "<p>No se encontraron resultados.</p>";
}


?>

<?php
// Incluir archivo de conexión
include 'conexion.php';

// Consulta SQL para obtener los registros de la tabla 'names'
$sql = "SELECT nombre, apellido, fecha_nacimiento FROM names";
$result = $conn->query($sql);

$datos = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}

// Devolver los datos como JSON
header('Content-Type: application/json');
echo json_encode($datos);

// Cerrar la conexión
$conn->close();
?>

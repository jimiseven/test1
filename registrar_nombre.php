<?php
// Incluir archivo de conexión
include 'conexion.php';

// Verificar si se enviaron los datos por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO names (nombre, apellido, fecha_nacimiento) VALUES (?, ?, ?)";

    // Usar prepared statements para evitar inyección SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $apellido, $fecha_nacimiento);

    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        // Redirigir al formulario con un mensaje de éxito
        header("Location: index.html?mensaje=success");
        exit();
    } else {
        // Redirigir con un mensaje de error
        header("Location: index.html?mensaje=error");
        exit();
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}
?>

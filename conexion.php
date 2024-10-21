<?php
// Datos de conexión a la base de datos de Railway
$servername = "junction.proxy.rlwy.net";  // Host de Railway
$username = "root";                        // Usuario de MySQL
$password = "zwdEBASXYztjOFVqCxBeFVSYtlvblwBI";  // Contraseña de MySQL
$dbname = "test1";                         // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Conexión exitosa
?>

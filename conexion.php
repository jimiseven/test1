<?php
// Datos de conexión a la base de datos
$servername = "junction.proxy.rlwy.net";  // Cambia si es necesario (por defecto es localhost)
$username = "root";         // Nombre de usuario de MySQL (por defecto es root)
$password = "zwdEBASXYztjOFVqCxBeFVSYtlvblwBI";             // Contraseña de MySQL (deja vacío si no tiene contraseña)
$dbname = "railway";          // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Si llegas aquí, la conexión es exitosa
// echo "Conexión exitosa a la base de datos";
?>

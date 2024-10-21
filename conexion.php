
<?php
// Usar las variables de entorno proporcionadas por Railway
$servername = getenv('junction.proxy.rlwy.net');    // Host de Railway
$username = getenv('root');      // Usuario MySQL en Railway
$password = getenv('zwdEBASXYztjOFVqCxBeFVSYtlvblwBI');  // Contraseña de MySQL en Railway
$dbname = getenv('railway');        // Nombre de la base de datos en Railway

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Conexión exitosa
?>

<?php
// Conexión a la base de datos MySQL
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$database = "nombre_base_de_datos";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$odontologo = $_POST['odontologo'];

// Preparar la consulta SQL
$sql = "INSERT INTO citas (nombre, apellido, fecha, hora, odontologo) VALUES ('$nombre', '$apellido', '$fecha', '$hora', '$odontologo')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Cita registrada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

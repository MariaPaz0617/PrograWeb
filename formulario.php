<?php
// Datos conexión
$servername = "localhost";
$username = "root"; // Usuario por defecto en XAMPP
$password = "";     // Por defecto viene vacío
$database = "formulario_db";

//Conexión
$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono) 
        VALUES ('$nombre', '$apellido', '$correo', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Registro exitoso";
    echo "<br><a href='formulario.html'>Volver al formulario</a>";
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

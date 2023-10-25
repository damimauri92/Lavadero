<?php
// Conectar a la base de datos (reemplaza 'localhost', 'usuario', 'contraseña' y 'nombre_bd' con tus propios valores)
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'nombre_bd');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$patente = $_POST['patente'];
$vehiculo = $_POST['vehiculo'];
$fecha = $_POST['fecha'];

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, patente, vehiculo, fecha) VALUES ('$nombre', '$patente', '$vehiculo', '$fecha')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>

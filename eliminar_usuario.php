<?php
$conexion = mysqli_connect("localhost", "root", "root", "login_register_db");

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener el id del usuario a eliminar
$idUsuario = 1; // Cambia esto según tu lógica para obtener el id del usuario

// Consulta para eliminar el usuario
$sql = "DELETE FROM usuarios WHERE id = $idUsuario";
//ÇÇÇÇÇÇÇÇÇÇÇÇÇ$sql = "DELETE FROM usuarios WHERE idusuario = $idUsuario";

if (mysqli_query($conexion, $sql)) {
    echo "El usuario se eliminó correctamente";
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>

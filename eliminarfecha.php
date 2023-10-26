<?php

$inc = include("con_db.php");

if ($inc) {
    // Verificar si se proporcionó la fecha en la URL
    if (isset($_GET['fecha'])) {
        // Obtener la fecha de la URL
        $fecha = $_GET['fecha'];

        // Escapar la fecha para prevenir inyección de SQL (asumiendo que $conexion es la conexión a la base de datos)
        $fecha = mysqli_real_escape_string($conexion, $fecha);

        // Realizar la consulta de eliminación
        $sql = "DELETE FROM turnos WHERE fecha = '$fecha'";
        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "La fecha $fecha fue eliminada correctamente.";
        } else {
            echo "Error al eliminar la fecha: " . mysqli_error($conexion);
        }
    } else {
        echo "No se proporcionó una fecha para eliminar.";
    }
}

?>

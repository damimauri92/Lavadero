<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="stylead.css">
</head>
<body>

<div class="container">
    <?php
    $esAdmin = true; // Simula la condición de administrador
    if ($esAdmin) {
        echo "<h2>Usuarios Registrados (Administrador)</h2>";
    } else {
        echo "<h2>Usuarios Registrados</h2>";
    }
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Patente</th>
            <th>Fecha de Turno</th>
            <th>Eliminar Turno</th>
            <th>Eliminar Usuario</th>
        </tr>
        <!-- Aca muestra los datos de la base de datos usando PHP -->
        <?php
        include("pruebamostrar.php");
        ?>


    </table>
</div>

</body>
</html>

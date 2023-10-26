<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Datos del usuario</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Patente</th>
            <th>Fecha de Turno</th>
            <th>Eliminar Fecha</th>
        </tr>
       
        <?php
        include("procesar.php");
        ?>
    </table>
</div>

</body>
</html>

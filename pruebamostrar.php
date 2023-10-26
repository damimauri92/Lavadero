<?php 
        $inc = include("con_db.php");
       
        //consulta1
        $sql1 = "SELECT nombre FROM usuarios WHERE idusuario = 1";
        $result1 = $conexion->query($sql1);
        // Mostrar resultados de la Consulta 2
        while ($row1 = $result1->fetch_assoc()) {
            echo "<tr><td>" . $row1['nombre'] . "</td>";
        }

        //consulta2
        $sql2 = "SELECT patente FROM autos WHERE idCliente = 1 ";
        $result2 = $conexion->query($sql2);

        // Mostrar resultados de la Consulta 2
        while ($row2 = $result2->fetch_assoc()) {
        echo "<td>" . $row2['patente'] . "</td>";
        }
        
        //consulta3
         $sql3 = "SELECT fecha FROM turnos WHERE usuario_id = 1";
         $result3 = $conexion->query($sql3);
 
         // Mostrar resultados de la Consulta 3
         while ($row3 = $result3->fetch_assoc()) {
        echo "<td>" . $fecha = $row3['fecha'] . "</td>";
        ?>
        <td><button onclick="eliminarFecha('<?php echo $fecha; ?>')">Eliminar</button></td>
        <td><button onclick="eliminarUsuario()">Eliminar Usuario</button></td></tr>
        <?php
        
        }

?>
<script>
    function eliminarFecha(fecha) {
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar la fecha: " + fecha + "?");

        if (confirmacion) {
            window.location.href = "eliminarfecha.php?fecha=" + fecha;
        }
    }
    function eliminarUsuario() {
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar este usuario?");

        if (confirmacion) {
            window.location.href = "eliminar_usuario.php";
        }
    }
</script>

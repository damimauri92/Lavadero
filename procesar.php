<?php 
        $inc = include("con_db.php");

 /* session_start();
  if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("Para ver los registro debes estar logueado.");
        window.location="../login_register.php";
    </script>
    ';
    session_destroy();
    die();
  }else{
    $correo_usuario=$_SESSION['usuario'];
  }*/

  // Obtener el id del usuario que ha iniciado sesión.
  $mysqli = new mysqli("localhost","root","root", "login_register_db");
$query = "SELECT id FROM usuarios WHERE correo = '$correo_usuario'";

$consulta = $mysqli->query($query);

if ($consulta) {
    // Verificar si se encontraron resultados
    if ($consulta->num_rows > 0) {
        // Obtener la fila como un array asociativo
        $fila = $consulta->fetch_assoc();
        
        // Obtener el valor de la columna 'id'
        $usuario_id = $fila['id'];
        // Utiliza $usuario_id como necesites
    } else {
        // No se encontraron resultados para el correo proporcionado
        $usuario_id = null;
    }
    
    // Liberar el resultado
    $consulta->free();
} else {
    // Error en la consulta
    echo "Error: " . $mysqli->error;
}
        
/*     echo "<tr>";  
        //consulta1
     //   $sql1 = "SELECT nombre FROM usuarios WHERE idusuario = 1";
        $sql1 = "SELECT nombre FROM usuarios WHERE id = 9 or id=10";
        $result1 = $conexion->query($sql1);
        // Mostrar resultados de la Consulta 2
        while ($row1 = $result1->fetch_assoc()) {
            echo "<td>" . $row1['nombre'] . "</td>";
        }

        //consulta2
        $sql2 = "SELECT patente FROM autos WHERE idCliente = 9 or idCliente=10";
        $result2 = $conexion->query($sql2);

        // Mostrar resultados de la Consulta 2
        while ($row2 = $result2->fetch_assoc()) {
        echo "<td>" . $row2['patente'] . "</td>";
        }
        
        //consulta3
         $sql3 = "SELECT fecha FROM turnos WHERE usuario_id = 9 or usuario_id=10";
         $result3 = $conexion->query($sql3);
 
         // Mostrar resultados de la Consulta 3
         while ($row3 = $result3->fetch_assoc()) {
        echo "<td>" . $fecha = $row3['fecha'] . "</td>";
        ?>
        <td><button onclick="eliminarFecha('<?php echo $fecha; ?>')">Eliminar</button></td>
            <?php 
        }
        echo "</tr>";  
*/ 
        //consulta final
    //    $sql_final = "SELECT u.nombre as nombre, a.patente as patente, t.fecha as fecha, t.hora as hora FROM turnos t, usuarios u, autos a WHERE t.usuario_id=u.id";
        $sql_final = "SELECT u.nombre as nombre, a.patente as patente, t.fecha as fecha, t.hora as hora 
        FROM usuarios u
        JOIN turnos t ON u.id = t.usuario_id
        JOIN autos a ON u.id = a.idCliente
        where u.id=$usuario_id;";
        $result_final = $conexion->query($sql_final);

        //Rtas
        while ($array = $result_final->fetch_assoc()) {
            $fecha=$array['fecha'];
            echo "<tr><td>" . $array['nombre'] . "</td>"."<td>" .$array['patente'] . "</td>"."<td>" . $array['fecha'] . "</td>"."<td>" . $array['hora'] . "</td>";
            echo "<td><button onclick=\"eliminarFecha('$fecha')\">Eliminar</button></td></tr>";

            }
            
?>
<script>
    function eliminarFecha(fecha) {
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar la fecha: " + fecha + "?");

        if (confirmacion) {
            // Hacer una solicitud AJAX o redirigir a eliminar.php pasando la fecha como parámetro
            // Ejemplo de redirección:
            window.location.href = "eliminarfecha.php?fecha=" + fecha;
        }
    }
</script>






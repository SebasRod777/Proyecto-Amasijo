<?php
include "./controller/conexion.php";
$conexion = new Conexion();
$con = $conexion->conectarDB();
$id = ($_GET['id']);
$sql = "DELETE FROM suscripcion WHERE id= '$id'";

if ($con->query($sql) == true) {
}
$con->close();
$con = $conexion->conectarDB();
$sql = "SELECT * FROM suscripcion ";
$resultset = $con->query($sql);
if ($resultset->num_rows > 0) {
    while ($fila = $resultset->fetch_assoc()) {
        echo "<tr><td>" . $fila["Id"] . "</td><td>" . $fila["email"] . "</td><td>
                                <a class='btn btn-primary btn_eliminar '  type='button' onclick='confirmar(this.value)' value=" . $fila["Id"] . "'>Eliminar</a>
                                </td></tr>";
        //ile_put_contents("correos.txt", ($fila["Correo"]) . "\n", FILE_APPEND);
    }
}


?>
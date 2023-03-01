<?php
function db_query($query) {
    $connection = mysqli_connect("localhost","root","","proyecto");
    $result = mysqli_query($connection,$query);

    return $result;
}

if (!empty($_POST)) {
	$alert = "";
	if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['rol'])) {
	  $alert = '<p class"error">Todo los campos son requeridos</p>';
	} else {
	  $idusuario = $_GET['id'];
	  $nombre = $_POST['nombre'];
	  $correo = $_POST['correo'];
	  $usuario = $_POST['usuario'];
	  $rol = $_POST['rol'];
  
	  $sql_update = mysqli_query($conexion, "UPDATE usuario SET nombre = '$nombre', correo = '$correo' , usuario = '$usuario', rol = $rol WHERE idusuario = $idusuario");
	  $alert = '<p>Usuario Actualizado</p>';
	}
  }
?>

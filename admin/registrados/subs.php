<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>                                      
<script src="..../js/bootstrap.bundle.min.js"></script>
<title>ADMIN</title>
<style>
    .btn-flotante {
	font-size: 16px; /* Cambiar el tamaño de la tipografia */
	text-transform: uppercase; /* Texto en mayusculas */
	font-weight: bold; /* Fuente en negrita o bold */
	color: #ffffff; /* Color del texto */
	border-radius: 25px; /* Borde del boton */
	letter-spacing: 2px; /* Espacio entre letras */
	background-color: #06AC15; /* Color de fondo */
	padding: 18px 30px; /* Relleno del boton */
	position: fixed;
	bottom: 20px;
	right: 20px;
	transition: all 300ms ease 0ms;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
	z-index: 99;
}
.btn-flotante:hover {
	background-color: #08B25D;
	box-shadow: 0px 15px 20px rgb(104, 0, 210);
	transform: translateY(-9px);
}
@media only screen and (max-width: 600px) {
 	.btn-flotante {
		font-size: 14px;
		padding: 12px 20px;
		bottom: 20px;
		right: 20px;
	}
}
</style>	
<body style="background-image:url('./img/archivo.jpg'); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;background-attachment: fixed;">
<a href="./index.php" class="btn-flotante text-decoration-none">Admin</a>
 <?php
$servidor = "localhost";
$user = "root";
$password = "";
$database = "proyecto";
$con = new mysqli($servidor, $user, $password,$database);
$query = "SELECT * FROM suscripcion";

echo '<table id="tabla" class="text-center" border="1" cellspacing="2" cellpadding="2" style="background-color:#ffff;height: 30.66666px;width: 1136.66666px; ">';
echo '<tr style="background-color:#FAD7A0;"> ';
echo '<td class="text-black col-sm-3" > <font face="Arial"><b><button class="btn btn-warning text-left"><h3><span class="glyphicon glyphicon-download" aria-hidden="true"></span><a download="Correos.txt" href="reportes.php" class="text-decoration-none text-light"><p>Descargar</p></a></h3></button></b></h1></font></td><td class="text-black col-sm-6" ><h1>Correo de Usuarios</h1></td><td class="text-black col-sm-3"></td>'; 
echo '</tr>';

if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Id"];
        $field1name = $row["email"];
                       
        echo '<tr><td class="col-sm-3"><u>'.$row["Id"].'</u></td><td class="col-sm-5" >'.$row["email"].'</td><td class="col-sm-4 "><button class="btn btn-danger text-left" value="'.$row["Id"].'" onclick="borrar(this.value)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button></td></tr>';
    }
    $result->free();
}
?>	
</div>
<script>
function borrar(Id){
if(confirm("¿Está seguro de querer eliminar los datos?")){
const xhttp = new XMLHttpRequest;
xhttp.onload = function(){
    document.getElementById("tabla").innerHTML = this.responseText;
    alert('Eliminación Correcta');
};
xhttp.open("GET","./eliminar.php?id="+Id);
xhttp.send();
}
    }
</script>
</body>
</html>
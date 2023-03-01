<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./css/bootstrap.min.css"  rel="stylesheet">
	<link href="./libs/bootstrap-icons/bootstrap-icons.css"  rel="stylesheet">
	<script src="./js/bootstrap.bundle.min.js"></script>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
.btn-flotante {
	font-size: 16px; /* Cambiar el tamaño de la tipografia */
	text-transform: uppercase; /* Texto en mayusculas */
	font-weight: bold; /* Fuente en negrita o bold */
	color: #000000; /* Color del texto */
	border-radius: 25px; /* Borde del boton */
	letter-spacing: 2px; /* Espacio entre letras */
	background-color: #5BDE00; /* Color de fondo */
	padding: 18px 30px; /* Relleno del boton */
	position: fixed;
	bottom: 20px;
	right: 20px;
	transition: all 300ms ease 0ms;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
	z-index: 99;
}
.btn-flotante:hover {
	background-color: #0A7D08;
	box-shadow: 0px 15px 20px rgb(0, 222, 185);
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
</head>

<body class="m-0 vh-100 row justify-content-start align-items-centertext-center" style="background-image:url('../img/archivo.jpg'); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;background-attachment: fixed;">
    <div class="col-auto p-5 text-center">
<div class="main-wrapper" style="width: 900px;">
<h1>Inventario<a type="button" class="btn-flotante text-decoration-none" onclick="volver()">Volver</a>
        <script>
          function volver(){
            window.history.back();
          }
        </script></h1>
<br><br>

<?php
	include("function.php");
?>
<table border="1" width="100%" >
	<tr>
		<th class="border border-danger text-center" width="41%"><h2>Nombres</h2></th>
		<th class="border border-danger text-center" width="47%"><h2>Cantidad</h2></th>
        <th class="border border-danger text-center" width="6%"><h2>Lote</h2></th>
        <th class="border border-danger text-center" width="26%"><h2>Imagen</h2></th>
	</tr>
<?php 
	$sql = "select * from inventarioint";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td class="text-center"><?php echo $row->NombreInt;?></td>
		<td class="text-center"><?php echo $row->CantidadInt;?></td>
        <td class="text-center"><?php echo $row->LoteInt;?></td>
        <td><h3><?php echo "<img src='".$row->imagen."' width='200px' height='150px'>"; ?></h3></td>
	</tr>
	<?php } ?>
</table>
</div></div>
</body>
</html>
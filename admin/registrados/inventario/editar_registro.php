<?php
require("conectar.php");
$id = $_GET['EDITAR_ID'];
$sele = "SELECT * FROM productos where id='$id'";
$result = $conn->query($sele);
$row = mysqli_fetch_assoc($result);  
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>EDITAR PRODUCTOS</title>
<!--======================================= ESTILO DE LA TABLA PLOMO ==============================-->        
<link rel="stylesheet" type="text/css" href="total/ccs_form/view.css" media="all">

<script language="javascript" type="text/javascript">
function windowClose() {
window.open('','_parent','');
window.close();
}
</script>  
</head>
  

<?php
$status = "";
if(isset($_POST["enviar"]))
{
$producto= $_POST["producto"];
$serie= $_POST["serie"];
$fechaing= $_POST["fechaing"];
$id= $_POST["id"];
  
  
$update = 'UPDATE productos SET

producto=TRIM("'.$producto.'"),

serie=TRIM("'.$serie.'"),
      
fechaing=TRIM("'.$fechaing.'")
      
WHERE id=TRIM('.$id.')';
  
  
if ($conn->query($update) === TRUE) 
{
echo '<script type="text/javascript">'; 
echo 'alert("EDICION CORRECTA. YA PUEDE CERRAR ESTA VENTANA ");'; 
echo 'window.location = "javascript:history.back(1)";';
echo '</script>';
 
}
else
{
 
echo '<script type="text/javascript">'; 
echo 'alert("ERROR REVISAR SI FALTAN DATOS");'; 
echo 'window.location = "javascript:history.back(1)";';
echo '</script>';
}
 
}

else {
 
?> 
  
  
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	<h1><a>EDITAR PRODUCTOS </a></h1>
	<form id="form_18653" class="appnitro"  method="post" action="">
	<div class="form_description">
    <h2>EDITAR REGISTRO DE PRODUCTOS</h2>
	<p>Base de datos DBPRUEBAS</p>
	</div>						
	
    <ul >
      
      
    <input id="id" name="id"  class="element text small" type="hidden" maxlength="255" value="<?php echo $row['id'];?>"/> 
		
			
	<li id="li_2" >
	<label class="description" for="producto">NOMBRE DEL PRODUCTO : </label>
	<div>
	<input id="producto" name="producto" class="element text medium" type="text" maxlength="255" value="<?php echo $row['producto'];?>"/> 
	</div> 
	</li>
      
    <li id="li_3" >
	<label class="description" for="serie">NUMERO DE SERIE : </label>
	<div>
	<input id="serie" name="serie" class="element text medium" type="text" maxlength="255" value="<?php echo $row['serie'];?>"/> 
	</div> 
	</li>		


    <li id="li_4" >
	<label class="description" for="fechaing">FECHA : </label>
	<div>
	<input id="fechaing" name="fechaing" class="element text medium" type="text" maxlength="255" value="<?php echo $row['fechaing'];?>"/> 
	</div> 
	</li>	
			
	
    <li class="buttons">
	<input type="hidden" name="form_id" value="18653" />
	<input id="saveForm" class="button_text" type="submit" name="enviar" value="Editar" />
    <input class="button_text" type="submit" onclick="javascript: form.action='ver_tabla_pruebas.php';" value="Retornar" />      
                      
	</ul>
	</form>	
		
    <?php } ?>
      
	</div>
	</body>
</html>
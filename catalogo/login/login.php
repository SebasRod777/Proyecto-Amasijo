<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	</head>
	<body style="background-image:url('../../img/mountain.jpg'); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;background-attachment: fixed;">
	<?php include "php/navbar.php"; ?>
<div class="container text-center">
<div class="row"><br><br><br><br><br><br><br><br>
		<h2><mark style="background-color:#ffffff;">Login</mark></h2>

		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username"><mark style="background-color:#ffffff;">Nombre de usuario o email</mark></label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password" style="background-color:#ffffff;">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-lg" style="background-color:#00ABB3;"><FONT COLOR="white">Acceder</FONT></button><br><br><br><br><a type="button" class="btn btn-lg mt-5 text-white"  style="background-color:#00ABB3;" onclick="volver()"><FONT COLOR="white"><h4>Volver</h4></FONT></a>
        <script>
          function volver(){
            window.history.back();
          }
        </script>
		</form>
</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr style="background-color:#ffffff;">
<div class="bg-white text-secondary text-center" style="background-color:#ffffff;" >
        
        <i class="bi bi-c-circle me-2"></i> Todos los derechos reservados.
        2022-<?php echo date("Y"); ?>
    </div>
		<script src="js/valida_login.js"></script>
	</body>
</html>
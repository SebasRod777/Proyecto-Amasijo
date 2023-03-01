<?php 
session_start();



?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Registro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link href="../libs/bootstrap-icons/bootstrap-icons.css"  rel="stylesheet">
	<script src="../js/bootstrap.bundle.min.js"></script>

</head>
<body style="background-image:url('../../../img/mountain.jpg'); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;background-attachment: fixed;">
<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
     </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["user_id"])):?>
      <li><a href="#">REGISTRO</a></li>
      <li><a href="../login.php">LOGIN</a></li>
    <?php else:?>
      <li><a href="./php/logout.php">SALIR</a></li>
    <?php endif;?>
    </ul>

  </div><!-- /.navbar-collapse -->
</div>
</nav>
    <?php
    if(isset($_SESSION["ErrorDB"])){
        echo '<div class="alert alert-danger m-0">
        <strong>Error:</strong>';
        echo $_SESSION['ErrorDB'];
        echo '</div>';
        session_unset();
        session_destroy();
    }

    if(isset($_SESSION["Status"])){
        echo '<div class="alert alert-success m-0">
        <strong>Error:</strong> La operacion ha sido realizada.
        </div>';
        session_unset();
        session_destroy();
    }

    ?>
    <br><br><br>
    <div class="container mt-5 mb-5 text-center">
       
    <form action="inicio.php" method="POST" class="was-validated">
        <div class="form-floating m-4">
        <div class="invalid-feedback"><mark style="background-color:#ffffff;">Por favor llene este campo</mark></div>
            <label for="email"><i class="bi bi-person-fill"><h4><b><mark style="background-color:#ffffff;"> Nombre</mark></b></h4></i></label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" required>
            
            
        </div><br>

        <div class="form-floating m-4">
        <div class="invalid-feedback"><mark style="background-color:#ffffff;">Por favor llene este campo</mark></div>
            <label for="email"><i class="bi bi-envelope"><h4><b><mark style="background-color:#ffffff;"> Email</mark></b></h4></i></label>
            
            <input type="email" class="form-control" id="email" placeholder="Ingrese su email" name="email" required>
           
        </div><br>

        <div class="form-floating m-4">
        <label for="password"><i class="bi bi-lock"><h4><b> <mark style="background-color:#ffffff;">Password</mark></b></h4></i></label>
            <input type="password" class="form-control" id="password" placeholder="Ingrese su Email" name="password" required>
           
        </div><br><br>
        <div class="d-grid m-0">
            
                <button type="submit" style="background-color:#00ABB3;" class="btn btn-lg m-5" ><i class="bi bi-pc me-1">Configurar</i></button><br><br><br><a type="button" class="btn btn-lg mt-5 btn-warning text-white" onclick="volver()"><h5>Volver</h5></a>
        <script>
          function volver(){
            window.history.back();
          }
        </script>

        </div>
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><hr>
    <div class="bg-light text-secondary text-center">
        
     <mark style="background-color:#ffffff;"> <i class="bi bi-c-circle me-2">Todos los derechos reservados.
         <?php echo date("Y"); ?></i></mark>
    </div>
</body>
</html>
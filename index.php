<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta  name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="./css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="font.css">
  <link rel="stylesheet" href="main.css">
	<link href="./libs/bootstrap-icons/bootstrap-icons.css"  rel="stylesheet">
	<script src="./js/bootstrap.min.js"></script><script src="./js/bootstrap.bundle.min.js"></script>
<style>
	body {
background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
main {
padding-left: 240px;
}
}

/* Sidebar */
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 58px 0 0; /* Height of navbar */
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
width: 240px;
z-index: 600;
}

@media (max-width: 991.98px) {
.sidebar {
width: 100%;
}
}
.sidebar .active {
border-radius: 5px;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
position: relative;
top: 0;
height: calc(100vh - 48px);
padding-top: 0.5rem;
overflow-x: hidden;
overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
#logo{
  margin: auto;
  margin-left: 500px;
  text-align: center;
}
#logo h1{
   font-family: 'Pacifico', cursive;
   font-size: 34px;
 }
.slider {
	width: 65%;
	margin: auto;
	overflow: hidden;
}

.slider ul {
	display: flex;
	padding: 0;
	width: 600%;
	
	animation: cambio 15s infinite alternate linear;
}

.slider li {
	width: 100%;
	list-style: none;
}

.slider img {
	width: 100%;
}
@keyframes cambio {
	0% {margin-left: 0;}
	20% {margin-left: 0;}
	
	25% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	50% {margin-left: -200%;}
	70% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}
#inch {
  opacity: 0.95;
}
</style>
</head>
<!--
</html>-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
		<a href="inicio.php" class="list-group-item list-group-item-action py-2 ripple active" style="background-color:#48a259;">
          <h3><i class="bi bi-house-heart-fill">&nbsp;</i><span>Inicio</span></h3>
        </a>
        <a href="Novedades/index.html" class="list-group-item list-group-item-action py-2 ripple"><h5><i
            class="bi bi-phone-vibrate-fill fa-fw me-3"></i><span>Novedades</span></h5></a>
        <a href="mision/index.html" class="list-group-item list-group-item-action py-2 ripple"><h5><i
            class="bi bi-magic me-3"></i><span>Mas Sobre Nosotros</span></h5></a>
        <a href="games/index.php" class="list-group-item list-group-item-action py-2 ripple"><h5><i
            class="bi bi-joystick me-3"></i><span>Juegos</span></h5>
        </a>      
      </div>
    </div><br><br><br><br><br><br><br><br><br>
	<form action="inicio.php" method="POST" class="was-validated">
<input type="email" class="form-control" id="email" style="font-size: 9px;" placeholder="Suscribase gratis con su correo" name="email" style="height: auto;width:200px;height:30px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mt-3 form-check-label" for="conditions" style="font-size: 9px;"><input type="checkbox" onclick="validar()" class="form-check-input" id="conditions" name="conditions" value="1">
<script>
	function validar(){
	if (document.getElementById('conditions').checked)
{
alert('La Información será enviada a su correo ingresado');
}else{
	alert('Información no enviada');
}}
</script> Aceptar envio de información</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="sendForm" class="btn btn-sm mt-2 text-white" style="background-color:#34A71D; width:70px; height:45px;"><i class="bi bi-send" style="font-size:13px;">Enviar</i></button></div>
</form>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a href="admin/index.php" class="navbar-brand" href="#">
	  <img src="./img/MANANTIAL.webp"  alt="manantial" width="450px" height="55px"></a>   

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        <!-- Notification dropdown -->


        <!-- Avatar -->
		<form class="d-flex" role="search">
        <button class="btn btn-lg btn-success" type="submit"><a href="catalogo/inventario.php" class="text-decoration-none text-white">Catalogo</a></button>
      </form>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->

<!--Main layout-->
<body style="background-image:url('./img/mountain.jpg'); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;background-attachment: fixed;">
  
  <br><br><br><br>
 <div class="container"  id="inch">
	<div class="container-fluid" >
	
		<div class="slider" style="margin-left: 150px;" >
			<ul>
				<li>
				<img src="img/5.webp" style="width:550px;height:250px;"  alt="nose"/>
			</li>
				<li>
				<img src="img/pop.webp" style="width:550px;height:250px;" alt="perro"/>
			</li>
				<li>
				<img src="img/6.webp" style="width:550px;height:250px;" alt="pinche"/>
			</li>
				<li>
				<img src="img/hornox.webp" style="width:550px;height:250px;" alt="gob"/>
			</li>
			<li>
			<img src="img/11.webp" style="width:550px;height:250px;" alt="ierno"/>
			</li>
			<li>
			<img src="img/22.webp" style="width:550px;height:250px;" alt="pndj"/>
			</li>
			</ul>
		</div><br>
            <br>
            <div class="container w-50 mt-5" style="margin-left: 630px;">
			<div class="card mt-5">
  <img src="img/desde.avif" class="card-img-top" alt="arepa" style="width:510px;height:220px;">
  <div class="card-body text-center bg-light">
    <h1 class="card-title">Areperia Manantial</h1>
    <p style="font-size: 14px;" class="card-text">Una empresa que surgió de tradiciones y familia para asi dar a conocer las deliciosas preparaciones nativas del departamento de Boyacá</p>
    <p style="font-size: 14px;" class="card-text"><medium class="text-muted">Desde 1985</medium></p>
  </div>
</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<br>
  <footer class="mt-2">
  <div class="social-bar">
    <a href="https://www.facebook.com/" class="icon bi bi-facebook text-decoration-none " style="background-color:#3b5998;" target="_blank"></a>
    <a href="https://twitter.com/" class="icon bi bi-twitter text-decoration-none" style="background-color:#00acee;" target="_blank"></a>
    <a href="https://www.youtube.com/c/" class="icon bi bi-youtube text-decoration-none" style="background-color:#ff0000 ;" target="_blank"></a>
    <a href="https://www.instagram.com/" class="icon bi bi-instagram text-decoration-none" style="background-color:#C13584;"target="_blank"></a>
  </div>
  <div class="container-fluid" style="background-color:#ffffff;">
    <div class="row">
    <div class="d-flex border-top">
      <p style="font-size:15px;margin-left:620px;">© 2022 Manantial Inc. Derechos Reservados</p>
    </div> </div></div>
  </footer>
</div>
</footer>
</body>
</html>
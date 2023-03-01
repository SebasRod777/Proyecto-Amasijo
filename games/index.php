<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<link rel="shortcut icon" href="../img/star.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link href="./css/custom.css" rel="stylesheet">
	<link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<script src="./js/bootstrap.min.js"></script><script src="./js/bootstrap.bundle.min.js"></script>
</head>
    <body class="text-center mt-5" style="background-image:url('./img/pinball.jpg'); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
        <br><br><br><br><br>
        <img src="./img/titulo.png" alt="titulo" style="width:1200px;">
        <br><br><br><br><br><br><br><br>
    <div class="d-grid gap-5 mt-5">
  <button class="btn" style="background-color:#00ABB3;" type="button"><a class="text-decoration-none text-black  " href="2xd/index.html"><h1>Arkanoid chafa</h1></a></button>
  <button class="btn" style="background-color:#00ABB3;" type="button"><a class="text-decoration-none text-black " href="juego/index.html"><h1>Plataforma</h1></a></button>
  <button class="btn" style="background-color:#00ABB3;" type="button"><a class="text-decoration-none text-black " href="memoria/index.html"><h1>Memoria</h1></a></button>
</div><a type="button" style="background-color:#00ABB3;" class="btn btn-lg mt-5 text-black" onclick="volver()"><h1>Volver</h1></a>
        <script>
          function volver(){
            window.history.back();
          }
        </script>
        <html><head>
<meta charset="UTF-8">
<title>Estrellas</title>
<style>

form{ width:250px; margin:0 auto; padding:10px; border: 1px solid #d9d9d9;}
form p, form input[type = "submit"]{text-align:center; font-size:20px;}


input[type = "radio"]{ display:none;/*position: absolute;top: -1000em;*/}
label{ color:grey;}

.clasificacion{
    direction: rtl;
    unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label{color:orange;}
input[type = "radio"]:checked ~ label{color:orange;}

</style>
</head>

<body>
<div id="wrapper">


<form action="" method="post">
<p class="text-white">Estrellas: 5</p>
<p class="clasificacion">
<input id="radio1" type="radio" name="estrellas" value="5"><label for="radio1">★</label><input id="radio2" type="radio" name="estrellas" value="4"><label for="radio2">★</label><input id="radio3" type="radio" name="estrellas" value="3"><label for="radio3">★</label><input id="radio4" type="radio" name="estrellas" value="2"><label for="radio4">★</label><input id="radio5" type="radio" name="estrellas" value="1"><label for="radio5">★</label>
</p>
<p><input type="submit" value="submit" name="submit"></p>
</form>
</div>
<div>

</div>

</body></html>
    </body>
</html>
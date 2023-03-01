<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Areperia</title>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<script src="./bootstrap/js/bootstrap.min.js"></script>
</head>
	<body style="background-image:url('../img/mountain.jpg'); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;background-attachment: fixed;">
  <div class="container-fluid">
    <br><br><br>
<div class="row text-center">
    <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h1 ><u>Catálogo de Compras</u> <a type="button" class="btn btn-lg btn-success mt-5 text-white"  onclick="volver()"><h5>Volver</h5></a>
        <script>
          function volver(){
            window.history.back();
          }
        </script></h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="18%"><h2>Producto</h2></th>
                                            <th width="20%"><h2>Cantidad</h2></th>
                                            <th width="19%"><h2>Precio</h2></th>
                                            <th width="12%"><h2>Referencia Gráfica</h2></th>
                                            <th width="9%"><h2>Comprar</h2></th>
                                        </tr>
                                    </thead>
                                    <tbody style="background-color:#63D64C;">
									<?php
									require_once 'DBconect.php';
									$select_stmt=$db->prepare("SELECT Id,Producto,Cantidad,Precio,Lote,imagen FROM inventarioex");
									$select_stmt->execute();
									
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <tr>
                                            <td><h3><mark><?php echo $row["Producto"]; ?></mark></h3></td>
                                            <td><h3><mark><?php echo $row["Cantidad"]; ?></mark></h3></td>
                                            <td><h3><mark><?php echo $row["Precio"]; ?></mark></h3></td>
                                            <td><h3><?php echo "<img src='".$row["imagen"]."' width='250px' height='110px'>"; ?></h3></td>
                                            <td><h3><a href="login/login.php" class="text-decoration-none text-white" style="background-color:#00ABB3;"><button onclick="mostrar()" class="btn btn-lg text-left"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><br> Comprar</button></a>
                                            <script>
                                            function mostrar() {
                                                alert("Antes de realizar una compra inicia sesion o registrate");
                                              } </script>
                                            </h3></td>
                                            
											</tr>
									<?php
                                    
									}
									?>
                                    </tbody>
                                </table>
                            </div>
    
                        </div>
                        </div>
                </div>
		
	</div>
    </div>
    </body>
    </html>
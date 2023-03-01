<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">		
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
	<body style="background-image:url('./img/archivo.jpg'); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;background-attachment: fixed;">
  <br><br><br><br><br><br><br><br><br>
<?php
require_once 'DBconect.php';
session_start();
if(isset($_SESSION["admin_login"]))	
{
	header("location: registrados/index.php");	
}

if(isset($_REQUEST['btn_login']))	
{
	$email		=$_REQUEST["txt_email"];	
	$password	=$_REQUEST["txt_password"];	
	$role		=$_REQUEST["txt_role"];		
		
	if(empty($email)){						
		$errorMsg[]="Por favor ingrese Email";	
	}
	else if(empty($password)){
		$errorMsg[]="Por favor ingrese Password";	
	}
	else if(empty($role)){
		$errorMsg[]="Por favor seleccione rol ";	
	}
	else if($email AND $password AND $role)
	{
		try
		{
			$select_stmt=$db->prepare("SELECT email,password,role FROM usuario
										WHERE
										email=:uemail AND password=:upassword AND role=:urole"); 
			$select_stmt->bindParam(":uemail",$email);
			$select_stmt->bindParam(":upassword",$password);
			$select_stmt->bindParam(":urole",$role);
			$select_stmt->execute();	//execute query
					
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))	
			{
				$dbemail	=$row["email"];
				$dbpassword	=$row["password"];
				$dbrole		=$row["role"];
			}
			if($email!=null AND $password!=null AND $role!=null)	
			{
				if($select_stmt->rowCount()>0)
				{
					if($email==$dbemail and $password==$dbpassword and $role==$dbrole)
					{
						switch($dbrole)
						{
							case "admin":
								$_SESSION["admin_login"]=$email;			
								$loginMsg="Admin: Inicio sesión con éxito";	
								header("refresh:3;registrados/index.php");	
								break;								
							default:
								$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
						}
					}
					else
					{
						$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
					}
				}
				else
				{
					$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
				}
			}
			else
			{
				$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
			}
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}		
	}
	else
	{
		$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
	}
}
?>

	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($loginMsg))
		{
		?>
			<div class="alert alert-success">
				<strong>ÉXITO ! <?php echo $loginMsg; ?></strong>
			</div>
        <?php
		}
		?> 


<div class="login-form">
<center><h2><mark>Iniciar sesión</mark></h2></center>
<form method="post" class="form-horizontal" style="background-image:url('./img/mac.png'); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
  <div class="form-group">
  <label class="col-sm-6 text-left"><mark>Email</mark></label>
  <div class="col-sm-12">
  <input type="text" name="txt_email" class="form-control" placeholder="Ingrese email" />
  </div>
  </div>
      
  <div class="form-group">
  <label class="col-sm-6 text-left"><mark>Password</mark></label>
  <div class="col-sm-12">
  <input type="password" name="txt_password" class="form-control" placeholder="Ingrese passowrd" />
  </div>
  </div>
      
  <div class="form-group">
      <label class="col-sm-6 text-left"><mark>Seleccionar rol</mark></label>
      <div class="col-sm-12">
      <select class="form-control" name="txt_role">
          <option selected="selected" value="admin">Admin</option>
	  </select>
      </div>
  </div>
  
  <div class="form-group">
  <div class="col-sm-12">
  <input type="submit" name="btn_login" class="btn btn-warning btn-block" value="Iniciar Sesion">
  <a type="button" name="btn_left" class="btn btn-info btn-block" href="../index.php">Volver</a>
  </div>
  </div>
      
</form>
</div>
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>
<?php 

session_start();
class Configuracion{
        private $servidor;
        private $user;
        private $password;
    function conexion(){
        $servidor = "localhost";
        $user = "root";
        $password = "";
        $con = new mysqli($servidor, $user, $password);
        
        return $con;
    }
    function conectarDB(){
        $servidor = "localhost";
        $user = "root";
        $password = "";
        $database = "proyecto";
        $con = new mysqli($servidor, $user, $password,$database);

        if($con->connect_error){
            
            $_SESSION["ErrorDB"]="No ha sido posible establecer la conexion con la base de datos";
            header('Location: config.php');
        }else{
            $status=1;
        }
        return $con;
    }
        function crearUsuario(){
            $con=$this->conectarDB();
            $sql="INSERT INTO suscripcion (email)
            VALUES('".$_POST["email"]."');";

            if($con->query($sql) === TRUE){
                $_SESSION["Status"]="Se ha creado un usuario en la base de datos";
            header('Location: index.php');
            }else{
                $_SESSION["ErrorDB"]="Error creando un usuario en la base de datos".$con->error;
                    header('Location: index.php');
            }
            $con->close();
        }
 
}
$conexion = new Configuracion();
$conexion->crearUsuario();
?>
<?php
if (isset($_POST['sendForm'])) {
    if (isset($_POST['conditions']) && $_POST['conditions'] == '1')
        echo '<div class="alert alert-success">Has aceptado correctamente las condiciones de uso.</div>';
    else
        echo '<div class="alert alert-danger">Debes aceptar las condiciones de uso.</div>';
}
?>
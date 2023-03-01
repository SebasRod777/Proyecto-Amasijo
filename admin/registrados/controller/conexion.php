<?php 
class Conexion{
    function conectarDB()
    {
        $servidor = "localhost";
        $user = "root";
        $password = "";
        $database = "proyecto";
        $conn = new mysqli($servidor, $user, $password, $database);
        if ($conn->connect_error) {
        
        } else {

        }
        return $conn;
    }
}
?>
<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
// Define $username y $password
        $username=$_POST['username'];
        $password=$_POST['password'];
// Estableciendo la conexion a la base de datos
//        include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
        include("conexion.php");//Contiene de conexion a la base de datos

// Para proteger de Inyecciones SQL
        $username    = mysqli_real_escape_string($conexion,(strip_tags($username,ENT_QUOTES)));

        $sql = "SELECT email, password FROM login WHERE email = '" . $username . "' and password='".$password."';";
        echo $sql;
        $query=mysqli_query($conexion, $sql);
        $counter=mysqli_num_rows($query);
        if ($counter==1){
            $_SESSION['login_user_sys']=$username; // Iniciando la sesion
            header("location: menuderecha.php"); // Redireccionando a la pagina profile.php


        } else {
            $error = "El correo electrónico o la contraseña es inválida.";
        }
    }
}


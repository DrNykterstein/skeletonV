<?php
//Me conecto a la base de datos e inicio la sesion
require_once'includes/conexion.php';

//Capturar los datos del formulario
if(isset($_POST)){
    $correo = trim($_POST['email']);
    $contraseña = $_POST['password'];
    //Consulta para verficar el correo
    $sql = "SELECT * FROM usuarios WHERE email = '$correo'";
    $login = mysqli_query($db, $sql);
    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        //compruebo la contraseña
        $flag = password_verify($contraseña,$usuario['password']);
        if($flag){
            //Creo la session para guardar los datos
            $_SESSION['usuario']=$usuario;
            if(isset($_SESSION['error_login'])){
                session_unset($_SESSION['error_login']);
            }
        }else{
            //Muestro el error
            $_SESSION['error_login'] = "Error en credenciales";
        }
    }else{
        //Muestro el error
        $_SESSION['error_login'] = "Error en credenciales";
    }

}
//redirijo al index
header('Location: index.php')



?>
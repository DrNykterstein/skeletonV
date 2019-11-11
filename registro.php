<?php
session_start();

if(isset($_POST)){
    //Obtengo los valores del formulario y compruebo de que existan
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    //Validaciones del formulario
    $errores = array();//Donde guardare los posibles errores
    //Valido el nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    //Valido el Apellido
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/",$apellido)){
        $apellido_validate = true;
    }else{
        $apellido_validate = false;
        $errores['apellido'] = "El apellido no es valido";
    }

    //Valido el email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errores['email'] = "El email no es valido";
    }

    //Valido la password
    if(!empty($password)){
        $password_validate = true;
    }else{
        $password_validate = false;
        $errores['password'] = "La contraseña esta vacia";
    }

   /* Compruebo que el array de errores se encuentre vacio, lo que significa
     que no hubo ningún error */

    // Creo una variable para guardar el usuario
    $guardar_usuario = false;
     
     if(count($errores) == 0){
         //Guardo datos del usuario en la base de datos
        $guardar_usuario = true;

     }else{
         //creo mi variable de session
         $_SESSION['errores'] = $errores;
         //redirijo al index
         header('Location: index.php');
     }

}
?>
<?php

if(isset($_POST)){
    require_once'includes/conexion.php';
    if(!isset($_SESSION)){
        session_start();
    }
    //Obtengo los valores del formulario y compruebo de que existan
    $nombre = isset($_POST['nombre']) ? filter_var($_POST['nombre'], FILTER_SANITIZE_STRING) : null;
    $apellido = isset($_POST['apellido']) ? filter_var($_POST['apellido'], FILTER_SANITIZE_STRING) : null;
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_STRING) : null;
    $password = isset($_POST['password']) ? filter_var($_POST['password'], FILTER_SANITIZE_STRING) : null;

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
        // Cifrar la contraseña
        $password_cifrada = password_hash($password, PASSWORD_BCRYPT,['cost'=>4]);
        /* password_hash recibe como parametro la variable, el tipo de cifrado y el  de 
            iteraciones */
        
        //consulta sql
        $consulta_sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellido','$email',
           '$password_cifrada');";

        //Ejecuto la consulta, pasandole la base de datos y la consulta
        $guardar_datos = mysqli_query($db,$consulta_sql);
        if($guardar_datos){
            $_SESSION['completado']="Se ha registrado exitosamente";
        }else{
            $_SESSION['errores']['general']="Registro fallido";
        }
     }else{
         //creo mi variable de session
         $_SESSION['errores'] = $errores;
        
     }

} 
//redirijo al index
header('Location: index.php');
?>
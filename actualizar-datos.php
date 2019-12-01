<?php
if(isset($_POST)){
    require_once'includes/conexion.php';
    //Obtengo los valores del formulario y compruebo de que existan
    $nombre = isset($_POST['nombre']) ? filter_var($_POST['nombre'], FILTER_SANITIZE_STRING) : null;
    $apellido = isset($_POST['apellido']) ? filter_var($_POST['apellido'], FILTER_SANITIZE_STRING) : null;
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_STRING) : null;

    //Validaciones del formulario de actualizacion de datos
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

   /* Compruebo que el array de errores se encuentre vacio, lo que significa
     que no hubo ningún error */

    // Creo una variable para guardar el usuario
    $guardar_usuario = false;
     
     if(count($errores) == 0){
         //Guardo datos del usuario en la base de datos
        $guardar_usuario = true;
        //consulta sql para actualizar usuario
        $usuario = $_SESSION['usuario'];
        $usuario_id = $_SESSION['usuario']['id'];
        $consulta_sql="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',email='$email' WHERE id='$usuario_id';";
        //Ejecuto la consulta, pasandole la base de datos y la consulta
        $guardar_datos = mysqli_query($db,$consulta_sql);
        if($guardar_datos){
            //Actualizo la session
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['completado']="Se ha actualizado  exitosamente";
        }else{
            $_SESSION['errores']['general']="Actualización fallido";
        }
     }else{
         //creo mi variable de session
         $_SESSION['errores'] = $errores;
        
     }

} 
//redirijo al index
header('Location: datos.php');
?>
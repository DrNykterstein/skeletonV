<?php
// Si existe POST
if(isset($_POST)){
    //Me conecto a la base de datos
    require_once 'includes/conexion.php';
    $nombre = true;
    if(isset($_POST['nombre'])){
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    }else{
        $nombre = false;
    }
    //Validación
    $errores = array();//Donde guardare los posibles errores
    //Valido el nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    //Comprueblo que no me llegen errores 
    if(count($errores) == 0){
        $sql = "INSERT INTO categoria VALUES(NULL,'$nombre');";
        $guardar = mysqli_query($db, $sql);
    }
}

header('Location: index.php');
?>
<?php
/* Compruebo que la session exista para asegurarme que solo un usuarrio registrado puede
    crear categoria */

if(!isset($_SESSION)){
    //Inicio la session 
    session_start();
}

if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}
?>
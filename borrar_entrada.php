<?php
require_once 'includes/conexion.php';
//Compruebo de que exista el usuario identificado
if(isset($_SESSION['usuario'])){
    $id_entrada = $_GET['id'];
    $id_usuario = $_SESSION['usuario']['id'];
    $sql = "DELETE FROM entradas WHERE usuario_id = $id_usuario AND id = $id_entrada";
    $borrar = mysqli_query($db,$sql);
}

header("Location: index.php");


?>
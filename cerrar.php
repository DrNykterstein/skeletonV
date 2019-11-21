<?php
session_start();
//Cierro mi session
if(isset($_SESSION['usuario'])){
    session_destroy();
}

header("Location: index.php");
?>
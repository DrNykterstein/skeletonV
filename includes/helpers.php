<?php

function mostrarError($errores, $campo){
    $alertt = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alertt = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }
    return $alertt;
}

function borrarError(){
    $borrado = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $borrado = session_unset($_SESSION['errores']);
    }

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $borrar = session_unset($_SESSION['completado']);
    }
    return $borrado;

}

?>
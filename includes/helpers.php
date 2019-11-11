<?php

function mostrarError($errores, $campo){
    $alertt = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alertt = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }
    return $alertt;
}

function borrarError(){
    $_SESSION['errores'] = null;
    $borrar = session_unset($_SESSION['errores']);
    return $borrar;

}

?>
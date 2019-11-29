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

/* Función para hacer la consultar y buscar las categorias */
function buscarCategorias($conexion){
    $sql = "SELECT * FROM categoria ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql);
    $resultado = array();
    if($categorias && mysqli_num_rows($categorias)>=1){
        $resultado = $categorias;
    }

    return $resultado;

}

function buscarEntrada($conexion){
    $sql = "SELECT e.*, c.* FROM entradas e INNER JOIN categoria c ON e.categoria_id = c.id 
        ORDER BY e.id DESC LIMIT 4";
    $entradas = mysqli_query($conexion, $sql);
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $resultado = $entradas;
    }
    return $entradas;
}

?>
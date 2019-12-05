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
        $borrado = true;
    }

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $borrado = true;
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
// Para que me diga el nombre de la categoria 
function categoriasEntrada($conexion,$id){
    $sql = "SELECT * FROM categoria WHERE id=$id;";
    $categorias = mysqli_query($conexion, $sql);
    $resultado = array();
    if($categorias && mysqli_num_rows($categorias)>=1){
        $resultado = mysqli_fetch_assoc($categorias);
    }

    return $resultado;

}

function descripcionEntrada($conexion, $id){
    $sql = "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre,'',u.apellido) AS usuario
            FROM entradas e INNER JOIN categoria c
            ON e.categoria_id = c.id INNER JOIN usuarios u ON e.usuario_id = u.id
            WHERE e.id = $id;";
    $ejecutar_consulta = mysqli_query($conexion, $sql);
    $resultado = array();
    if($ejecutar_consulta && mysqli_num_rows($ejecutar_consulta)>=1){
        //Guardo el array en resultado
        $resultado = mysqli_fetch_assoc($ejecutar_consulta);
    }
    return $resultado;
}

function buscarEntrada($conexion,$limite=null,$categoriaE=null){
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categoria c ON e.categoria_id = c.id 
         ";

    if(!empty($categoriaE)){
        $sql .= "WHERE e.categoria_id = $categoriaE"; 
    }

    $sql .= " ORDER BY e.id DESC ";

    if($limite){
        $sql .= "LIMIT 4";
    }

    $entradas = mysqli_query($conexion, $sql);
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $resultado = $entradas;
    }
    return $entradas;
}
?>


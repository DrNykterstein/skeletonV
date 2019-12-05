<?php
// Si me llega una información por POST
if(isset($_POST)){
    require_once 'includes/conexion.php'; // Me conecto a la base de datos
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']):false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria']:false;
    $usuario_id = $_SESSION['usuario']['id'];

    //Validaciones
    $errores = array();
    if(empty($titulo)){
        $errores['titulo'] = 'El titulo no es valido';
    }
    if(empty($descripcion)){
        $errores['descripcion']='La descripcion no es valida';
    }
    if(empty($categoria) && !is_numeric($categoria)){
        $errores['categoria']='Error en la categoria';
    }
    //Si no tengo ningun error, guardo mi categoria en la base de datos
    if(isset($_GET['editar'])){
        $editar_id = $_GET['editar'];
        $sql = "UPDATE entradas SET titulo='$titulo',descripcion='$descripcion'
                ,categoria_id=$categoria  WHERE id=$editar_id AND usuario_id=$usuario_id";
        // Guardo mi entrada
        $guardar = mysqli_query($db,$sql);
    }
        
    else{
        $_SESSION["errores_entrada"] = $errores;
    }

}

header("Location: index.php");


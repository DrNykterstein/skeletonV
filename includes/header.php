<?php require_once'conexion.php'; ?>
<?php require_once'includes/helpers.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&display=swap" rel="stylesheet">
    <title>VBlog</title>
</head>
<body>
    <!-- Encabezado, con menu -->
    <header class="site-header">
        <div class="contenedor contenedor-flex"><!--Contenedor flex para flexbox -->
            <a href="index.php">
                <h1>Skele<span>ton</span></h1>
            </a>
            <!--Nav-->
            <div class="navegacion">
                <nav>
                    <a href="index.php">Inicio</a>
                    <?php 
                        $categorias = buscarCategorias($db);
                        while($categoria = mysqli_fetch_assoc($categorias)): 
                    ?>
                        <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                    <?php endwhile; ?>    
                    
                </nav>
            </div><!--Navegacion -->
        </div><!-- contenedor -->
    </header><!--Header -->
    <!-- Encabezado con Menu, finalizado -->
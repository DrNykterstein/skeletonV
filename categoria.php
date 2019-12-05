<?php require_once'includes/header.php'; ?>
<?php
    $categoria = categoriasEntrada($db,$_GET['id']);
    //En caso de que no exista el ID de categoria
    if(!isset($categoria['id'])){
        //Redirecciono al index
        header("Location: index.php");
    }
?>
<!-- Contenido principal -->
    <div class="contenedor contenido-principal"><!--Contenedor padre, para flexbox -->
        <?php require_once'includes/sidebar.php'; ?>
        <main class="entrada-blog">
                <h1>Entradas de <?=$categoria['nombre']; ?></h1>
                <?php
                $entradas = buscarEntrada($db,null,$_GET['id']);
                if(!empty($entradas)):
                    while($entrada = mysqli_fetch_assoc($entradas)):
                
                ?>
                <article class="entrada">
                    <h2><?=$entrada['titulo']; ?></h2>
                    <span class="text-verde"><?=$entrada['categoria']; ?></span>
                    <p><?=$entrada['descripcion']; ?></p>                
                    <a href="entrada.php?id=<?=$entrada['id']?>" class="boton boton-principal">Leer Entrada</a>
                </article>
            
                <?php       
                    endwhile;
                endif;
                ?>
            </main><!--Contenido principal -->
        </div>
    <!-- Pie de pagina -->
    <?php require_once'includes/footer.php'; ?>

</body>
</html>
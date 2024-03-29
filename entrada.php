<?php require_once'includes/header.php'; ?>
<?php
    $entrada_actual = descripcionEntrada($db,$_GET['id']);
    //En caso de que no exista el ID de la entrada
    if(!isset($entrada_actual['id'])){
        //Redirecciono al index
        header("Location: index.php");
    }
?>
<!-- Contenido principal -->
    <div class="contenedor contenido-principal"><!--Contenedor padre, para flexbox -->
        <?php require_once'includes/sidebar.php'; ?>
        <main class="entrada-blog">
                <h1><?=$entrada_actual['titulo']; ?></h1>
                <a href="categoria.php?id=<?=$entrada_actual['categoria_id'];?>">
                    <span class="text-verde"><?=$entrada_actual['categoria'];?></span>
                </a>
                <br>
                <span class="text-verde"><?=$entrada_actual['usuario'];?> | <?=$entrada_actual['fecha']; ?></span>
                <p><?=$entrada_actual['descripcion']; ?></p>
                <?php 
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']):
                ?>
                <a href="editar_entrada.php?id=<?=$entrada_actual['id'];?>" class="boton boton-principal">Editar entrada entrada</a>
                <a href="borrar_entrada.php?id=<?=$entrada_actual['id'];?>" class="boton boton-principal">Borrar entrada entrada</a>
                <?php endif; ?>
        </main><!--Contenido principal -->
        </div>
    <!-- Pie de pagina -->
    <?php require_once'includes/footer.php'; ?>

</body>
</html>
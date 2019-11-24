<?php require_once'includes/redireccion.php';?>
<?php require_once'includes/header.php'; ?>
<!-- Contenido principal -->
    <div class="contenedor contenido-principal"><!--Contenedor padre, para flexbox -->
        <?php require_once'includes/sidebar.php'; ?>
        <div class="entrada-blog categorias">
            <h1>Crear categoria</h1>
            <form action="guardar_categoria.php" method="POST">
                    <input type="text" name="nombre" placeholder="Nombre categoria">
                    <input type="submit" value="Guardar" class="boton-categoria">
            </form>
        </div>


    </div><!--Contenedor y contenido principal -->

    <!-- Pie de pagina -->
    <?php require_once'includes/footer.php'; ?>

</body>
</html>
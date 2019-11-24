<?php require_once'includes/redireccion.php';?>
<?php require_once'includes/header.php'; ?>
<!-- Contenido principal -->
    <div class="contenedor contenido-principal"><!--Contenedor padre, para flexbox -->
        <?php require_once'includes/sidebar.php'; ?>
        <div class="entrada-blog categorias">
            <h1>Crear entrada</h1>
            <form action="guardar_entrada.php" method="POST">
                    <input type="text" name="titulo" placeholder="Titulo de la entrada">
                    <input type="text" name="descripcion" placeholder="Descripción de la entrada">
                    <select name="categoria">
                        <?php 
                            $categorias = buscarCategorias($db);
                            if(!empty($categorias)):
                            while($categoria = mysqli_fetch_assoc($categorias)):
                        ?>
                        <option value="<?=$categoria['id']?>">
                                <?=$categoria['nombre']?>
                        </option>
                        <?php
                            endwhile;
                            endif;
                        ?>
                    </select>
                    <input type="submit" value="Guardar entrada" class="boton-categoria">
            </form>
        </div>


    </div><!--Contenedor y contenido principal -->

    <!-- Pie de pagina -->
    <?php require_once'includes/footer.php'; ?>

</body>
</html>
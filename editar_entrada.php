<?php require_once'includes/redireccion.php';?>
<?php require_once'includes/header.php'; ?>
<?php $entrada_actual = descripcionEntrada($db,$_GET['id']);?>
<!-- Contenido principal -->
    <div class="contenedor contenido-principal"><!--Contenedor padre, para flexbox -->
        <?php require_once'includes/sidebar.php'; ?>
        <div class="entrada-blog categorias">
            <h1>Editar entrada</h1>
            <form action="guardar_edicion.php?editar=<?=$entrada_actual['id']; ?>" method="POST">
                    <input type="text" name="titulo" placeholder="<?=$entrada_actual['titulo'];?>">
                    <textarea placeholder="<?=$entrada_actual['descripcion'];?>" name="descripcion" rows="10" cols="100"></textarea>
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
                    <input type="submit" value="Guardar edición" class="boton-categoria">
            </form>
        </div>


    </div><!--Contenedor y contenido principal -->

    <!-- Pie de pagina -->
    <?php require_once'includes/footer.php'; ?>

</body>
</html>
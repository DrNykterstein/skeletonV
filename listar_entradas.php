<?php require_once'includes/header.php'; ?>
<!-- Contenido principal -->
    <div class="contenedor contenido-principal"><!--Contenedor padre, para flexbox -->
        <?php require_once'includes/sidebar.php'; ?>
    
        <main class="entrada-blog">
                <h1>Todas las entradas</h1>
                <?php
                $entradas = buscarEntrada($db);
                if(!empty($entradas)):
                    while($entrada = mysqli_fetch_assoc($entradas)):
                
                ?>
                <article class="entrada">
                    <h2><?=$entrada['titulo']; ?></h2>
                    <span class="text-verde"><?=$entrada['categoria']; ?></span>
                    <p><?=$entrada['descripcion']; ?></p>                
                    <a href="entrada.php" class="boton boton-principal">Leer Entrada</a>
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
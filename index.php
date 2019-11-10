<?php require_once'includes/header.php'; ?>
<!-- Contenido principal -->
    <div class="contenedor contenido-principal"><!--Contenedor padre, para flexbox -->
        <?php require_once'includes/sidebar.php'; ?>

        <!--Contenido principal-->
        <main class="entrada-blog">
            <h1>Últimas Entradas</h1>
            <article class="entrada">
                <img src="assets/img/guerra1.png" alt="" >
                <h2>VideoJuego de Guerra</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat minus ut
                 laudantium quidem iusto, sed officia nam recusandae, natus officiis reprehenderit 
                 quo vitae inventore cumque expedita consectetur omnis dolor sint.</p>
                 <a href="entrada.php" class="boton boton-principal">Leer Entrada</a>
            </article>

            <article class="entrada">
                <img src="assets/img/futbol1.png" alt="">
                <h2>VideoJuego de NBA</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat minus ut
                 laudantium quidem iusto, sed officia nam recusandae, natus officiis reprehenderit 
                 quo vitae inventore cumque expedita consectetur omnis dolor sint.</p>
                 <a href="entrada.php" class="boton boton-principal">Leer Entrada</a>
            </article>

            <article class="entrada">
                <img src="assets/img/guerra1.png" alt="">
                <h2>VideoJuego de Aventura</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat minus ut
                 laudantium quidem iusto, sed officia nam recusandae, natus officiis reprehenderit 
                 quo vitae inventore cumque expedita consectetur omnis dolor sint.</p>
                 <a href="entrada.php" class="boton boton-principal">Leer Entrada</a>
            </article>
        </main><!--Contenido principal -->


    </div><!--Contenedor y contenido principal -->

    <!-- Pie de pagina -->
    <?php require_once'includes/footer.php'; ?>

</body>
</html>
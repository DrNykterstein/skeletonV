<?php require_once'includes/redireccion.php';?>
<?php require_once'includes/header.php'; ?>
<!-- Contenido principal -->
    <div class="contenedor contenido-principal"><!--Contenedor padre, para flexbox -->
        <?php require_once'includes/sidebar.php'; ?>
        <div class="entrada-blog categorias">
            <h1>Actualizar mis datos</h1>
            <!-- Muestro los errores -->
        <?php if(isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
                <?=$_SESSION['completado']?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-exito">
                <?=$_SESSION['errores']['general']?>
            </div>
        <?php endif; ?>
            <form action="actualizar-datos.php" method="POST"><!--Llevame a registrer.php -->
                <input type="text" name="nombre" placeholder="Nombre">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                <input type="text" name="apellido" placeholder="Apellido">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
                <input type="email" name="email" placeholder="Correo Eléctronico">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                <input type="submit" name="submit" value="Actualizar">
            </form>
        <?php borrarError(); ?>
        </div>
    </div><!--Contenedor y contenido principal -->
    <!-- Pie de pagina -->
    <?php require_once'includes/footer.php'; ?>

</body>
</html>
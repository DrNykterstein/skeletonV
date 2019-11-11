<?php require_once'includes/helpers.php'; ?>
<!--Formulario para el login -->
<aside class="sidebar">
    <div class="buscardor">
        <form action="">
          <input type="search" placeholder="Buscar Entrada" class="block-aside">
        </form>
    </div><!--buscador -->

    <div class="login block-aside"><!--Para loguearse -->
        <h3>Identificate</h3>
            <form action="login.php" method="POST"><!--Llevame a login.php -->
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Contreseña">
                <input type="submit" value="Entrar">
            </form>
    </div><!-- Login -->        

    <div class="registrer block-aside"><!--Para registrarse -->
        <h3>Registrate</h3>
            <form action="registro.php" method="POST"><!--Llevame a registrer.php -->
                <input type="text" name="nombre" placeholder="Nombre">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                <input type="text" name="apellido" placeholder="Apellido">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
                <input type="email" name="email" placeholder="Correo Eléctronico">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                <input type="password" name="password" placeholder="Contraseña">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
                <input type="submit" name="submit" value="Registrarse">
            </form>
            <?php borrarError(); ?>
    </div><!--registrer -->

</aside><!--sidebar -->
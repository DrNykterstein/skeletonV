
<!--Formulario para el login -->
<aside class="sidebar">
    <div class="buscador">
        <form action="">
          <input type="search" placeholder="Buscar Entrada" class="block-aside">
        </form>
    </div><!--buscador -->
    <!-- Si se inicia session correctamente -->
    <?php if(isset($_SESSION['usuario'])): ?>
        <div class="login block-aside"><!--Para loguearse -->
        <h3>Bienvenido <?=$_SESSION['usuario']['nombre'];?></h3>
        <!-- Agrego botones -->
        <a href="crear_entrada.php" class="boton-cerrar">Crear entrada</a>
        <a href="crear_categoria.php" class="boton-cerrar">Crear Categoria</a>
        <a href="datos.php" class="boton-cerrar">Mis datos</a>
        <a href="cerrar.php" class="boton-cerrar">Cerrar Sesion</a>
    </div><!-- Login --> 
    <?php endif; ?>
    
    <?php if(!isset($_SESSION['usuario'])): ?>

    <div class="login block-aside"><!--Para loguearse -->
            <h3>Identificate</h3>
            <!-- Si falla el inicio de sesion -->
            <?php if(isset($_SESSION['error_login'])): ?>
                <div class="login block-aside"><!--Para loguearse -->
                    <h3><?=$_SESSION['error_login'];?></h3>
                </div>        
            <?php endif; ?>
                <form action="login.php" method="POST"><!--Llevame a login.php -->
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Contreseña">
                    <input type="submit" value="Entrar">
                </form>
    </div><!-- Login -->        

    <div class="registrer block-aside"><!--Para registrarse -->
        <h3>Registrate</h3>
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

    <?php endif; ?>

</aside><!--sidebar -->
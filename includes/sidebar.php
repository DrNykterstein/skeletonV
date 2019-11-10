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
        <form action="registrer.php" method="POST"><!--Llevame a registrer.php -->
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="email" name="email" placeholder="Correo Eléctronico">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="submit" value="Registrarse">
        </form>
    </div><!--registrer -->

</aside><!--sidebar -->
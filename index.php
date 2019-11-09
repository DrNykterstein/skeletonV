<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&display=swap" rel="stylesheet">
    <title>VBlog</title>
</head>
<body>
    <!-- Encabezado, con menu -->
    <header class="site-header">
        <div class="contenedor contenedor-flex"><!--Contenedor flex para flexbox -->
            <a href="index.php">
                <h1>Skele<span>ton</span></h1>
            </a>
            <!--Nav-->
            <div class="navegacion">
                <nav>
                    <a href="#">Inicio</a>
                    <a href="#">Guerra</a>
                    <a href="#">Deporte</a>
                    <a href="#">Aventura</a>
                    <a href="#">Contacto</a>
                </nav>
            </div><!--Navegacion -->
        </div><!-- contenedor -->
    </header><!--Header -->
    <!-- Encabezado con Menu, finalizado -->

    <!-- Contenido principal -->
    <div class="contenedor contenido-principal"><!--Contenedor padre, para flexbox -->
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
    <footer class="pie-pagina">
        <div class="contenedor">
            <div class="barra">
                <p>Ske<span>leton</span></p>
                <nav class="navegacion">
                    <a href="#">Inicio</a>
                    <a href="#">Contacto</a>
                </nav>
            </div>
        </div>
    </footer>

</body>
</html>
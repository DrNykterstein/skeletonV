<!--Contenido principal-->
<main class="entrada-blog">
        <h1>Últimas Entradas</h1>
        <?php
           $entradas = buscarEntrada($db);
           if(!empty($entradas)):
               while($entrada = mysqli_fetch_assoc($entradas)):
          
        ?>
        <article class="entrada">
            <h2><?=$entrada['titulo']; ?></h2>
            <p><?=$entrada['descripcion']; ?></p>                
            <a href="entrada.php" class="boton boton-principal">Leer Entrada</a>
        </article>
     
        <?php       
               endwhile;
           endif;
        ?>
       
</main><!--Contenido principal -->
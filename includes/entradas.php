<!--Contenido principal-->
<main class="entrada-blog">
        <h1>Últimas Entradas</h1>
        <?php
           $entradas = buscarEntrada($db,true);
           if(!empty($entradas)):
               while($entrada = mysqli_fetch_assoc($entradas)):
          
        ?>
        <article class="entrada">
            <h2><?=$entrada['titulo']; ?></h2>
            <span class="text-verde"><?=$entrada['categoria']; ?></span>
            <p><?=$entrada['descripcion']; ?></p>                
            <a href="entrada.php?id=<?=$entrada['id']?>" class="boton boton-principal">Leer Entrada</a>
        </article>
     
        <?php       
               endwhile;
           endif;
        ?>
       <a href="listar_entradas.php" class="boton boton-principal contenedor">Ver todas las entradas</a>
</main><!--Contenido principal -->
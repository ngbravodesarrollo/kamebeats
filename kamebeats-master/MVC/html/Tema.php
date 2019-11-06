<!DOCTYPE html>
<html>
    <head>
        <title>Tea</title>
    </head>
    <body>
        <header>
            <div class="title"></div>
            <div class="right-corner">
                <div class="user">Hola N4rwel</div>
                <div class="userLogo"></div>
            </div>
        </header>
        <section>
            <h2> <?= $this->tema['nombre'] ?> </h2>
            <br>
            <p><?= $this->tema['descripcion'] ?></p>
            <p>Cantidad de likes: <?= $this->cantLikes['cantlikes'] ?> </p>

            <?php
             foreach ($this->listCometarios as $comentario) { 
                echo "<br><b>" .$comentario['comentario'] ."</b>";
            } ?>
            <div class="reproductor"></div>
            <div class="comentarios"></div>
        </section>
    </body>
</html>
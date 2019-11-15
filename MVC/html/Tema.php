<?php include '../masterpage/master.php';?>
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

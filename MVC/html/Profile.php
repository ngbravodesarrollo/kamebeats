<body>
    <header>
        <div class="title"></div>
        <div class="right-corner">
            <div class="user">
                <?php 
                    echo "Cantidad de seguidores<b>".$this->cantSeguidores['cantfollowers']. "</b><br>";
                    echo "Cantidad de seguidores<b>".$this->cantSeguidos['cantfollows']. "</b>";
                ?>
            </div>
            <div class="userLogo"></div>
        </div>
    </header>
    <section>
        <?php foreach ($this->listaTemas as $tema){
            //echo json_encode($tema);
            echo "<h2>" .$tema['nombre']. "</h2><br>";
            echo "<b>" .$tema['descripcion']. "</b><br>";
            //echo "<b>" .$tema['cantlikes']. "</b><br>";           
        }
        ?>
        <div class="reproductor"></div>
        <div class="comentarios"></div>
    </section>
<!-- 

$profile_view->listaTemas = $t_model->getByUsuario($id_usuario);
$profile_view->cantSeguidores = $l_model->getCantSeguidoresByUsuario($id_usuario);
$profile_view->cantSeguidos = $l_model->getCantSeguidosByUsuario($id_usuario);
-->

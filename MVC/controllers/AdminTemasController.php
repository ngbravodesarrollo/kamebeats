<?php
require '../fw/fw.php';
require '../models/Temas.php';
require '../views/AdminTemas.php';

$m_temas = new TemasModel();
$v_adminTemas= new AdminTemas();

if(isset($_POST["id_tema"] && isset($_POST["deleted"])))

$v_adminTemas->temas= $m_temas->getByUsuario($_SESSION["id_usuario"]);

$v_adminTemas->render();

?>
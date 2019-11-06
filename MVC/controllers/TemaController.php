<?php

require "../models/Comentarios.php"
require "../models/Likes.php"
require "../models/Temas.php"
require "../views/Tema.php"

if(!isset($_GET["id"]))
    die ("no se ingreso id");

$id_tema= $_GET["id"];

$t_view= new Tema;
$t_model = new Temas;
$c_model = new Comentarios;
$l_model = new Likes;

$t_view->tema = $t_model->getByID($id_tema);
$t_view->cantLikes = $l_model->getCantByIDTema($id_tema);
$t_view->listCometarios = $c_model->getByIDTema($id_tema);

$t_view->render();

?>
<?php
	
require '../fw/fw.php';
require "../models/Comentarios.php";
require "../models/Likes.php";
require "../models/Temas.php";
require '../models/Login.php';
require "../views/Tema.php";
require "../views/Profile.php";
require "../views/Home.php";


$m_tema = new TemasModel;
$v_home = new Home;

$v_home->t_AutorSeguido=$m_tema->getByFollowed($_SESSION['id_usuario']);
$v_home->t_maslikeados=$$m_tema->getMasLikeado();


    public $t_maslikeados;
    public $t_AutorSeguido;
    public $cantSeguidos; 

?>
<?php
require '../fw/fw.php';
require "../models/Comentarios.php";
require "../models/Likes.php";
require "../models/Temas.php";
require '../models/Login.php';
require "../views/Tema.php";
require "../views/Profile.php";

if(isset($_POST['user'] && isset($_POST['pass']){
	//validacion input
	$usuario = $_POST['user'];
	$clave = $_POST['pass'];

	$l_model = new LoginModel;
	$datos=$l_model->doLogin($usuario,$clave);
	if($datos){
		User::InitSession();
		$_SESSION['username']=$datos['username'];
		$_SESSION['id_usuario']=$datos['id_usuario'];
		header('Location: ../html/home.php');
	}
}
	
$l_view= new Login;
$l_view ->render();





?>
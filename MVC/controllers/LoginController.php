<?php
require '../fw/fw.php';
require '../models/Login.php';
require "../views/Login.php";

if(isset($_POST['user']) && isset($_POST['pass'])){
	//validacion input
	$usuario = $_POST['user'];
	$clave = $_POST['pass'];

	$l_model = new LoginModel;
	$datos=$l_model->getUser($usuario,$clave);
	if($datos){
		User::InitSession();
		$_SESSION['username']=$datos['username'];
		$_SESSION['email']=$datos['email'];
		header('Location: ./HomeController.php');
		echo "you are login";
		echo $_SESSION['username'];
	}
	else{
		echo "usuario incorecto";
	}
}
	
$l_view= new Login();
$l_view ->render();





?>
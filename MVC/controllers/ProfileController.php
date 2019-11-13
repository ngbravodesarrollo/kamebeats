<?php 
require '../fw/fw.php';
require "../models/Comentarios.php";
require "../models/Likes.php";
require "../models/Temas.php";
require "../views/Tema.php";
require "../views/Profile.php";

/* Aca deberia fijarme si existe sesion. 
if (!isset($_SESSION['idSesion']))
	{
		//header('Location:./login.php');
		exit();
	};

*/

if(!isset($_GET["id_usuario"]))
    die ("no se ingreso id");

$id_usuario = $_GET["id_usuario"];

$profile_view= new Profile;
$t_model = new TemasModel;
$l_model = new LikesModel;

/* No se si esto hace falta.
$c_model = new ComentariosModel;
*/

$profile_view->listaTemas = $t_model->getByUsuario($id_usuario);
$profile_view->cantSeguidores = $l_model->getCantSeguidoresByUsuario($id_usuario);
$profile_view->cantSeguidos = $l_model->getCantSeguidosByUsuario($id_usuario);



foreach ($profile_view->listaTemas as $tema){
	$tema=array_merge($tema,$l_model->getCantByIDTema($tema['id_tema']));
	echo json_encode($tema);
}	//adentro del foreach se ve, afuera no.

$profile_view->render();
?>

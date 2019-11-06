<?php
// fw/View.php


abstract class View {
	public function render (){  //manda cosas al navegador del usuario
		// hay que mandar al buffer el codigo html
		include '../html/'. get_class($this) .'.php';  //reflection hace que llegue el nombre que corresponde

		}

}
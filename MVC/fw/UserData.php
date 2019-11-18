<?php
	class User{
		
		public static function InitSession() {
			session_start();
			if(!isset($_SESSION['idSession'])){
				$_SESSION['idSession'] = session_id();		
			}
		}

		public static function isLogged(){
			if(isset($_SESSION['idSession'])) return true;
			else header('Location: ../controllers/LoginController.php',$true, 303);
		}
	}
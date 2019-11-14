<?php
	static class User
	{
		public static function InitSession(){
			if(!isset($_SESSION['idSession']){
			}
			else{
				session_start();
				$_SESSION['idSession']= session_id();					
			} 
		}

		public static function isLogged(){
			if(isset($_SESSION['idSession']) return true;
			else header('Location: ../html/Login.php');
		}
	}
<?php

	class LoginModel extends Model{
		public function doLogin($user,$pass){
			$this->db->query("SELECT username, id_usuario from usuarios where username= $user and password=$pass");
		}

	}
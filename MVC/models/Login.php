<?php

	class LoginModel extends Model{
		public function getUser($user,$pass){
			$this->db->query("SELECT username,email from usuarios where username='$user' and password='$pass'");
			return $this->db->fetch();
		}
	}
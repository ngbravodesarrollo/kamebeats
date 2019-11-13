<?php
 //PATRON SINGLETON
 class Database{

 	private static $instance;
 	private $cn;
 	private $res;

 	public static function getInstance(){
 		if(!self::$instance) self::$instance=new Database;
 		return self::$instance;
 	}

 	private function __construct(){

 	}

 	public function query($q){
 		$this->connect();
 		$this->res=mysqli_query($this->cn, $q);

 		if (mysqli_error($this->cn)!="") {
 			die("error sql:".mysqli_error($this->cn));
 		}
 	}

 	public function fetch(){
 		return mysqli_fetch_assoc($this->res);
 	}

 	public function fetchAll(){
 		$aux= array();
 		while ($fila = $this->fetch()) {
 			$aux[]= $fila;
 		}
 		return $aux;
 	}

 	public function escape($str){
 		$this->connect();
 		return mysqli_escape_string($this->cn, $str);
 	}

 	public function numRows(){
 		return mysqli_num_rows($this->res);
 	}
 	private function connect(){
 		if (!$this->cn) $this->cn= mysqli_connect("localhost","root","","kamebeats");
 	}

}


 ?>

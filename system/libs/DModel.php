<?php

class DModel{
	protected $db = array();
	public function __construct(){
		$content = 'mysql:dbname=webdoan; host=localhost';
		$user = 'root';
		$pass ='';
		$this->db = new Database($content,$user,$pass);
	}
		
}	

?>
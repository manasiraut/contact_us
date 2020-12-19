<?php
class Contact{
	private $host="localhost";
	private $user="root";
	private $pass="";
	private $db="mydatabase";
	public $mysqli;

	public function __construct(){
		return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
	}
	public function contact_us($data){
		$id=$data['id'];
		$name=$data['name'];
		$email=$data['email'];
		$message=$data['message'];
		$q="insert into contact_us set id='$id', name='$name', email='$email', message='$message'";
		return $this->mysqli->query($q);
	}
}
?>
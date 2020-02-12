<?php
class connection{
private $servername="localhost";
private $username="root";
private $password="";
private $db="demo";
//echo 'I am inside connection for database';
protected function connect(){
$conn=mysqli_connect($this->servername,$this->username,$this->password,$this->db);
 if(!$conn){
 	die("connection failed:".mysqli_connect_error());

 }
 return $conn;
}	
}


 ?>
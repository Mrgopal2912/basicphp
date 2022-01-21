<?php
class abc{
	private $conn;
	public function __construct(){
		echo "this is construct function";
		$this->conn=mysqli_connect();
	 }
	public function hello(){
		echo "this is hello function";
	}
	public function __destruct(){
		echo "this is destruct function";
       mysql_close($this->conn);  
	}
}
$test =new abc();
$test->hello();
?>
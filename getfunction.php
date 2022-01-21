<?php
class MyClass{
	public $var1;
	public $var2="hello";
	private $var3=100;
	function name(){
		echo "class name:".get_class($this)."<br>";
	}
	function __construct(){
		$this->var1="wow";
		$this->var2="hddk";
  print_r($class_var=get_object_vars($this));
	}
}
	
	$obj = new MyClass();
	$obj->name();
	echo "class Name is".get_class($obj)."<br>";

$class_var=get_object_vars($obj);
print_r($class_var);

?>
<?php
class student{
	private $name;
	public function hello(){
		echo $this->name;
	}
	public function __get($property)
	{
		echo "ypur are trying to acces non existing or pravate property($property)";

	}
	public function __set($property,$value)
	{
	if(property_exists($this,$property))
		{
			$this->$property=$value;
		}
		else{
		echo "this i2s a non existing or pravate property($property)";
	}}
}
$test =new student();
$test->name="gopal";
$test->hello();
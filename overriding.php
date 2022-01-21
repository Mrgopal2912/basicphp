<?php

class base{
	public $name;
	public function calc($a,$b){
		return $a*$b;
	}
}
class derived extends base{

	public function calc($a,$b){
		return $a+$b;
}
$test = new derived();
echo $test->calc(5,10);

?>

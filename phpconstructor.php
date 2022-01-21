<?php

class person{
	public $name;
	function show(){
             echo "\n your name  is :".$this->name."\n";
		
	}
	function __construct($n="no name"){
$this->name=$n;
	}
}
$p1=new person("gopal");
$p2=new person("ram kumar");
$p3=new person();

$p1->show();
$p2->show();
$p3->show();
?>
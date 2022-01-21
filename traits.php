<?php
trait test{
	public function hello(){
		echo "say hello";
	}
}
trait bye{
	public function saybye(){
		echo "bye bye evryone";
	}
}
class A{
use test,bye;
}
class B{
use test,bye;
}

$test= new A();

$test->hello();

$test->saybye();

$test2= new B();


$test2->hello();

$test2->saybye();
?>
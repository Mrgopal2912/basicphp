<?php
trait MyTrait{
	public function MyMethod(){

	}
}
interface myinterface{

}
class MyClass{
	public $test;
  public function class(){
     
  }
} 
class child extends MyClass{

}
//class exist or not 
if(class_exists('MyClass')){
	echo "this  class is exists<br>";
}
else{
	echo "this  class is not  exists<br>";
}
//interface exist or not
if(interface_exists("myinterface")){
	echo "this  interface is exists<br>";
}
else{
	echo "this  interface is not  exists<br>";
}
//method exist or not
$obj=new MyClass();
if(method_exists($obj,'class')){
	echo "this  method is exists<br>";
}
else{
	echo "this  method is not  exists <br>";
}
//trait exist or not
if(trait_exists('MyTrait')){
	echo "this  trait is exists<br>";
}
else{
	echo "this  trait is not  exists <br>";
}
//properties exist or not
if(property_exists('MyClass','test')){
	echo "this  properties is exists<br>";
}
else{
	echo "this  properties is not  exists <br>";
}
//check objetct that this object is of class object
if(is_a($obj,'MyClass')){
	echo "this  object is of class MyClass<br>";
}
else{
	echo "this  object is not of class   MyClass <br>";
}
$obj1=new child();
//this object is of subclass of parent class or not
if(is_a($obj1,'MyClass')){
	echo "this object is of subclass of parent class <br>";
}
else{
	echo "this object is not  of subclass of parent class <br>";
}
?>
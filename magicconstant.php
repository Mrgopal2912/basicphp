<?php
namespace MyNameSpace;
echo "line number:".__LINE__."<br>";

echo "full path of this file is:".__FILE__."<br>";

echo "the file path of this Directory is:".__DIR__."<br>";
 function con(){
	echo "the function name is:".__FUNCTION__."<br>";
}
class MyClass{
    public function getclassName(){
    	return __class__;
    }
     public function getnamespaceName(){
    	return __class__;
    }
}
con();
$obj= new Myclass();
echo $obj->getclassName()."<br>";
echo $obj->getnamespaceName();

?>
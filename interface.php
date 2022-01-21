<?php

interface parent1{
	
	function calc($a,$b);
}
interface parent2{
	function sub($a,$b);
}
class childclass implements parent1,parent2{
     public function calc($a,$b){
     	echo $a +$b;
     }
      public function sub($a,$b){
     	echo $a - $b;
     }
}

$test= new childclass();
$test->calc(10,15);
echo"<br>";
$test->sub(30,20);
?>
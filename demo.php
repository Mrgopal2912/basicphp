<?php
class calculation{
 function sum(){
 	$this->c=$this->a +$this->b;
 	return $this->c;

   }
    function sub(){
 	$this->c=$this->a - $this->b;
 	return $this->c;

   }
}

   $c1= new calculation();
   $c1->a=10;
   $c1->b=20;
   echo $c1->sum()."\n";
   
   $c2 = new calculation();
   $c2->a=50;
   $c2->b=70;
   echo $c2->sub()."\n";

?>

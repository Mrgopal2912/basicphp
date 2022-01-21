<?php

class personal {
	public static $name="gopal4";
	public static function show(){
	echo self ::$name;
	}
	
	public function __construct(){
		self::show();
   }
}

class derived extends personal{
 
  public static function show(){
  	
  	echo parent::$name;
  }
}
//personal::$name;
//personal::show();
//$test=new personal();
$test1= new derived();
$test1->show();
?>
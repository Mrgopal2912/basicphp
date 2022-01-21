<?php
class base{
	protected static $name ="gopal";
	public function show(){
		//echo self::$name;
		echo static::$name;

	}
}

class derived extends base{
protected static $name ="baba";
}
$test=new derived();
$test->show();
?>
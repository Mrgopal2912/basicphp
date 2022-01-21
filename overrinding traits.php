<?php
trait hello{
	private function sayhello(){
	 echo "hello from trait";
	}
}
trait hii{
	public function sayhello(){
	 echo "hello from trait1";
	}
}

class base {
	use hello,hii{
	hello::sayhello as public;
	hello::sayhello insteadof hii;
	hii::sayhello as newhello;
 }
}
//class child extends base{
//use hello;
//public function sayhello(){
//echo "hello child  classs";
// }
//}
$test=new base();
$test->sayhello();
$test->newhello();
?>
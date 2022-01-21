<?php
class abc{
  private $data =["name"=>"gopal","course"=>"php","fee"=>"2000"];
  public function __get($key){
  	//echo "you are traing to access non Existing or private properties($property)";
  	if(array_key_exists($key, $this->data)){
  		return $this->data[$key];
  	}
  	else{
  		return "this key ($key) is not define";
  	}
  }
}
  $test = new abc();
  echo $test->name;
?>
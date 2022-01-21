<?php

class abc{
	public function first(){
		echo "this is First function \n";
		return $this;
	}
		public function second(){
		echo "this is second function \n";
		return $this;
	}
		public function third(){
		echo "this is third function \n";
		return $this;
	}
}
$test = new abc();
$test ->first()->second()->third();
?>
<?php
function sum (int $v){
echo  $v+10 ."<br>";
}
sum(110);

//array programe for hiting 

function frits(array $names)
{
	foreach($names as $name){
		echo $name ."<br>";
	}
}
$test=["apple","orange","banana"];
frits($test);

// class object programe for hiting arror 

class hello{
	public function sayhello(){
		echo "hello everyone";

	} 
} 

class bye {
	public function syabye(){
		echo "bye everyone";
	}
}
function wow(hello $c){
//using hiting type  hello class  object only  pass in this fuction other wise process not insert in this function.
	$c->sayhello();
}
$test= new hello();
wow($test);



//advance concept in typt hiting
class school{
	public function getnames( student $names){//using hiting type  student class  object only  pass in this fuction other wise process not insert in this function.
		foreach($names->names() as $name){
			echo $name."<br>";
		}

	} 
} 

class libary{

}

class student {
	public function names(){
		return ["ram","krishan","gopal"];
	
	}
}
$lib = new libary();
$stu = new student();
$sch = new school();
$sch->getnames($stu);

?>
<?php

class employee{
 public $name;
 public $age;
 public $salary;
 function __construct($n,$a,$s){
 	$this->name=$n;
 	$this->age=$a;
 	$this->salary=$s;
 }
 function info(){
 	echo "<h4>Employee Profile</h4>";
 	echo "Employee Name :".$this->name."<br>";
 	echo "Employee age :".$this->age."<br>";
 	echo "Employee salary: ".$this->salary."<br>";
 }
}
class manager extends employee{
	public $ta=1000;
	public $phone=300;
	public $totalsalary;

	 function info(){
	 $this->totalsalary=$this->salary +$this->ta + $this->phone;
 	echo "<h4>manager Profile</h4>";
 	echo "Employee Name :".$this->name."<br>";
 	echo "Employee age :".$this->age."<br>";
 	echo "Employee salary: ".$this->totalsalary."<br>";
 }

}
$e1 =new manager("ram",25,20000);
$e2 =new employee("ram",25,20000);
$e1->info();
$e2->info();
?>
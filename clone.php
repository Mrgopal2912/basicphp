<?php


class student
 {
	public $name;
	public $course;

	  public function __construct($n)
	  {
	  	$this->name=$n;

	  }
	  public function setCourse(course $c)
	  {
	  	$this->course=$c;
	  }
      public function __clone()
      {
      	$this->course= clone $this->course;
      }
}
class course{
	public $cname;
	 public function __construct($cn)
	{
		$this->cname=$cn;
	}
}
//create a student class object
$student1=new student('gopal');
//create course class object
$course1=new course('php');
//set course name is course class object pass in student1 object
$student1->setCourse($course1);
//colne copy a data student1 object to student2 (call by value) 
$student2= clone $student1;
//name set in student2 object
$student2->name="ram kapoor";
//set a course name in student2 object
$student2->course->cname='paythone';

print_r($student1);

print_r($student2);
?>
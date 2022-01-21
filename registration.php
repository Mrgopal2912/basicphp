<?php
session_start();
header('location:basic3.php');
$servername="localhost";
$username="root";
$password="";
$dbname="data";
$conn=mysqli_connect($servername,$username,$password,$dbname); 
if($conn){
	echo"connection sucesful";
}else{
	echo"no connection";
}
 $user=$_POST['Namer'];
 $email=$_POST['email'];
 $pwd=$_POST['pwd'];
 $cpwd=$_POST['cpwd'];
 

  
    $query=mysqli_query($conn,"INSERT INTO `registrationform`(`name`, `email`, `password`, `cpassword`, `id`) VALUES('$user','$email','$pwd','$cpwd','')");
   
      if($query){
         echo"success";
      }
     else{
      echo"Failed";
     }
?>
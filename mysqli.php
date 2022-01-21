<?php

$servername="localhost";
$username="root";
$password="";
$dbname="test1";
 
 $conn = new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
 	die("connection Failed:".$conn->connect_error);
 }

$sql ="SELECT*FROM students";
$result=$conn->query($sql);
if($result->num_rows>0){
	while ($row= $result->fetch_assoc()){
       echo "ID:{$row["id"]}-Name:{$row["studentname"]}-Age:{$row["age"]}";
	}
}
else{
		echo "No result found";
	}

$conn->close();
?>

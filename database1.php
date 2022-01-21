<?php

include 'database.php';
$obj=new DataBase();
//$obj->insert('students',['studentname'=>'Gopalkumar','age'=>'20']);
//echo "insert result is:";

//$obj->update('students',['studentname'=>'Gopalkumar','age'=>'23'],'id="2"');
//$obj->delete('students','age="22"');
//echo "delete Result is:";


//select(tablename,colum ,join ,where,orderby,limit)

//$obj->select('students','*',null,'age="20"',null,null);


//$obj->sql('SELECT * FROM students WHERE age="23"');

print_r($obj->getResult());

?>
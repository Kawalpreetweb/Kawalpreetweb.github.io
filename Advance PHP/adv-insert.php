<?php

 	$id=3;
 	$name='kawal';
 	$course='PHP';
 	$fee=2000;
	$con=new mysqli('localhost','root','','db');
	$stmt="INSERT INTO STUDENT VALUES(?,?,?,?)";
	$ps=$con->prepare($stmt);
	$ps->bind_param('issd',$id,$name,$course,$fee);
	$ps->execute();

?>
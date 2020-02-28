<?php

	$con=new mysqli('localhost','root','','db');
	$stmt="INSERT INTO STUDENT VALUES(1,'Ankit','Java',1600)";
	$result=$con->query($stmt);

?>
<?php
	
		$con1=mysqli_connect('localhost','root','','db');
		$con2=new mysqli('localhost','root','','db');

		var_dump($con1);
		echo "<br>";
		var_dump($con2);

?>
<?php

	include('dl.php');
	
	if(count($_POST)!=0){

		extract($_POST);

		if(AddStudent($id,$name,$course,$fees)===false)
		{
			echo"Record not saved";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Add stuent record</h2>
<form method="POsT">
	ID:<input type="text" name="id"> <br>
	NAME:<input type="text" name="name"> <br>
	COURSE:<input type="text" name="course"> <br>
	FEES:<input type="text" name="fees"> <br>
	<input type="submit" value="save">


	
</form>
</body>
</html>
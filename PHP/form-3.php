<?php


echo "No. of Posted Values : " . count($_POST) . "<br>";

if(count($_POST)!=0)
{
	echo "Name : " . $_POST['name'] . "<br>";
	echo "Email : " . $_POST['email'] . "<br>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Processing Form Data in Same Page</h1>
	<form method="POST">
		Name : <input type="text" name="name"> <br>
		Email : <input type="text" name="email"> <br>
		<input type="submit">
	</form>	
</body>
</html>
<?php 

if(count($_POST)!=0)
{
    $id=$_POST['id'];
   

	$con=mysqli_connect('localhost','root','','phpdb');
	$result=mysqli_query($con,"delete from students where id=$id");
	if($result===false){
		echo mysqli_error($con);

	}
	else
	{
		echo "record saved successfuuly";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<table>
		<tr>
			<td>Id</td>
			<td><input type="text" name="id"></td>
		</tr>
		
		<tr>
			<td><input type="submit" value="delete"></td>
		</tr>
	</table>
	</form>
</body>
</html>
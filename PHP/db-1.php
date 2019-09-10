<?php 

if(count($_POST)!=0)
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $fee=$_POST['fee'];
    $course=$_POST['course'];


	$con=mysqli_connect('localhost','root','','phpdb');
	$result=mysqli_query($con,"insert into students values ('$id','$name','$fee','$course')");
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
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Fee</td>
			<td><input type="text" name="fee"></td>
		</tr>
		<tr>
			<td>Course</td>
			<td><input type="text" name="course"></td>
		</tr>
		<tr>
			<td><input type="submit"></td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
$username=$_GET['username'];

$con=mysqli_connect('localhost','root','','phptraining');
$command="select * from login where username='$username'";
$result=mysqli_query($con,$command);
if(mysqli_num_rows($result))
{
	echo "Alredy Taken";
} 
else
{
	echo"Available";
}
?>
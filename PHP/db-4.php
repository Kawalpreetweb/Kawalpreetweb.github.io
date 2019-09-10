<?php 
$con=mysqli_connect('localhost','root','','phpdb');
$query="select * from students";
$result=mysqli_query($con,$query);
while ($record=mysqli_fetch_assoc($result)) {
	echo $record['id']."<br>";
	echo $record['name']."<br>";
	echo $record['fees']."<br>";
	echo $record['course']."<br>";

}

?>
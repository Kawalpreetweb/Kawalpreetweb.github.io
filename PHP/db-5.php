<?php 
$con=mysqli_connect('localhost','root','','phpdb');
$query="select * from students";
$result=mysqli_query($con,$query);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border=1px>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Fee</td>
		<td>course</td>
	</tr>
	<?php while ($record=mysqli_fetch_assoc($result)) { ?>
	<tr>
		<td><?php echo $record['id']."<br>";?></td>
	    <td><?php echo $record['name']."<br>";?></td>
		<td><?php echo $record['fees']."<br>";?></td>
		<td><?php echo $record['course']."<br>";?></td>
	</tr>
<?php } ?>
</table>
</body>
</html>
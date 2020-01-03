<?php
include('dl.php');
$students=GetStudents(); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<a href="add.php">Add New Student</a>
	<table>
		
		<tr>
			
			<td>Id</td>
			<td>Name</td>
			<td>Course</td>
			<td>Fees</td>
			<td>Command</td>
		</tr>
		<?php foreach($students as $student) { ?>
			<tr>
				<td><?php echo $student['id']; ?></td>
				<td><?php echo $student['name']; ?></td>
				<td><?php echo $student['course']; ?></td>
				<td><?php echo $student['fee']; ?></td>
				<td>
					
					<a href="delete.php?id=<?php echo $student['id']; ?>">Delete</a>
					<a href="update.php?id=<?php echo $student['id']; ?>">Update</a>
				</td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>
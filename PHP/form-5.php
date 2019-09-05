<?php


$error=['name'=>'','gender'=>'','city'=>'','pref'=>''];
$data=['name'=>'','gender'=>'','city'=>'','pref'=>[]];


if(count($_POST)!=0)
{
	if(empty($_POST['name']))
	{
		$error['name']="Name is required";
	}
	elseif(strlen($_POST['name'])<=3)
	{
		$error['name']="Minimum 3 Characters required";
	}
	else
	{
		$data['name']=$_POST['name'];
	}

	if(!isset($_POST['gender']))
	{
		$error['gender']="Gender is required";
	}
	else
	{
		$data['gender']=$_POST['gender'];
	}

	if($_POST['city']=='Select City')
	{
		$error['city']="City is required";
	}
	else
	{
		$data['city']=$_POST['city'];
	}

	if(!isset($_POST['pref']))
	{
		$error['pref']="Preferences is required";
	}
	else
	{
		$data['pref']=$_POST['pref'];
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Form</h1>
	<form method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
				<td><?php echo $error['name']; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male" <?php echo ($data['gender']=='Male')?'checked':''; ?>> Male
					<input type="radio" name="gender" value="Female" <?php echo ($data['gender']=='Female')?'checked':''; ?>> Female
				</td>
				<td><?php echo $error['gender']; ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<select name="city">
						<option value="0">Select City</option>
						<option value="1" <?php echo ($data['city']=='1')?'selected':''; ?>>New Delhi</option>
						<option value="2" <?php echo ($data['city']=='2')?'selected':''; ?>>Chennai</option>
						<option value="3" <?php echo ($data['city']=='3')?'selected':''; ?>>Kolkata</option>
					</select>
				</td>
				<td><?php echo $error['city']; ?></td>
			</tr>
			<tr>
				<td>Preferences</td>
				<td>
					<input type="checkbox" name="pref[]" value="English" <?php echo (array_search("English", $data['pref'])===false)?'':'checked'; ?>> English <br>
					<input type="checkbox" name="pref[]" value="Hindi"> Hindi <br>
					<input type="checkbox" name="pref[]" value="Punjabi"> Punjabi <br>
					<input type="checkbox" name="pref[]" value="Tamil"> Tamil <br>
				</td>
				<td><?php echo $error['pref']; ?></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
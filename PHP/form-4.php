<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";


//Validating Form Data
if(count($_POST)!=0)
{
	//Validating Text Field
	if(empty($_POST['name']))
	{
		echo "Name is required<br>";
	}
	elseif(strlen($_POST['name'])<=3)
	{
		echo "Minimum 3 Characters required<br>";
	}

	//Validating Radio Button or Checkbox
	if(!isset($_POST['gender']))
	{
		echo "Gender is required<br>";
	}

	//Validing Drop Down List
	if($_POST['city']=='Select City')
	{
		echo "City is required<br>";
	}

	//Validating Checkbox
	if(!isset($_POST['pref']))
	{
		echo "Preferences is required<br>";
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
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
				</td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<select name="city">
						<option value="0">Select City</option>
						<option value="1">New Delhi</option>
						<option value="2">Chennai</option>
						<option value="3">Kolkata</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Preferences</td>
				<td>
					<input type="checkbox" name="pref[]" value="English"> English <br>
					<input type="checkbox" name="pref[]" value="Hindi"> Hindi <br>
					<input type="checkbox" name="pref[]" value="Punjabi"> Punjabi <br>
					<input type="checkbox" name="pref[]" value="Tamil"> Tamil <br>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php


/*
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
*/


if(count($_POST)!=0 && count($_FILES)!=0)
{
	//Name Validation
	if(empty($_POST['name']))
	{
		echo "Name is required<br>";
	}

	//File Validation
	$file=$_FILES['upload'];
	$allowed_size=1024*1024;
	$size=$file['size'];

	if(empty($file['name']))
	{
		echo "Please Upload a File<br>";
	}
	elseif($size<=$allowed_size)
	{
         echo "please upload the file of 1Mb";
	}
	elseif($file['type']!="jpeg")
	{
		echo "please upload the file of type jpeg";
	}
	else
	{
		move_uploaded_file($file['tmp_name'],$file['name']);
		echo "File Uploaded Successfully";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Photo:</td>
			<td><input type="file" name="upload" value="upload file"></td>
		</tr>
		<tr>
			<td><input type="submit"</td>
		</tr>
	<table>
</form>
</body>
</html>

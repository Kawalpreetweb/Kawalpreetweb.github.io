<?php
$ary=array(
array("kawal"=>"preet","amar"=>"preet","mehak"=>"arora"),
array("charan"=>"jeet","hardeep"=>"kaur","komal"=>"pandey"),
array("happy"=>"singh","pooja"=>"dhouchak","priyanka"=>"singh")
);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,tr,td,th{
			border:1px solid black;
			text-align:center;
			border-collapse: collapse;
			width:700px;
			height:200px;
			
		}
	</style>
</head>
<body>
<table>
	<tr>
		<th>Name</th>
		<th>Surname</th>
	</tr>
	<?php foreach($ary as $per){?>
	<?php foreach($per as $user=>$name)?>
	<?php { ?>
	<tr>
		<td><?php echo "$user";?></td>
		<td><?php echo "$name";?></td>
	</tr>
	<?php } ?>
<?php } ?>
</table>
</body>
</html>
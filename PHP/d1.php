<?php
$islogin=false;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#login-box{
			width:200px;
			text-align: right;
			height:100px;
			float:right;
		}
	</style>
</head>
<body>
	<div id="login-box">
		<?php if($islogin==false){ ?>
		<div>
			<a href="#">Login</a> | 
			<a href="#">Register</a>
		</div>
		<?php } else { ?>
		<div>
			<a href="#">Welcome</a> |
			<a href="#">Logout</a>
		</div>
		<?php } ?>
	</div>
</body>
</html>
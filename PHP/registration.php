<?php
function register($name,$gender='',$age=0)
{
	echo "Name : $name <br>";
	echo "Gender : $gender <br>";
	echo "Age : $age <br>";
} 
register("kawal");
register("kawal","female");
register("kawal","female",23);
//named argument
register("kawal",$age=23);//purposed yet to launch in the market
register("kawal",'',23);
?>
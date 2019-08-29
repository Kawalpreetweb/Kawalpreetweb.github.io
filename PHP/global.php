<?php
$a=5;
function sample()
{
	global $a;
	echo $a."<br>";
}
sample();
function sample1(){

	echo $GLOBALS['a'];
}
sample1();
?>
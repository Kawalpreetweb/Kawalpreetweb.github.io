<?php

//Non Working Code
$a=5;
function MyFun1()
{
	echo $a;
}
MyFun1();


//Working - Method 1
$a=5;
function MyFun2()
{	
	global $a;
	echo $a;
}
MyFun2();

//Working - Method 2
$a=5;
function MyFun3()
{
	echo $GLOBALS['a'];
}
MyFun3();

?>
<?php

$a=5;	//$GLOBALS['a']=5;


function Test(){
	$b=5;
}

$b=10;

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

?>
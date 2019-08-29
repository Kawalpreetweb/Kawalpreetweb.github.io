
<?php
function varlength($name,$age,...$course)//variable length argument is used when you want to pass unlimited number of arguments...
{
	echo $name."<br>";
	echo$age."<br>";
  foreach($course as $class)
  	echo $class."<br>";
}
varlength("kriti",32,"mca","bca","mba","hm");
?>
<?php 
$arry=array(345,567,570,234,567,879,345,734,890,100);
function CountArr($arry)
{
	$start=0;
	for($i=0;$i<10;$i++)
	{
         if($arry[$i]>500)
          
          $start++;
	}
	  return $start;
}
$result=CountArr($arry);	
echo"$result";
?>
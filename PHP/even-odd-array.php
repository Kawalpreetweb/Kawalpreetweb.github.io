<?php
$data=array(23,42,56,34,30,22,54,65);
$even=array();
$odd=array();
function split($data,$even=0,$odd=0){
	global $even;
	global $odd;
	foreach($data as $num){
		if($num%2==0){
			$even[]=$num;
		}
		else
		{
			$odd[]=$num;
		}
	}
}
$result=split($data);
print_r($even);
print_r($odd);

?>
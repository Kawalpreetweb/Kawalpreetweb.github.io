<?php

		class stats{

			public static function sum($list)
			{
				$res=0;
				foreach($list as $item)
				{
					$res=$res+$item;
				}
				return $res;
			}

			public static function Mean($list)
			{
				$res=0;
				foreach($list as $item)
				{
					$res=$res+$item;
				}
				$mean=$res/count($list);
				return $mean;
			}

			
		}

		$res1=stats::sum([23,45,62,1,6,7,5]);
		echo "Result ofsum ".$res1."<br>";

		$res2=stats::Mean([2,3,4,5,6,78,4]);
		echo "Result of mean ". $res2;

?>
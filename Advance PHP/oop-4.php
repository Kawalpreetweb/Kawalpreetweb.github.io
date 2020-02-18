<?php

	class circle
	{
		public static $pi;
		public $radius;
		public $area;

		public function Area()
		{
			return $this->radius*$this->radius* circle::$pi;
		}

		public function Input($radius){

			$this->radius=$radius;
			$this->area=$this->Area();
		}
		public function Output()
		{
			echo "Radius ". $this->radius ."<br>";
			echo "Area " . $this->area."<br>";
		}
	};

	circle ::$pi=3.14;
	$obj=new circle();
	$obj->Input(2);
	$obj->Output();
?>
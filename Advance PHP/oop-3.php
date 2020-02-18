<?php
	
	class flight
	{
		public $flightnum;
		public $Destination;
		public $distance;
		public $fuel;

		public function calfuel()
		{
			if($this->distance<=1000){

				return 500;
			}
			elseif ($this->distance<=2000) {

				return 1100;
			}
			else
			{
				return 2200;
			}
		}
		public function feedinfo($flightnum,$Destination,$distance){

			$this->flightnum=$flightnum;
			$this->Destination=$Destination;
			$this->distance=$distance;
			$this->fuel=$this->calfuel();


		}
		public function showinfo()
		{
			echo "Flight number ". $this->flightnum ."<br>";
			echo "Destination ". $this->Destination ."<br>";
			echo "Distance ". $this->distance ."<br>";
			echo "Fuel " . $this->fuel ."<br>";



		}

		
	};
	$obj= new flight();
		$obj->feedinfo(2309,"New York",3450);
		$obj->showinfo();


?>
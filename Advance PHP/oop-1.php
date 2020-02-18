<?php
		
	class order{

		public $id;
		public $name;
		public $brand;
		public $price;
		public $quantity;
		public $total;

		public function input($id,$name,$brand,$price,$quantity)
		{
			$this->id=$id;
			$this->name=$name;
			$this->brand=$brand;
			$this->price=$price;
			$this->quantity=$quantity;
			$this->total=$this->price*$this->quantity;
		}
		public function output()
		{
			echo $this->id."<br>";
			echo $this->name."<br>";
			echo $this->brand."<br>";
			echo $this->price."<br>";
			echo $this->quantity."<br>";
			echo $this->total;

		}


	};

 $obj = new order();
 $obj->input(1,"Note 8 pro","redmi",17800,1);
 $obj->output();

 $obj2 =new order();
 $obj2->input(2," galaxy","samsung",23000,1);
 $obj2->output(); 


?>
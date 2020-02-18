<?php

	class student{
		public $id;
		public $name;
		public $stream;
		public $std;
		public $total;
		public $avg;
		public $result;

		public function input($id,$name,$stream,$std,$total){

			$this->id=$id;
			$this->name=$name;
			$this->stream=$stream;
			$this->std=$std;
			$this->total=$total;
			$this->avg=500/$total;
			if($this->avg>90){
				$this->result="super";
			}
			elseif($this->avg>80){
				$this->result="Excellent";
			}
			elseif($this->avg>60){
				$this->result="Good";
			}
			else{
				$this->result="Fail";
			}
		}

		public function output()
		{
			echo $this->id."<br>";
			echo $this->name."<br>";
			echo $this->stream."<br>";
			echo $this->std."<br>";
			echo $this->total."<br>";
			echo $this->avg."<br>";
			echo $this->result."<br>";

		}
	};
	$obj= new student();
		$obj->input(1,"kawal","science",11,5);
		$obj->output();
?>
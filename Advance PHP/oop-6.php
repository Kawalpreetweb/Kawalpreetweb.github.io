<?php

	class Bank{

			public $acno;
			public $name;
			public static $branch;
			public $balance;

			public static function Setbranch($branch)
			{
				Bank::$branch=$branch;
			}

			public function Createaccount($acno,$name,$balance)
			{
				$this->acno=$acno;
				$this->name=$name;
				$this->balance=$balance;
			}

			public function Displayaccount()
			{
				echo "Account no " .$this->acno ."<br>";
				echo "Name ".$this->name ."<br>";
				echo "branch ".Bank::$branch ."<br>";
			 	echo "balance ".$this->balance;
			}
	}
	Bank::Setbranch("Pitampura");
	$obj =new Bank();
	$obj->Createaccount(1234,"SBI",230000);
	$obj->Displayaccount();

?>
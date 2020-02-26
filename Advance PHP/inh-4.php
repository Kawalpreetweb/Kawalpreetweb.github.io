<?php
	
	class Bank{

		private $acno;
		private $name;
		private $branch;
		private $balance;

		protected function __construct($acno,$name,$branch,$balance)
		{

			$this->acno=$acno;
			$this->name=$name;
			$this->branch=$branch;
			$this->balance=$balance;
		}

		protected function OutputBank()
		{

			echo"Acoount no is " .$this->acno."<br>";
			echo"Name is: " .$this->name."<br>";
			echo"branch ".$this->branch."<br>";
			echo"Balance is: " .$this->balance."<br>";
		}

	}

	class BankV1 extends Bank
	{

		private $pan;

		protected function __construct($acno,$name,$branch,$balance,$pan)
		{
			Bank::__construct($acno,$name,$branch,$balance);
			$this->pan=$pan;
		}

		protected function OutputBank()
		{
			Bank::OutputBank();
			echo"pan no is :" .$this->pan . "<br>";
		}
	}

	class BankV2 extends BankV1
	{

			private $upi;

			public function __construct($acno,$name,$branch,$balance,$pan,$upi)
			{
				BankV1::__construct($acno,$name,$branch,$balance,$pan);
				$this->upi=$upi;
			}

			public function OutputBank()
			{
				BankV1::OutputBank();
				echo "upi is:" .$this->upi ."<br>";
			}
	}

	$obj=new BankV2(1,'SBI','pitampura',10000,'anbjs123444','kawal@123');

	$obj->OutputBank();
?>
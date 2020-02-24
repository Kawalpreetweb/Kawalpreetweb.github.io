<?php
	
	class Bank{

		private $acno;
		private $name;
		private $branch;
		private $balance;

		protected function InputBank($acno,$name,$branch,$balance)
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

		protected function InputBankV1($acno,$name,$branch,$balance,$pan)
		{
			$this->InputBank($acno,$name,$branch,$balance);
			$this->pan=$pan;
		}

		protected function OutputBankV1()
		{
			$this->OutputBank();
			echo"pan no is :" .$this->pan . "<br>";
		}
	}

	class BankV2 extends BankV1
	{

			private $upi;

			public function InputBankV2($acno,$name,$branch,$balance,$pan,$upi)
			{
				$this->InputBankV1($acno,$name,$branch,$balance,$pan);
				$this->upi=$upi;
			}

			public function OutputBankV2()
			{
				$this->OutputBankV1();
				echo "upi is:" .$this->upi ."<br>";
			}
	}

	$obj=new BankV2();
	$obj->InputBankV2(1,'SBI','pitampura',10000,'anbjs123444','kawal@123');
	$obj->OutputBankV2();
?>
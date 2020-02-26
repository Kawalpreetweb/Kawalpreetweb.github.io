<?php
//function overloading
class Drug
{
    private $category;
    private $date_of_manufacture;
    private $company;
  
    public function Input($category,$date_of_manufacture,$company){
     

            $this->category=$category;
            $this->date_of_manufacture=$date_of_manufacture;
            $this->company=$company;

    }

    public  function Output(){

        echo"Category is: ".$this->category."<br>";
        echo"Date of manufacture is: " .$this->date_of_manufacture."<br>";
        echo"company is: " .$this->company."<br>";

    }
}

class Tablet extends Drug
{
  protected $tablet_name;
  protected $volume_label;
  public $price;

    public function Input($category,$date_of_manufacture,$company,$tablet_name="",$volume_label="",$price="")
    {
  
            Drug::Input($category,$date_of_manufacture,$company);
            $this->tablet_name=$tablet_name;
            $this->volume_label=$volume_label;
            $this->price=$price;
    }
    public function Output()
    {
            Drug::Output();

            echo"Tablet Name is: ".$this->tablet_name."<br>";
            echo"Volume Label is: ".$this->volume_label."<br>";
            echo"Price : ".$this->price."<br>";

    }
}

class PainReliever extends Tablet
{
    public $dosage_units;
    public $side_effects;
    public $use_within_days;

    public function Input($category,$date_of_manufacture,$company,$tablet_name="",$volume_label="",$price="",$dosage_units="",$side_effects="",$use_within_days="")

    {

        Tablet::Input($category,$date_of_manufacture,$company,$tablet_name,$volume_label,$price);

        $this->dosage_units=$dosage_units;
        $this->side_effects=$side_effects;
        $this->use_within_days=$use_within_days;
    }
    public function Output()
    {

            Tablet::Output();
            echo"Dosage units: ".$this->dosage_units."<br>";
            echo"Side Effects:". $this->side_effects."<br>";
            echo"Use within days".$this->use_within_days."<br>";
    }
}

$obj=new PainReliever();
$obj->Input('medical','12-09-2019','Polo','Ultraset','abs',12324,2,'headache','best before date ofmanufacture');
$obj->Output();
?>
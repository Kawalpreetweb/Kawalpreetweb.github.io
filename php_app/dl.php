<?php

//Database Logic

$server='localhost';
$username='root';
$password='';
$database='phptraining';

 $con=mysqli_connect($server,$username,$password,$database);

 //Insert Function

function AddStudent($id,$name,$course,$fees)
{
	global $con;

	$command="INSERT INTO STUDENT VALUES($id, '$name','$course','$fees')";
	$result=mysqli_query($con,$command);

	return $result;

}

function UpdateStudent($id,$name,$course,$fees)
{
	global $con;

	$command="UPDATE STUDENT SET name='$name',course='$course',fees=$fees where id=$id";
	$result=mysqli_query($con,$command);

	return $result;

}

function DeleteStudent($id)
{
	global $con;

	$command="DELETE FROM STUDENT where id=$id";
	$result=mysqli_query($con,$command);

	return $result;
}


function GetStudent($id)
{
	global $con;

	$command="SELECT * FROM STUDENT where id=$id";
	$result=mysqli_query($con,$command);

	$record=mysqli_fetch_assoc($result);

	return $record;

}

function GetStudents()
{
	global $con;

	$command="SELECT * FROM STUDENT";
	$result=mysqli_query($con,$command);

	$students=[];

	while($record=mysqli_fetch_assoc($result))

	 {
	 	$students[]=$record;
	 }

	//var_dump($students);
	return $students;


}




 ?>
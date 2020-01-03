<?php 
include('dl.php');

$id=$_GET['id'];
DeleteStudent($id);

header('location:display.php');

?>
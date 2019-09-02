<?php

echo "<h1>GET Array</h1>";
print_r($_GET);
echo "<h1>POST Array</h1>";
print_r($_POST);


//Reading Particular Data
echo "<h1>Reading Particular Data</h1>";
echo "Name : " . $_POST['name'] . "<br>";
echo "Email : " . $_POST['email'] . "<br>";

?>
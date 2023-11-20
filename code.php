<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$msg = $_POST["msg"];

$connection=mysqli_connect("localhost" ,"root","","web_work") or die ("connection failed");
$sql="INSERT INTO info (name,email,phone,msg)VALUES('{$name}', '{$email}', '{$phone}', '{$msg}')";

$result =mysqli_query($connection,$sql) or die ("query failed");


 //header("location: http://localhost/contact from/contact.php");
 mysqli_close($connection);
?>
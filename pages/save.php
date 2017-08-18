<?php include ("conncection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['PhoneNumber'];
$piad = $_POST['paid'];
$university = $_POST['university'];
$department = $_POST['department'];
$year = $_POST['year'];
$event = $_POST['event'];




$sql =  "INSERT INTO `$event`
VALUES ('', '$name', '$email','$phone','$paid','$university','$department','$year')";

mysqli_query($conn,$sql);










 ?>

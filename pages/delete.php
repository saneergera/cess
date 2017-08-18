<?php

session_start();


$timezone = date_default_timezone_set("Asia/Kolkata");


$conn= mysqli_connect("localhost","root","root","social");

if(!$conn)
{

echo error;


}

$date = new DateTime();

$query= 'SELECT `name`,`dat` FROM events ';

$detail = mysqli_query($conn,$query);

if(mysqli_num_rows($detail)>1)
{

while ($rows= mysqli_fetch_assoc($detail)) {

  $today = new DateTime();
  $expire = new DateTime($rows['dat']);



  if (date_format($expire, 'Y-m-d') < date_format($today, 'Y-m-d'))
  {

$name= $rows['name'];
  $sql=  "DELETE FROM events WHERE name = '$name'";

  echo $sql;

    mysqli_query($conn,$sql);

    $drop="DROP TABLE $name";
    mysqli_query($conn,$drop);


  }


}






}


 ?>

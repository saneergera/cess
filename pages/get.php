<?php

include("connection.php");
$sql= "SELECT * FROM events";


$info=mysqli_query($conn,$sql);


while($row=mysqli_fetch_assoc($info))
{


  if ($outp != "") {$outp .= ",";}
      $outp .= '{"Name":"'  . $row["name"] . '",';
      $outp .= '"Short":"'   . $row["disc"]        . '",';
      $outp .= '"Details":"'. $row["details"]     . '",';
      $outp .= '"Date":"'. $row["dat"]     . '",';
      $outp .= '"Check1":"'. $row["check1"]     . '",';
      $outp .= '"Check2":"'. $row["check2"]     . '",';
      $outp .= '"Check3":"'. $row["check3"]     . '",';
      $outp .= '"money":"'. $row["Money"]     . '",';
      $outp .= '"msg":"'. $row["Msg"]     . '",';
      $outp .= '"Team":"'. $row["option"]     . '",';
        $outp .= '"Poster":"'. $row["img"]     . '",';
      $outp .= '"Time":"'. $row["tim"]     . '"}';

}


echo('{"records":['.$outp.']}');


 ?>

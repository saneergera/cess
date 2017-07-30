<?php


$sql= "SELECT * FROM events"
echo "string";

$info=mysqli_query($conn,$sql);


while($row=mysql_fetch_assoc($info))
{


  if ($outp != "") {$outp .= ",";}
      $outp .= '{"Name":"'  . $row["name"] . '",';
      $outp .= '"City":"'   . $row["disc"]        . '",';
      $outp .= '"Details":"'. $row["details"]     . '"}';
      $outp .= '"Date":"'. $row["dat"]     . '"}';
      $outp .= '"Check1":"'. $row["check1"]     . '"}';
      $outp .= '"Check2":"'. $row["check2"]     . '"}';
      $outp .= '"Team":"'. $row["option"]     . '"}';
      $outp .= '"Time":"'. $row["tim"]     . '"}';

}
$outp ='{"records":['.$outp.']}';

echo($outp);


 ?>

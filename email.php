<?php
session_start();


$timezone = date_default_timezone_set("Asia/Kolkata");


$conn = mysqli_connect("localhost", "root", "root", "social");

if (!$conn) {
    echo error;
}


$sql = 'SELECT `name`,`options` FROM events ';

$query = mysqli_query($conn, $sql);

$num = mysqli_num_rows($query);

if ($num > 1) {

    while ($rows = mysqli_fetch_assoc($query)) {



        $option = $rows['options'];

        $sql2 = "SELECT `email` FROM core_team WHERE Team ='$option' ";
        echo $sql2;

        $query2 = mysqli_query($conn, $sql2);


        while ($rows2 = mysqli_fetch_assoc($query2)) {

            $email = $rows2['email'];

            echo $email;

        }

        $name = $rows['name'];

        $sql3 = "SELECT * FROM `$name` WHERE Paid = 'YES' ";

        $query3 = mysqli_query($conn, $sql3);
        $body   = "";
        while ($rows3 = mysqli_fetch_assoc($query3)) {


            $body .= "Name:" . $rows3['name'] . "<br>";
            $body .= "Email:" . $rows3['email'] . "<br>";
            $body .= "ContactNumber:" . $rows3['PhoneNumber'] . "<br>";
            $body .= "University:" . $rows3['University'] . "<br><br>";


        }

        if ($body != "") {
            echo $body;
        }

        else {
            $body = "No Paid Registerations Yet";
            echo $body;
        }



        $sql4 = "SELECT * FROM `$name` WHERE Paid ='NO'";

        $query4 = mysqli_query($conn, $sql4);
        $body2  = "";
        while ($rows4 = mysqli_fetch_assoc($query4)) {


            $body2 .= 'Name:' . $rows4["name"] . '\r\n';
            $body2 .= 'Email:' . $rows4["email"] . '\r\n';
            $body2 .= 'ContactNumber:' . $rows4["PhoneNumber"] . '\r\n';
            $body2 .= 'University:' . $rows4["University"] . '\r\n';


        }
        if ($body2 != "") {
            echo $body2;
        }

        else {
            $body2 = "No UnPaid Registerations Yet";
            echo $body2;
        }




    require_once('PHPMailer/PHPMailerAutoload.php');








echo $email;



    $mail = new PHPMailer();

    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure= 'ssl';
    $mail->isSMTP();
    $mail ->Host= 'smtp.gmail.com';
    $mail ->Port ='465';
    $mail ->isHTML();
    $mail ->Username = 'cess.gndu@gmail.com';
    $mail ->Password = '07102015';
    $mail->setFrom($email);
    $mail->addAddress($email);

    $mail->Subject = 'Participants For '.$name;
    $mail->Body    = $body;


    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }



  }

}

?>

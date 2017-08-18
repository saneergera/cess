<?php
include("connection.php");



$log_email             = "";
$log_password          = '';
$_SESSION['email'] = '';
$log_error_array       = array();
$_SESSION['name'] = '';


if (isset($_POST['email'])) {


    $log_email             = $_POST['email'];

    $_SESSION['email'] = $log_email;
    $log_password          = $_POST['password'];



    $check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$log_email' ");



    $num_check = mysqli_num_rows($check_email);



    if ($num_check == 1) {


        $row = mysqli_fetch_assoc($check_email);


        $hashpass = $row['password'];





        if (password_verify($log_password, $hashpass)) {


            $name = $row['name'];

            $_SESSION['name'] = $name;
            $_SESSION['email'] =   $row['email'];
              $_SESSION['mobile'] =  $row['mobile'];
                $_SESSION['university'] =   $row['university'];
                $_SESSION['department'] =   $row['department'];
                $_SESSION['year'] =   $row['year'];





echo "done";




        }

        else {


            echo "password Incorrect";



        }




    }









}









?>

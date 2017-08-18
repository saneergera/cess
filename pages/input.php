<?php include("connection.php"); ?>
<?php




date_default_timezone_set('Indian/Comoro');
$name="";
$email="";//em 1
$password="";//password
$password2="";//password2
$date="";//SignUp
$mobile="";
$error_array= array();//holds error merrage
$_SESSION['username'] = "";
$_SESSION['reg_lname'] = "";
$_SESSION['reg_email'] = "";
$_SESSION['reg_email2'] = "";

if(isset($_POST['username']))
{



$name=strip($_POST['username']);
$_SESSION['username']=$name;

$email=stripp($_POST['email']);
$_SESSION['reg_email']=$email;
$password=strip_tags($_POST['password']);
$password2=strip_tags($_POST['confirm_password']);
$date= date("Y-m-d");
$mobile=$_POST['mobile'];
$university = strip($_POST['University']);
$department = strip($_POST['department']);
$year = $_POST['year'];





		if (filter_var($email,FILTER_VALIDATE_EMAIL))

		 {

			$email = filter_var($email,FILTER_VALIDATE_EMAIL);


			$e_check = mysqli_query($conn,"SELECT email FROM users WHERE email='$email'");

			$num_rows = mysqli_num_rows($e_check);

			if($num_rows>0)
			{

			array_push($error_array, "Email already in use") ;
      echo "Email already in use";

			}

		}


		else
		{

			array_push($error_array, "Invalid Format");
      echo "Invalid Format";

		}





if (strlen($name)>30||strlen($name)<3)
{
	array_push($error_array, "Length of first name is not correct ");
  echo "Length of first name is not correct Retry";
}



if($password!=$password2)
{
	array_push($error_array, "Your password does not match");
  echo "Your password does not match";
}
else
{
	if(preg_match('/[^A-Za-z0-9]/', $password))
	{

		array_push($error_array, "Your password can contain only english characters or numbers");
    echo "Your password can contain only english characters or numbers";
	}
}


if(empty($error_array))
{



//Password Hashing

		$password = password_hash($password,PASSWORD_DEFAULT);













				$query = mysqli_query($conn, "INSERT INTO users VALUES ('',  '$name', '$email', '$password', '$date', '$mobile', '$university','$department','$year')");


        echo 'done';



		//Clear session variables
		$_SESSION['reg_fname'] = "";
		$_SESSION['reg_lname'] = "";
		$_SESSION['reg_email'] = "";
		$_SESSION['reg_email2'] = "";

}





}






//Profile picture assignment













function strip($data)
{
$data = trim($data);
$data = strip_tags($data);
$data = stripslashes($data);
$data = ucfirst(strtolower($data));
$data = htmlspecialchars($data);
return $data;
}

function stripp($data)
{
$data = trim($data);
$data = strip_tags($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}















 ?>

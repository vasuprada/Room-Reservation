<?php 
include('config.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
//echo "post method";
$rid = $_POST["rid"];
$fname = $_POST["fname"];
$email = $_POST["email"];
$roomid = $_POST["roomid"];
$stime = $_POST["stime"];
$etime = $_POST["etime"];
$purpose = $_POST["purpose"];
if (empty($_POST["rid"])){
    $unameErr = "Registration Id is required";
	$unameflag=FALSE;
	}
     else{
     $uname = test_input($_POST["rid"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9]*$/",$rid)){
       $unameErr = "Only letters and numbers allowed";
	   $unameflag=FALSE;
       }
     }

if (empty($_POST["fname"])){
    $fnameErr = "First Name is required";
	$fnameflag=FALSE;
	}
else
	 {
     $fname = test_input($_POST["fname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z]*$/",$fname)){
       $fnameErr = "Only letters allowed";
	   $fnameflag=FALSE;
       }
     }  

     

 if (empty($_POST["email"])){
  $emailErr = "Email is required"; 
  $emailflag=FALSE;
  }
  else{
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
       $emailErr = "Invalid email format";
	   $emailflag=FALSE;
       }
  }

$sql3="INSERT INTO reservation (reservationId,firstName,email,roomId,startTime,endTime,purpose)VALUES('$rid','$fname','$email','$roomid','$stime','$etime','$purpose')";
if(mysqli_query($con,$sql3)==true)
{
echo "New Reservation Made";

}
else
	echo "New Record could not be added";

mysqli_close($con);

}

?>

<?php
$dbhost  = 'localhost';    
$dbname  = 'roomreserve'; 
$dbuser  = 'root';   
$dbpass  = 'root';    

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  function test_input($data){
     $data = strip_tags($data);
     $data = htmlentities($data);
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>

<?php
include('config.php'); // Includes Login Script

 // Includes Login Script
?>
<!DOCTYPE html>
<html>
<head>
<title>Room Reservation</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Reserve a Room</h1>
<div id="menu">
<ul>
<li><a href="roomreserve_details.php">Reservation Details</a></li>
<li><a href="create_reservation.php">Create Reservation</a></li>
<ul><li><a href="modify_reservation.html">Modify Reservation</a></li>
<li><a href="delete_reservation.html">Delete Reservation</a></li>
</ul>
</div>
<div id="login">
<h2>Room and Reservation Details</h2>
<?php
$query = mysqli_query($con,"select * from room");
$query2 = mysqli_query($con,"select * from reservation");
$row_num = mysqli_num_rows($query);
$row_num2 = mysqli_num_rows($query2);
//$query2 = "select * from room";
?>
<h4> Room Details </h4>
<table border="2">
  <thead>
    <tr>
      <th>Id</th>
      <th>Room Id</th>
      <th>Room Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
	if ($query) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($query)) {
      
    /* fetch associative array */
            echo "<tr><td>".$row['$id']."</td><td>".$row['roomId']."</td><td>".$row['roomName']."</td></tr>\n";
        }
      }
	  else
		  echo "No rooms found";
    ?>
  </tbody>
</table>
<h4> Reservation Details </h4>
<table border="2">
  <thead>
    <tr>
      <th>Id</th>
      <th>Reservation Id</th>
      <th>First Name</th>
	  <th>Email</th>
	  <th>Room Id</th>
	  <th>Start Time</th>
	  <th>End Time</th>
	  <th>Purpose</th>
    </tr>
  </thead>
  <tbody>
    <?php
	if ($query2) {

    /* fetch associative array */
    while ($row2 = mysqli_fetch_assoc($query2)) {
      
    /* fetch associative array */
            echo "<tr><td>".$row2['$id']."</td><td>".$row2['reservationId']."</td><td>".$row2['firstName']."</td>
			<td>".$row2['email']."</td><td>".$row2['roomId']."</td><td>".$row2['startTime']."</td>
			<td>".$row2['endTime']."</td><td>".$row2['purpose']."</td></tr>\n";
        }
      }
	  else
	  {
		  if($row_num2==0)
	  		  echo "<h3>"."No reservations found"."</h3>";
	  }
    ?>
  </tbody>
</table>
</div>
</div>
</body>
</html>

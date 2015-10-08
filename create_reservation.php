<?php
include('config.php'); // Includes Login Script

 // Includes Login Script
?>
<!DOCTYPE html>
<html>
<head>
<title>Room Reservation</title>
<link href="main.css" rel="stylesheet" type="text/css">
     <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	
     
</head>
<body>


<div id="main">
<h1>Reserve a Room</h1>
<ul>
<li><a href="roomreserve_details.php">Reservation Details</a></li>
<li><a href="create_reservation.php">Create Reservation</a></li>
<ul><li><a href="modify_reservation.html">Modify Reservation</a></li>
<li><a href="delete_reservation.html">Delete Reservation</a></li>
</ul>
<!--<div id ="login">--><form method = "post" action="validate_register.php">
<label>Reservation Id:</label>&nbsp;&nbsp;<input id="test1" type="text"  name="rid" value=""  required  autofocus="true" /><br/><br/>
<label>First Name</label>&nbsp;&nbsp;<input id="test4" type="text" name="fname" value="" required  autofocus="true" /><br/><br/>
<label>E-mail</label>&nbsp;&nbsp;<input id="test9" type="text" name="email" value="" required  autofocus="true" /><br/><br/>
<label>Room Id</label>&nbsp;&nbsp;<input id="test5" type="text" name="roomid" value=""  /><br/><br/>
<div id="datetimepicker" class="input-append date">
     
<label>Start Time</label>&nbsp;&nbsp;<input type="text" name="stime"></input>
      <span class="add-on">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
<label>End Time</label>&nbsp;&nbsp;<input type="text" name="etime"></input>
      <span class="add-on">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
	  </div>
<!--</div-->
<script type="text/javascript" 
	src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script>
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'en'
      });
    </script>
<label>Purpose:</label>&nbsp;&nbsp;<textarea id="test10" name="purpose" rows="5" cols="40"  value="" required  autofocus="true"></textarea><br/><br/>

    <input type="submit" value="Reserve">
</form>


</div>
</body>
</html>

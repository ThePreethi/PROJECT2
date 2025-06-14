<html>
<head>
<title>Event bookings</title>
</head>
<body>
<center>
<h3><b><strong>Event Bookings</strong></b></h3>
</center>
<?php
include("conf.php");
$record=array();
$result=mysqli_query($mysqli,"SELECT * from event ");
if($result){
  if($result -> num_rows){
    while($row=$result -> fetch_object()){
         $record[]=$row;
    }
  }
}
foreach($record as $r){
    echo"Name: ".$r -> name;
    echo"<br>";
     echo"E-Mail: ".$r -> email;
    echo"<br>";
    echo"Phone no.: ".$r -> phone;
    echo"<br>";
    echo"Event type: ".$r -> event_type;
    echo"<br>";
    echo"Theme: ".$r -> theme;
    echo"<br>";
    echo"Venue: ".$r -> venue;
    echo"<hr>";
}
?>     
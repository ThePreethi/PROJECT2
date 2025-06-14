<html>
<head>
<title>Queries</title>
</head>
<body>
<center>
<h3><b><strong>Queries</strong></b></h3>
</center>
<?php
include("conf.php");
$record=array();
$result=mysqli_query($mysqli,"SELECT * from contactus ");
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
    echo"Message: ".$r -> msg;
    echo"<hr>";
}
?>     
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event Booking Form</title>
<link rel="icon" href="file:///C:/Users/91824/Downloads/Preview" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
ul {
    list-style-type: none;
    margin: 5px;
    padding: 0px;
    overflow: hidden;
}

li {
    float: left;
}

li a {
    display: block;
    background-color: #FFF0F5;
    width: 100%;
    text-decoration: none;
    cursor: pointer;
    padding:50px;
    text-align:center;
}

li a:hover {
    color: #ff1493;
}

.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 8px;
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

 h1 {
            color: green;
        }
        .btn {
            background-color: light-green;
            padding: 12px 16px;
            font-size: 16px;
            cursor:pointer;
        }
        .btn:hover {
            background-color: lavender;
        }
a{
   text-decoration: none;
}
</style>
</head>
<body>
<button><a href="C:\xamppp\htdocs\micro\Home.html " style="text-decoration:none; font-size:20px; background-color=blue;">Home</a></button>
<div class="container">
    <h2>Event Booking Form</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="event_type">Event Type:</label>
        <select id="event_type" name="event_type" required>
            <option disabled selected value> -- select an option -- </option>
            <option value="Birthday">Birthday</option>
            <option value="Wedding">Wedding</option>
            <option value="Corporate">Corporate</option>
            <option value="Other">Other</option>
        </select> 

        <label for="theme">Select Theme:</label>
        <select id="theme" name="theme">
            <option disabled selected value> -- select an option -- </option>
            <option value="Classic">Classic</option>
            <option value="Modern">Modern</option>
            <option value="Vintage">Vintage</option>
            <option value="Custom">Custom</option>
        </select>

        <label for="venue">Select Venue:</label>
        <select id="venue" name="venue">
            <option disabled selected value> -- select an option -- </option>
            <option value="Venue 1">Venue 1</option>
            <option value="Venue 2">Venue 2</option>
            <option value="Venue 3">Venue 3</option>
            <option value="Custom">Custom</option>
        </select>

        <input type="submit" value="Book Now" name="submit">
    </form> 
</div>
<?php
include("conf.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone = $_POST["phone"];
$date = $_POST["date"];
$event_type = $_POST["event_type"];
$theme = isset($_POST["theme"]) ? $_POST["theme"] : "Not specified";
$venue = isset($_POST["venue"]) ? $_POST["venue"] : "Not specified";

$result=mysqli_query($mysqli,"INSERT into event values('$name','$email','$phone','$date','$event_type', '$theme', '$venue')");
if($result)
{
  echo"Event Successfully Booked<br>";
}
else
{
  echo"Failed";
}
}
?>
<b><strong><button><a href="http://localhost/micro/cancel.php">click here to cancel your event bookings</a></button></strong></b>
<b><strong><button style="float:right;"><a href="updates.php">click here to update your event booking details</a></button></strong></b>
</body>
</html>

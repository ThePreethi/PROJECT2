<html>
<head>
<title>Event cancelling Form</title>
<style>
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
</style>
</head>
<body>
<div class="container">
    <h2>Event Cancellation Form</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <input type="submit" value="Cancel Booking" name="submit">
    </form>
</div>
<?php
include("conf.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];

$result=mysqli_query($mysqli,"DELETE from event where name='$name' ");
if($result){
echo"Event booked under the name $name is cancelled successfully";
}
else{
echo"Failed";
}
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Event Booking Details</title>
<link rel="icon" href="file:///C:/Users/91824/Downloads/Preview" type="image/x-icon">
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

<?php
include("conf.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$result=mysqli_query($mysqli,"SELECT * FROM event WHERE name='$name' ");
if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<div class="container">
<h2>Update Event Booking Details Form</h2>
<form method="post">

<label for="name">Name:</label><br>
<input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"readonly><br>

<label for="email">Email:</label><br>
<input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

<label for="phone">Phone:</label><br>
<input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

<label for="date">Date:</label><br>
<input type="date" id="date" name="date" value="<?php echo $row['date']; ?>"><br><br>

<label for="event_type">Event Type:</label><br>
<select id="event_type" name="event_type">
    <option value="Birthday" <?php if($row['event_type'] == 'Birthday') echo 'selected="selected"'; ?>>Birthday</option>
    <option value="Wedding" <?php if($row['event_type'] == 'Wedding') echo 'selected="selected"'; ?>>Wedding</option>
    <option value="Corporate" <?php if($row['event_type'] == 'Corporate') echo 'selected="selected"'; ?>>Corpoarte</option>
    <option value="Other" <?php if($row['event_type'] == 'Other') echo 'selected="selected"'; ?>>Other</option>
</select><br>

<label for="theme">Theme:</label><br>
<select id="theme" name="theme">
    <option value="Classic" <?php if($row['theme'] == 'Classic') echo 'selected="selected"'; ?>>Classic</option>
    <option value="Modern" <?php if($row['theme'] == 'Modern') echo 'selected="selected"'; ?>>Modern</option>
    <option value="Vintage" <?php if($row['theme'] == 'Vintage') echo 'selected="selected"'; ?>>Vintage</option>
    <option value="Custom" <?php if($row['theme'] == 'Custom') echo 'selected="selected"'; ?>>Custom</option>
</select><br>

<label for="venue">Venue:</label><br>
<select id="venue" name="venue">
    <option value="Venue 1" <?php if($row['venue'] == 'Venue 1') echo 'selected="selected"'; ?>>Venue 1</option>
    <option value="Venue 2" <?php if($row['venue'] == 'Venue 2') echo 'selected="selected"'; ?>>Venue 2</option>
    <option value="Venue 3" <?php if($row['venue'] == 'Venue 3') echo 'selected="selected"'; ?>>Venue 3</option>
    <option value="Custom" <?php if($row['venue'] == 'Custom') echo 'selected="selected"'; ?>>Custom</option>
</select><br>

<input type="submit" value="Update" name="update">
    
</form>
</div>
<?php
}
else {
   echo "No event booked under the name: " . $name;
}
}
?>
</body>
</html>
<?php
include("conf.php");
if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $event_type = isset($_POST['event_type']) ? $_POST['event_type'] : '';
    $theme = isset($_POST['theme']) ? $_POST['theme'] : '';
    $venue = isset($_POST['venue']) ? $_POST['venue'] : '';

$result=mysqli_query($mysqli,"UPDATE event SET email='$email', phone='$phone', date='$date', event_type='$event_type', theme='$theme', venue='$venue' WHERE name='$name' ");
if($result)
{
  echo"Details Successfully Updated<br>";
}
else
{
  echo"Failed";
}
}
?>
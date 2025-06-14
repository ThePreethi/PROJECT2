<?php
include("conf.php");

if(isset($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];
    $sql = "SELECT * FROM event_bookings WHERE id='$booking_id'";
    $result = mysqli_query($mysqli, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Fetch the booking details
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $event_date = $row['event_date'];
    } else {
        echo "Booking not found!";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Booking Details</title>
</head>
<body>
    <h2>Update Booking Details</h2>
    <form method="post">
        <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>"><br>
        <label for="event_date">Event Date:</label><br>
        <input type="text" id="event_date" name="event_date" value="<?php echo $event_date; ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>

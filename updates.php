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
<div class="container">
    <h2>Update Event Booking Details Form</h2>
    <form method="post" action="up.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <input type="submit" value="ok" name="submit">
    </form>
</div>
</body>
</html>
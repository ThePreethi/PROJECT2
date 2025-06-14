<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us </title>
<link rel="icon" href="file:///C:/Users/91824/Downloads/Preview.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
        h1 {
            color: green;
        }
        .btn {
            background-color: light-green;
            padding: 12px 16px;
            font-size: 16px;
        }
        .btn:hover {
            background-color: lavender;
        }
a{
   text-decoration: none;
}
    body {
        font-family:sans-serif;
       
        background-color: aquamarine;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px ;
    }
    h1 {
        text-align: center;
        color: Crimson;
    }
    p {
    
        color: black;
    }
    .contact-info {
        margin-top: 20px;
    }
    .contact-info p {
        margin-bottom: 10px;
    }
    .contact-form {
        margin-top: 20px;
    }
    .contact-form input[type="text"], .contact-form input[type="email"], .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .contact-form textarea {
        height: 150px;
    }
    .contact-form input[type="submit"] {
        background-color: beige;
        color: black;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .contact-form input[type="submit"]:hover {
        background-color: beige;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Contact Us</h1>
    <div class="contact-info">
        <p>If you have any questions or inquiries, please feel free to reach out to us using the contact details below:</p>
        <p>Email: info@pkmieventmanagementsystem.com</p>
        <p>Phone: +1 (123) 456-7890</p>
        <p>Address: 123 Main Street, City, Country</p>
    </div>
    <div class="contact-form">
        <h2>Send us a message</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="msg" placeholder="Your Message" required></textarea>
            <input type="submit" value="Send Message" name="submit">
        </form>
    </div>
</div>
<?php
include("conf.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$result=mysqli_query($mysqli,"INSERT into contactus values('$name','$email','$msg')");
if($result)
{
  echo"Message sent Successfully";
}
else
{
  echo"Failed";
}
}
?>
</body>
</html>

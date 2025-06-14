<html>
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<style>
    body {
        font-family:  sans-serif;
        background-image: url('https://i.pinimg.com/564x/1b/b2/a6/1bb2a61fee3e2142e6f79358bfd48f97.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .login-container {
        background-color: thistle;
        padding: 50px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px ;
    }
    
    .login-container h2 {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    .login-container input[type="submit"] {
        width: 100%;
        background-color: mediumaquamarine;
        color: black;
        
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    
    }
    
</style>
<link rel="icon" href="file:///C:/Users/91824/Downloads/Preview" type="image/x-icon">
</head>
<body>
<div class="login-container">
    <h2>PKMI EVENTS & CO<br><br>Admin Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" name="submit">
    </form>
</div>
<?php
include("conf.php");

$username = $_POST['username'];
$password = $_POST['password'];

$result=mysqli_query($mysqli,"SELECT * FROM login WHERE username = '$username' AND password = '$password' ");

if ($result->num_rows > 0) {
    header("Location: file:///C:/Users/91824/Desktop/microproject/Home.html");
} else {
    echo "Invalid username or password";
}

?>
</body>
</html>

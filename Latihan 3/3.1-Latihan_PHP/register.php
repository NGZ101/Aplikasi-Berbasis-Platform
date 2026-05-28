<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    echo "User is added <br>";
    echo "<a href='login.php'>Back to Login</a>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="register_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Register</h1>
    <form action="" method="POST">
        <div class="form">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="form">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="button">
            <button type="submit" class="register-button">Send</button>
            <a href="login.php" class="login-link">Login</a>
        </div>
    </form>
</body>

</html>
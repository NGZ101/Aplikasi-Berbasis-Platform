<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {

        if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
            echo "Welcome $username";
        } else {
            echo "Wrong Username / Password";
        }
    } else {
        echo "Wrong Username / Password";
    }
} else {
    echo "Please login first";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
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
            <button type="submit" class="login-button">Login</button>
            <a href="register.php" class="register-link">Register</a>
        </div>
    </form>
</body>

</html>
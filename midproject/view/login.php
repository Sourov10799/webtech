<?php
include("../control/logincontrol.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" align="center" method="post">
        <label for="mail">Email</label>
        <input type="email" name="email" id="mail" placeholder="Your Email Address"><br><br>
        <label for="passw">Password</label>
        <input type="password" name="pass" id="passw" placeholder="Enter Your Password"><br><br>
        <input type="submit" name="submit" value="Log-In">

    </form>
</body>
</html>
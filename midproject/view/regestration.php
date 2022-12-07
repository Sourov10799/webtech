<?php
include ("../control/process.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" align="center" method="post" enctype="multipart/form-data" >
        <label for="fname">Full Name:</label>
        <input type="text" name="fullname" id="fname" placeholder="Your First Name">
        <?php echo $nameError; ?><br><br>
        <label for="email">Email Address:</label>
        <input type="email" name="mail" id="email" placeholder="Enter Your Email">
        <?php echo $emailError; ?><br><br>
        <label for="pnumber">Phone Number:</label>
        <input type="number" name="phn" id="pnumber" placeholder="Enter Your Phone Number">
        <?php echo $phnError; ?><br><br>

        <label for="carmodel">Car Model:</label>
        <input type="text" name="carmod" id="carmodel" placeholder="Car Model">
        <?php echo $carmodError; ?><br><br>


        <label for="carnum">Car Number:</label>
        <input type="text" name="carnum" id="carnum" placeholder="Car Number">
        <?php echo $carnumError; ?><br><br>

        <label for="nid">National ID:</label>
        <input type="number" name="nidnum" id="nid" placeholder="Your NID Number">
        <?php echo $nidError; ?><br><br>

        <label for="pass">Your Password:</label>
        <input type="password" name="passwo" id="pass" placeholder="Enter Your Password">
        <?php echo $passError; ?><br><br>
        <label for="cp">Car Picture:</label>
        <input type="file" name="myfile" id="cp"><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
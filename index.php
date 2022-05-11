<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
  <script src = "script.js"></script>
  <link rel="stylesheet" href="style/index.css">
  <title>GreenI</title>
</head>
<body>
  <div class="navbar">
    <div>
    <h1 style = "display: inline; float: left;">GreenI</h1>
    <h3 style = "display: inline; float: right;">Hello, <?php echo $user_data['user_name'];?></h3>
    <br><br><br>
    </div>
  <a href = "logout.php" id = "logout">Logout</a>
  <a href="index.php">Home</a>
  <a href="funfacts.php">Fun facts</a>
  <a href="aboutus.html">About us</a>
  </div>

</body>s
</html>

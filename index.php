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
  <link rel="stylesheet" href="styles.css">
  <title>GreenI</title>
</head>
<body>
  <a href = "logout.php">Logout</a>
  <h1>This is the index page</h1>
  <br>
  Hello, <?php echo $user_data['user_name'];?>

  <h1>GreenI</h1>
  <div class = "w3content">
    <img class="mySlides" src="img1.jpg" alt = "shaking hands with nature">
    <img class="mySlides" src="img2.jpg" alt = "the arctic, being attacked by global warming">
    <img class="mySlides" src="img3.jpg" alt = "philosopical landscape, including a lightbulb, a turtle and a sea ship">
    <img class="mySlides" src="img4.jpg" alt = "a beautiful tropical turtle, freely floating around the sea">

    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
  </div>
</body>s
</html>

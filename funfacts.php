<?php
session_start();
$_SESSION;

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- <link rel="stylesheet" href="style\slideshowstyle.css"> -->
  <link rel="stylesheet" href="style\funfacts.css">
  <!-- <script src = "script.js"></script> -->
  <title>DB Project</title>
</head>
<body>
  <div class="navbar">
  <div>
  <h1 style = "display: inline; float: left;">Gelateria Eve</h1>
  <h3 style = "display: inline; float: right;">Hello, <?php echo $user_data['user_name'];?></h3>
  <br><br><br>
  </div>
  <a href="index.php">Home</a>
  <a href="funfacts.php">Fun facts</a>
  <a href="testimonies.php">About us</a>
  <a href = "login\logout.php" style="float:right">Logout</a>
  </div>

<div class = "slidershow middle">
  <div class="slides">
    <input type = "radio" name = "r" id = "r1" checked>
    <input type = "radio" name = "r" id = "r2">
    <input type = "radio" name = "r" id = "r3">
    <input type = "radio" name = "r" id = "r4">

    <div class="slide s1">
      <div class="numbertext"> 1 / 4 </div>
      <img src="resources/img1.jpg" alt = "">
      <div class="text">Caption Text</div>
    </div>

    <div class="slide">
      <div class="numbertext"> 2 / 4 </div>
      <img src="resources/img2.jpg"alt = "">
      <div class="text">Caption Two</div>
    </div>

    <div class="slide">
      <div class="numbertext"> 3 / 4 </div>
      <img src="resources/img3.jpg" alt = "">
      <div class="text">Caption Three</div>
    </div>

    <div class="slide">
      <div class="numbertext"> 4 / 4 </div>
      <img src="resources/img4.jpg" alt = "">
      <div class="text">Caption Four</div>
    </div>

    <div class = "navigation">
      <label for = "r1" class = "bar"></label>l>
      <label for = "r2" class = "bar"></label>
      <label for = "r3" class = "bar"></label>
      <label for = "r4" class = "bar"></label>
    </div>
    </div>
  </div>

  <br>

  <div class = "text">
    <h2>Fun facts about ice cream!</h2>

  </div>

  <br>
</body>
</html>

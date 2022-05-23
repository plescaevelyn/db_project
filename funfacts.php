<?php
session_start();
$_SESSION;

define('ADMIN','C:/xampp/htdocs/gelateria_eve');
include ADMIN . '/functions.php';

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
    <table>
      <tr>
        <td><h2>Gelateria Eve</h2></td>
        <td><h3 style = "display: inline; float: right;">Hello, <?php echo $user_data['user_name'];?></h3></td>
      </tr>
      <tr>
        <td><a href = "userindex.php">Home</a></td>
        <td><a href = "funfacts.php">Fun facts</a></td>
        <td><a href = "aboutus.php">About us</a></td>
        <td><a href = "testimonies.php">Testimonies</a></td>
        <td><a href = "userlogout.php" id = "logout" style = "float: right">Logout</a></td>
      </tr>
    </table>
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
    <p>When it comes to the invention of ice cream, it remains a hot debate although we do know an ice-cream-like food was first eaten in China in 618-97AD by King Tang of Shang.</p>
    <p>The tallest ice cream cone was over 9 feet tall in Italy</p>
    <p>Ice cream headaches or “brain freeze” is the result of the nerve endings in the roof of your mouth sending a message to your brain of the loss of heat</p>
    <p>The country that consumes the most ice cream is USA, followed by Australia then Norway.</p>
    <p>William Dreyer, of Dreyer’s Ice Cream, is thought to be the original concoctor of Rocky Road in 1929. Partnering with candy maker Joseph Edy, he debuted the first incarnation of the now-famous flavor in Oakland, California.</p>
    <p>Food historians note the history of ice cream started with ancient flavored ice just like Emperor Nero enjoyed, however by the Victorian times people began using elaborate molds and presses using milk, cream and butterfat as ingredients.</p>
  </div>

  <br>
</body>
</html>

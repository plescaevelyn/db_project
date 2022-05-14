<?php
session_start();

include("connection.php");
include("functions.php");

error_reporting (E_ALL ^ E_NOTICE);
$user_data = check_login($con);

if (isset($_POST['user_name'])){
  $user_name = $_POST['user_name'];
}

if (isset($_POST['email'])){
  $email = $_POST['email'];
}

if (isset($_POST['comment'])){
  $comment = $_POST['comment'];
}

mysqli_select_db($con,"feedback");

$query = "insert into feedback (user_name, email, comment) values ('$user_name','$email','$comment')";
if (!mysqli_query($con,$query)) {
  die("Error in posting values");
}
echo "Feedback stored in table succesfully!";
?>

<!DOCTYPE html>
<html>
<head>
</head>
  <link rel = "stylesheet" href = "style/testimonies.css">
  <meta charset="utf-8">
  <title>Gelateria Eve</title>
<body>
  <div class="navbar">
    <div>
    <h1 style = "display: inline; float: left;">Gelateria Eve</h1>
    <h3 style = "display: inline; float: right;">Hello, <?php echo $user_data['user_name'];?></h3>
    <br><br><br>
    </div>
  <a href = "login/logout.php" id = "logout">Logout</a>
  <a href = "index.php">Home</a>
  <a href = "funfacts.php">Fun facts</a>
  <a href = "aboutus.html">About us</a>
  </div>

  <form action = "testimonies.php" method = "post">

    <table>
    <tr>
    <td><label for="user_name">Username:</label></td>
    <td><input type = "text" name = "user_name"></input></td>
    </tr>

    <tr>
    <td><label for="email">e-mail adress:</label></td>
    <td><input type = "text" name = "email"></input></td>
    </tr>

    <tr>
    <td><label for="comment">Your comment:</label></td>
    <td><textarea name = "comment" row = "15" cols = "50"></textarea></td>
    </tr>
    </table>

    <p><input type = submit value = "Submit!"></input>
    <p><input type = reset value = "Clear!"></input>
  </form>
</body>
</html>

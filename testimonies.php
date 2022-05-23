<?php
define('ADMIN','C:/xampp/htdocs/gelateria_eve');
include ADMIN . '/functions.php';

error_reporting (E_ALL ^ E_NOTICE);
$con = mysqli_connect("localhost","root","","gelateria_eve");
mysqli_select_db($con,"gelateria_eve");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

  mysqli_select_db($con,"gelateria_eve");

  $query = "insert into `feedback` (`user_name`, `email`, `comment`) values ('$user_name','$email','$comment')";
  if (mysqli_query($con,$query)) {
    header("Location: testimonies.php");
    echo "Feedback stored in table succesfully!";
  } else {
    echo "error";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <!-- <link rel = "stylesheet" href = "style\testimonies.css"> -->
  <meta charset="utf-8">
  <title>Gelateria Eve</title>
</head>
<body id = "body">
  <div class="navbar">
    <table>
      <tr>
        <td><h2>Gelateria Eve</h2></td>
      </tr>
      <tr>
        <td><a href = "userindex.php">Home</a></td>
        <td><a href = "funfacts.php">Fun facts</a></td>
        <td><a href = "testimonies.php">Testimonies</a></td>
        <td><a href = "aboutus.php">Testimonies</a></td>
        <td><a href = "userlogout.php" id = "logout" style = "float: right">Logout</a></td>
      </tr>
    </table>
  </div>

  <div id = "box">
  <form method="POST">
    <form method = "post" class="modal-content animate" action="/action_page.php">
       <div class = "container">
         <table>
         <tr>
         <td><label for="user_name">Username:</label></td>
         <td><input type = "text" name = "user_name" placeholder="Your user name" required></input></td>
         </tr>

         <tr>
         <td><label for="email">E-mail adress:</label></td>
         <td><input type = "text" name = "email" placeholder="Your e-mail (optional)"></input></td>
         </tr>

         <tr>
         <td><label for="comment">Your feedback:</label></td>
         <td><textarea name = "comment" row = "15" cols = "50" placeholder="Your feedback here!"></textarea></td>
         </tr>

         <tr>
           <td><input id = "button" type = submit value = "Submit!"></input></td>
           <td><input id = "button" type = reset value = "Clear!"></input></td>
         </tr>
         </table>
      </div>
    </form>
  </div>
</form>
</body>
</html>

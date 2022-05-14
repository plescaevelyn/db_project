<?php
include("../connection.php");
include("../functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $email = $_POST['mail'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email)){
    // save to database
    $user_id = random_num(20);
    $query = "insert into users (user_id, user_name, password, mail) values ('$user_id','$user_name','$password','$email')";

    mysqli_query($con, $query);

    header("Location: ../login/login.php");
    die;
  } else {
    echo "Please enter some valid information!";
  }
}
?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Sign up</title>
   <link rel="stylesheet" href="../style/styles.css">
 </head>
<form method="POST"
 <div style = "font-size: 20px;margin: 10px;">Sign up</div><br>

 <body id = "body">
   <div id = "box">
     <form method = "post" class="modal-content animate" action="/action_page.php">
       <div class = "container">
        <label for = "user_name"><b>Username</b></label>
        <input id = "text" type = "text" placeholder = "Enter Username" name = "user_name" required>
        <br><br>

        <label for = "password"><b>Password</b></label>
        <input id = "text" type = "password" placeholder = "Enter Password" name = "password" required>
        <br><br>

        <label for = "mail"><b>e-mail address</b></label>
        <input id = "text" type = "text" placeholder = "Enter e-mail adress" name = "mail">
        <br><br>

        <button type="submit" id = "button">Sign up</button><br><br>
        <a href = "login.php">Already have an account? Click to log in</a><br><br>
       </div>
     </form>
   </div>
 </form>
 </body>
 </html>

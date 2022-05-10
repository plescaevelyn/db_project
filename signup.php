<?php
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
    // save to database
    $user_id = random_num(20);
    $query = "insert into users (user_id, user_name, password) values ('$user_id','$user_name','$password')";

    mysqli_query($con, $query);

    header("Location: login.php");
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
   <link rel="stylesheet" href="styles.css">
 </head>
 <body id = "body">
   <div id = "box">
     <form method = "post" class="modal-content animate" action="/action_page.php">
       <div class="container">
        <label for="uname"><b>Username</b></label>
        <input id = "text" type = "text" placeholder = "Enter Username" name = "uname" required>
        <br><br>

        <label for="psw"><b>Password</b></label>
        <input id = "text"type="password" placeholder="Enter Password" name="psw" required>
        <br><br>

        <button type="submit" id = "button">Login</button><br><br>
        <a href = "signup.php">Click to log in</a><br><br>
       </div>
     </form>
   </div>
 </body>
 </html>

<?php
session_start();
$_SESSION;
include("../connection.php");
include("../functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $user_name =  $_POST['user_name'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
    // read from database
    $user_id = random_num(20);
    $query = "select * from users where user_name = '$user_name' limit 1";

    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] == $password) {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: ../index.php");
          die;
        }
      }
    echo "Wrong username or password!";
    } else {
        echo "Wrong username or password!";
    }
    header("Location: user\index.php");
    die;
  } else {
    echo ("Please enter some valid information!");
  }
}
?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Login</title>
   <link rel="stylesheet" href = "style\styles.css">
 </head>
 <body id = "body">
   <div id = "box">
   <form method = "POST">
      <div style = "font-size: 20px;margin: 10px;">Login</div><br>

        <form method = "post" class="modal-content animate" action="/action_page.php">
           <div class = "container">
             <table>
             <tr>
               <td><label for = "user_name"><b>Username</b></label></td>
               <td><input id = "text" type = "text" placeholder = "Enter Username" name = "user_name" required></td>
             </tr>

             <tr>
               <td><label for="password"><b>Password</b></label></td>
               <td><input id = "text" type = "password" placeholder = "Enter Password" name = "password" required></input></td>
             </tr>

             <tr>
               <td><input type = submit value = "Submit!"></input></td>
             </tr>

             <tr>
               <td><a href = "signup.php">Click here to sign up</a></td>
             </tr>
             </table>
          </div>
        </form>
      </div>
     </form>
   </div>
 </body>
 </html>

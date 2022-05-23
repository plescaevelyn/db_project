<?php
session_start();
$_SESSION;
include("../connection.php");
include("../functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $admin_username =  $_POST['admin_username'];
  $password = $_POST['password'];

  if(!empty($admin_username) && !empty($password) && !is_numeric($admin_username)){
    // read from database
    $user_id = random_num(20);
    $query = "select * from admin where admin_username = '$admin_username' limit 1";

    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] == $password) {
          $_SESSION['admin_username'] = $user_data['admin_username'];
          header("Location: ../index.php");
          die;
        }
      }
    echo "Wrong username or password!";
    } else {
        echo "Wrong username or password!";
    }
    header("Location: ../index.php");
    die;
  } else {
    echo "Please enter some valid information!";
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
               <td><label for = "admin_username"><b>Username</b></label></td>
               <td><input id = "text" type = "text" placeholder = "Enter Username" name = "admin_username" required></td>
             </tr>

             <tr>
               <td><label for="password"><b>Password</b></label></td>
               <td><input id = "text" type = "password" placeholder = "Enter Password" name = "password" required></input></td>
             </tr>

             <tr>
               <td><input type = submit value = "Login!"></input></td>
             </tr>
             </table>
          </div>
        </form>
      </div>
     </form>
   </div>
 </body>
 </html>

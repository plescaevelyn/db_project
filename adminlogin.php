<?php
  session_start();
  $_SESSION;
  define('ADMIN','C:/xampp/htdocs/gelateria_eve');
  include ADMIN . '/functions.php';

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $admin_username =  $_POST['admin_username'];
  $password = $_POST['password'];

  if(!empty($admin_username) && !empty($password) && !is_numeric($admin_username)){
    // read from database
    $query = "select * from admin where admin_username = '$admin_username' limit 1";

    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] == $password) {
          $_SESSION['admin_username'] = $user_data['admin_username'];
          header("Location: adminindex.php", true);
          die;
        }
      }
      echo "Wrong username or password!";
    } else {
        echo "Wrong username or password!";
    }

    header("Location: uiindex.html");
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
   <link rel="stylesheet" href = "login.css">
 </head>
 <body id = "body">
   <form method = "POST">
   <div class="login">
     <div class="heading">
       <h2>Sign in</h2>
         <div class="input-group input-group-lg">
           <span class="input-group-addon"><i class="fa fa-user" for = "admin_username"></i></span>
           <input type="text" class="form-control" placeholder="Username" name = "admin_username">
          </div>
          <div class="input-group input-group-lg">
            <span class="input-group-addon"><i class="fa fa-lock" for = "password"></i></span>
            <input type="password" class="form-control" placeholder="Password" name = "password">
          </div>

          <button type="submit" class="float">Login</button>

          <a href = "usersignup.php">Click here to sign up!</a>
    </div>
   </div>
   </form>
 </body>
 </html>

<?php

define('ADMIN','C:/xampp/htdocs/gelateria_eve');
include ADMIN . '/functions.php';

$user_data = check_user_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $user_name =  $_POST['user_name'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
    // read from database
    $query = "select * from users where user_name = '$user_name' limit 1";

    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] == $password) {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: userindex.php");
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
    echo ("Please enter some valid information!");
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
   <style>
     body{
       width: 100%;
       height: 100vh;
       background-image: url(resources/loginbg.png);
       background-size: auto;
       background-position: center;
       background-repeat: repeat;
       box-sizing: border-box;
       padding-left: 8%;
       padding-right: 8%;
     }
   </style>
	 <form method = "POST">
	 <div class="login">
	   <div class="heading">
	     <h2>Sign in</h2>
	     <form action="#">

	       <div class="input-group input-group-lg">
	         <span class="input-group-addon"><i class="fa fa-user" for = "user_name"></i></span>
	         <input type="text" class="form-control" placeholder="Username" name = "user_name">
	           </div>

	         <div class="input-group input-group-lg">
	           <span class="input-group-addon"><i class="fa fa-lock" for ="password"></i></span>
	           <input type="password" class="form-control" placeholder="Password" name = "password">
	         </div>

	         <button type="submit" class="float">Login</button>

					 <a href = "usersignup.php">Click here to sign up!</a>
	        </form>
	  		</div>
	  </div>
	 </form>
 </body>
 </html>

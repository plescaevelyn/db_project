<?php
session_start();
$_SESSION;
define('ADMIN','C:/xampp/htdocs/gelateria_eve');
include ADMIN . '/functions.php';

	$user_data = check_user_login($con);

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
          header("Location: userindex.php");
          die;
        }
      }
    echo "Wrong username or password!";
    } else {
        echo "Wrong username or password!";
    }
    header("Location: uiindex.php");
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
	 <form method = "POST">
	 <div class="login">
	   <div class="heading">
	     <h2>Sign in</h2>
	     <form action="#">

	       <div class="input-group input-group-lg">
	         <span class="input-group-addon"><i class="fa fa-user"></i></span>
	         <input type="text" class="form-control" placeholder="Username or email">
	           </div>

	         <div class="input-group input-group-lg">
	           <span class="input-group-addon"><i class="fa fa-lock"></i></span>
	           <input type="password" class="form-control" placeholder="Password">
	         </div>

	         <button type="submit" class="float">Login</button>

					 <a href = "usersignup.php">Click here to sign up!</a>
	        </form>
	  		</div>
	  </div>
	 </form>
 </body>
 </html>

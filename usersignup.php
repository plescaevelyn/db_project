<?php

define('ADMIN','C:/xampp/htdocs/gelateria_eve');
include ADMIN . '/functions.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // something was posted
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email)){
    // save to database
    $user_id = random_num(20);
    $query = "insert into users (user_id, user_name, password, mail) values ('$user_id','$user_name','$password','$email')";

    mysqli_query($con, $query);
    header("Location: userlogin.php");
    die;
  } else {
    echo "Please enter some valid information!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="login.css">
	<title>Gelateria Eve</title>
</head>
<body>
<form method="post" action="usersignup.php">
  <div class="container">
    <form method = "POST">
 	 <div class="login">
 	   <div class="heading">
 	     <h2>Register</h2>
 	     <form action="#">

 	       <div class="input-group input-group-lg">
 	         <span class="input-group-addon" for = "user_name"><i class="fa fa-user"></i></span>
 	         <input type="text" class="form-control" placeholder="Username" name = "user_name">
 	           </div>

           <div class="input-group input-group-lg">
             <span class="input-group-addon" for = "email"><i></i></span>
             <input type="text" class="form-control" placeholder="Email" name = "email">
            </div>

 	         <div class="input-group input-group-lg">
 	           <span class="input-group-addon" for = "password"><i class="fa fa-lock"></i></span>
 	           <input type="password" class="form-control" placeholder="Password" name = "password">
 	         </div>

 	         <button type="submit" class="float">Sign up</button>

 					 <a href = "userlogin.php">Already a member? Click here to login!</a>
 	        </form>
 	  		</div>
 	  </div>
 	 </form>
</form>
</body>
</html>

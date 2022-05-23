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
  <link rel="stylesheet" href="style.css">
	<title>Gelateria Eve</title>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="usersignup.php">
  <div class="container">
    <td>
      <th><label for="user_name"><b>Username</b></label></th>
      <th><input id = "text" type = "text" placeholder = "Enter Username" name = "user_name" required></th>
    </td>

    <td>
      <th><label for="email"><b>E-mail</b></label></th>
      <th><input id = "text" type = "text" placeholder = "Enter email adress" name = "email" required></th>
    </td>

    <td>
      <th><label for="password"><b>Password</b></label></th>
      <th><input id = "text"type="password" placeholder="Enter Password" name="password" required></th>
    </td>

    <td>
      <th><button type="submit" class="btn" name="register_btn">Register</button></th>
    </td>
  </div>
	<p>
		Already a member? <a href="userlogin.php">Sign in</a>
	</p>
</form>
</body>
</html>

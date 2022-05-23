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
  <link rel="stylesheet" href="style.css">
	<title>Gelateria Eve</title>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="registration.php">
  <?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $user_name; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>

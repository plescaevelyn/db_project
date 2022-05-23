<?php
	include('functions.php');
  if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login/login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
	<div class="header">
    <div class="navbar">
      <table>
        <tr>
          <td><h2>Gelateria Eve</h2></td>
          <td><h3 style = "display: inline; float: right;">Hello, <?php echo $user_data['user_name'];?></h3></td>
        </tr>
        <tr>
          <td><a href = "index.php">Home</a></td>
          <td><a href = "funfacts.php">Fun facts</a></td>
          <td><a href = "testimonies.php">Testimonies</a></td>
          <td><a href = "aboutus.php">Testimonies</a></td>
          <td><a href = "login/logout.php" id = "logout" style = "float: right">Logout</a></td>
        </tr>
      </table>
    </div>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<div class="profile_info">
			<!-- <img src="images/user_profile.png"  > -->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['user_name']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>

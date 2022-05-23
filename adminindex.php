<?php
	define('ADMIN','C:/xampp/htdocs/gelateria_eve');
	include ADMIN . '/functions.php';

	$user_data = check_admin_login($con);
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
          <td><h2>Gelateria Eve Management</h2></td>
          <td><h3 style = "display: inline; float: right;">Hello, <?php echo $user_data['user_name'];?></h3></td>
        </tr>
        <tr>
          <td><a href = "adminindex.php">Home</a></td>
          <td><a href = "employeemanagement.php">Menu Items Management</a></td>
          <td><a href = "menuitemmanagement.php">Customers Management</a></td>
          <td><a href = "adminlogout.php" id = "logout" style = "float: right">Logout</a></td>
        </tr>
      </table>
    </div>
	</div>
	<div class="content">
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

		<div class = "profile_info">
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

<?php
	define('ADMIN','C:/xampp/htdocs/gelateria_eve');
	include ADMIN . '/functions.php';

	$user_data = check_admin_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="adminindexstyle.css">
</head>
<body>
	<div class="header">
    <div class="navbar">
      <table>
        <tr>
          <td><h2>Gelateria Eve Management</h2></td>
          <!-- <td><h3 style = "display: inline; float: right;">Hello, <?php echo $user_data['user_name'];?></h3></td> -->
        </tr>
        <tr>
					<td><a href = "adminindex.php">Home</a></td>
          <td><a href = "menuitemmanagement.php">Menu Items Management</a></td>
          <td><a href = "employeemanagement.php">Employee Management</a></td>
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

		<div>
			<table>
			<h3> See most recent feedback!</h3>
			<tr class = "table-row">
				<th class = "table-header">Username</th>
				<th class = "table-header">Email</th>
				<th class = "table-header">Feedback</th>
			</tr>

			<?php
			error_reporting(0);
			$query = "SELECT user_name, email, comment FROM feedback";
			$data = mysqli_query($con, $query);
			$total = mysqli_num_rows($data);

			if ($total != 0) {
				while ($result = mysqli_fetch_assoc($data)){
					echo "
						<tr>
							<td>".$result['user_name']."</td>
							<td>".$result['email']."</td>
							<td>".$result['comment']."</td>
						</tr>
					";
				}
			} else {
				echo "No records found!";
			}
			 ?>
		 </table>
		</div>
	</div>
</body>
</html>

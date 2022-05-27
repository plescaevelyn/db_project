<?php
	define('ADMIN','C:/xampp/htdocs/gelateria_eve');
	include ADMIN . '/functions.php';

	$user_data = check_admin_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel = "stylesheet" href = "adminstyle.css">
</head>
<body>
	<div class="header">
		<ul>
			<h2>Gelateria Eve Management</h2>
		</ul>
		<ul>
			 <li><a href = "adminindex.php">Home</a></li>
			 <li><a href = "menuitemmanagement.php">Menu items management</a></li>
			 <li><a href = "employeemanagement.php">Employees management</a></li>
			 <li style = "float:right"><a class="active" href = "adminlogout.php">Log out</a></li>
		</ul>
	</div>

	<br>

	<div>
		<table id = "feedback">
		<h2 style = "text-align: left;"> See most recent feedback!</h2>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Feedback</th>
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
</body>
</html>

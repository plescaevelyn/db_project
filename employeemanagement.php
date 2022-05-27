<?php
	define('ADMIN','C:/xampp/htdocs/gelateria_eve');
	include ADMIN . '/functions.php';

	$user_data = check_admin_login($con);

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
          	header("Location: menuitemmanagement.php");
          	die;
        	}
      	}
    	echo "Wrong username or password!";
    	} else {
        	echo "Wrong username or password!";
    	}
    	header("Location: menuitemmanagement.php");
    	die;
  	} else {
    	echo ("Please enter some valid information!");
  	}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee management</title>
	<link rel="stylesheet" type="text/css" href="employeemanagementstyle.css">
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
	<br>
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

	<div class = "CRUD">
		<a href = "postemployee.php">Insert employee</a>
		<a href = "updateemployeeposition.php">Update employee position</a></tr>
		<a href = "updateemployeesalary.php">Update employee salary</a></tr>
		<a href = "deleteemployee.php">Fire employee</a>
	</div>

	<div class = "manageemployees">
		<table class = "responsive-table">
			<tr class = "table-row">
				<th class = "table-header">Employee ID</th>
				<th class = "table-header">Username</th>
				<th class = "table-header">Email address</th>
				<th class = "table-header">Salary</th>
				<th class = "table-header">No. of working hours</th>
				<th class = "table-header">Position</th>
			</tr>

		<?php
		error_reporting(0);
		$query = "SELECT * FROM employee";
		$data = mysqli_query($con, $query);
		$total = mysqli_num_rows($data);

		if ($total != 0) {
			while ($result = mysqli_fetch_assoc($data)){
				echo "
					<tr>
						<td>".$result['employee_id']."</td>
						<td>".$result['employee_username']."</td>
						<td>".$result['email']."</td>
						<td>".$result['salary']."</td>
						<td>".$result['work_hours_total']."</td>
						<td>".$result['position']."</td>
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
